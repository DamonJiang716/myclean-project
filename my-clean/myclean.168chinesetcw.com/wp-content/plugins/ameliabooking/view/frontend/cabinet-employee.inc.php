<?php
/**
 * @copyright © TMS-Plugins. All rights reserved.
 * @licence   See LICENCE.md for license details.
 */

?>

<?php
if (!empty($_GET['page']) && !empty($_GET['code'])) {
    $code = esc_attr($_GET['code']);
    echo "
<script>
var ameliaCodeUrl = new URL(window.location.href);
ameliaCodeUrl.searchParams.set('code', '" . $code . "');
window.history.replaceState(null, null, ameliaCodeUrl);
</script>
    ";
}
?>

<script>
<?php
    $timeZones = json_encode(\DateTimeZone::listIdentifiers(\DateTimeZone::ALL));
    echo "var wpAmeliaTimeZones = $timeZones;";
?>
  var bookingEntitiesIds = (typeof bookingEntitiesIds === 'undefined') ? [] : bookingEntitiesIds;
  bookingEntitiesIds.push(
    {
      'hasApiCall': 1,
      'trigger': '<?php echo esc_js($atts['trigger']); ?>',
      'counter': '<?php echo esc_js($atts['counter']); ?>',
      'cabinetType': 'employee',
      'appointments': '<?php echo esc_js($atts['appointments']); ?>',
      'events': '<?php echo esc_js($atts['events']); ?>',
      'profile': '<?php echo $atts['profile-hidden'] == '1' ? 1 : ''; ?>'
    }
  );

</script>

<?php if (empty($atts['version']) || esc_js($atts['version']) === '1') { ?>
    <script>
        var lazyBookingEntitiesIds = (typeof lazyBookingEntitiesIds === 'undefined') ? [] : lazyBookingEntitiesIds;
        if (bookingEntitiesIds[bookingEntitiesIds.length - 1].trigger !== '') {
            lazyBookingEntitiesIds.push(bookingEntitiesIds.pop());
        }
    </script>

    <div id="amelia-app-booking<?php echo esc_attr($atts['counter']); ?>" class="amelia-cabinet amelia-frontend amelia-app-booking<?php echo $atts['trigger'] ? ' amelia-skip-load amelia-skip-load-' . esc_attr($atts['counter']) : ''; ?>">
        <cabinet :cabinet-type="'provider'"></cabinet>
    </div>
<?php } else { ?>
    <script>
        var ameliaShortcodeData = bookingEntitiesIds;
        var ameliaShortcodeDataTriggered = (typeof ameliaShortcodeDataTriggered === 'undefined') ? [] : ameliaShortcodeDataTriggered;
        if (ameliaShortcodeData[ameliaShortcodeData.length - 1].trigger !== '') {
            if (ameliaShortcodeDataTriggered.filter(a => a.counter === ameliaShortcodeData[ameliaShortcodeData.length - 1].counter).length === 0) {
                ameliaShortcodeDataTriggered.push(ameliaShortcodeData.pop());
            } else {
                ameliaShortcodeData.pop()
            }
        }
    </script>

    <div
            id="amelia-v2-booking-<?php echo esc_attr($atts['counter']); ?>"
            class="amelia-v2-booking <?php echo $atts['trigger'] !== '' ? ' amelia-skip-load amelia-skip-load-' . $atts['counter'] : ''; ?>"
    >
        <customer-panel-wrapper></customer-panel-wrapper>
    </div>
<?php } ?>

<?php
// 检查用户是否登录并且是员工角色
if (is_user_logged_in()) {
$current_user = wp_get_current_user();
// 检查用户是否有员工权限
if (true || current_user_can('amelia_read_appointments')) {
?>
<!--员工收入统计-->
<div class="employee-income-statistics">
    <div class="employee-income-statistics-header">
        <h3><?php echo esc_html__('Income Statistics', 'amelia'); ?></h3>
        
        <!-- 日期筛选 -->
        <div class="am-period-select">
            <input type="date" id="start-date" class="am-date-picker">
            <span><?php echo esc_html__('to', 'amelia'); ?></span>
            <input type="date" id="end-date" class="am-date-picker">
            <button id="fetch-stats" class="am-btn"><?php echo esc_html__('Search', 'amelia'); ?></button>
        </div>
    </div>

    <!-- 统计卡片 -->
    <div class="statistics-cards">
        <div class="stat-card">
            <div class="stat-value" id="total-appointments">0</div>
            <div class="stat-label"><?php echo esc_html__('Total Appointments', 'amelia'); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-value" id="total-revenue">0</div>
            <div class="stat-label"><?php echo esc_html__('Total Revenue', 'amelia'); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-value" id="average-income">0</div>
            <div class="stat-label"><?php echo esc_html__('Average Income', 'amelia'); ?></div>
        </div>
    </div>

    <!-- 服务收入明细 -->
    <div class="service-statistics">
        <h4><?php echo esc_html__('Service Income Details', 'amelia'); ?></h4>
        <table class="service-table">
            <thead>
                <tr>
                    <th><?php echo esc_html__('Service', 'amelia'); ?></th>
                    <th><?php echo esc_html__('Appointments', 'amelia'); ?></th>
                    <th><?php echo esc_html__('Revenue', 'amelia'); ?></th>
                </tr>
            </thead>
            <tbody id="service-stats">
                <!-- 数据将通过 Ajax 加载 -->
            </tbody>
        </table>
    </div>
</div>

<style>
.employee-income-statistics {
    padding: 24px;
    background: #ffffff;
    border-radius: 4px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    max-width: 1000px;
    margin: 0 auto 40px;
}

.employee-income-statistics-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.statistics-cards {
    margin-bottom: 32px;
    display: flex;
    width: 100%;
    flex-wrap: nowrap;
    flex-direction: row;
}

.stat-card {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 4px;
    text-align: center;
}

.stat-value {
    font-size: 24px;
    font-weight: 600;
    color: #1a84ee;
    margin-bottom: 8px;
}

.stat-label {
    color: #637280;
    font-size: 14px;
}

.service-statistics {
    h4 {
        margin-bottom: 16px;
        font-size: 16px;
        font-weight: 500;
    }
}
</style>

<script>
// 首先定义 ajaxurl
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
jQuery(document).ready(function($) {
    var labels = {
        currency: '<?php echo esc_html('AU$'); ?>',
        noData: '<?php echo esc_html__('No Data Available', 'amelia'); ?>',
        loading: '<?php echo esc_html__('Loading...', 'amelia'); ?>'
    };

    // 格式化金额
    function formatPrice(amount) {
        return labels.currency + ' ' + parseFloat(amount).toFixed(2);
    }

    function loadStatistics() {
        $('#service-stats').html('<tr><td colspan="3">' + labels.loading + '</td></tr>');

        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'amelia_employee_statistics',
                start_date: $('#start-date').val(),
                end_date: $('#end-date').val()
            },
            success: function(response) {
                if (response.success) {
                    // 更新统计卡片
                    $('#total-appointments').text(response.data.totalAppointments);
                    $('#total-revenue').text(formatPrice(response.data.totalRevenue));
                    $('#average-income').text(formatPrice(response.data.averageIncome));

                    // 更新服务统计表格
                    if (response.data.services.length > 0) {
                        var serviceHtml = '';
                        response.data.services.forEach(function(service) {
                            serviceHtml += '<tr>' +
                                '<td>' + service.name + '</td>' +
                                '<td>' + service.appointments + '</td>' +
                                '<td>' + formatPrice(service.revenue) + '</td>' +
                                '</tr>';
                        });
                        $('#service-stats').html(serviceHtml);
                    } else {
                        $('#service-stats').html('<tr><td colspan="3">' + labels.noData + '</td></tr>');
                    }
                }
            }
        });
    }

    // 设置默认日期为最近30天
    var today = new Date();
    var thirtyDaysAgo = new Date();
    thirtyDaysAgo.setDate(today.getDate() - 30);

    $('#start-date').val(thirtyDaysAgo.toISOString().split('T')[0]);
    $('#end-date').val(today.toISOString().split('T')[0]);

    // 点击查询按钮时加载数据
    $('#fetch-stats').on('click', function() {
        loadStatistics();
    });

    // 页面加载时自动加载数据
    loadStatistics();
});
</script>
<?php
    }
}
?>
