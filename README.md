# MyClean - Cleaning Service Booking System

## Project Overview
MyClean is a cleaning service booking system developed by **Yandong Jiang** for the CP3407 Software Engineering Project (TR1-2025).  
The system enables customers to book cleaning services online and allows cleaners to manage their availability, orders, and income.  
It also includes administrative features for managing users and monitoring platform performance.

This project was developed using Agile methodology across two full iterations, covering the full lifecycle: planning, user story development, implementation, testing, and deployment.

## Key Features

- User registration and login (Customer and Cleaner)
- Password reset via email
- Cleaner profile creation and public browsing
- Online booking system (request, accept/reject)
- In-app messaging between customers and cleaners
- Stripe/PayPal mock payment system
- Invoice and receipt generation
- Ratings and reviews with public reply
- Admin dashboard: user verification, banning, analytics
- Cleaner income tracking and calendar sync

## Tech Stack

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP 8.3 and WordPress  
- **Database:** MySQL  
- **Local Development Environment:** WAMP (localhost) & aaPanel/BaoTa (deployed to [myclean.168chinesetcw.com](http://myclean.168chinesetcw.com))  
- **Optional Deployment:** Hostinger (VPS)  
- **Version Control:** Git & GitHub


## Developer

- Yandong Jiang (solo developer)

---

## Project Planning Phase (Before Iteration 1)

- Repository initialized before Iteration 1
- User stories written using INVEST criteria 
- Prioritized with MoSCoW method
- Estimated durations in days
- All stories stored in [`user_stories/`](./user_stories/)
- Screenshots stored in [`images/`](./images/)

---

## Iteration 1: 2025-03-01 to 2025-03-28

### Goal:
Deliver core features: user registration/login, booking flow, and cleaner response.

### Implemented Stories:

1. [US-01: Register & Login](./user_stories/user_story_01_registration_authentication.md) – Must-Have – 3 days  
2. [US-02: Password Reset](./user_stories/user_story_02_reset_password.md) – Must-Have – 1 day  
3. [US-03: Booking](./user_stories/user_story_03_booking.md) – Must-Have – 5 days  
4. [US-04: Modify/Cancel Booking](./user_stories/user_story_04_modify_cancel.md) – Must-Have – 3 days  
5. [US-10: Accept/Decline Booking](./user_stories/user_story_10_accept_decline.md) – Must-Have – 2 days  

**Total Estimated Effort:** 14 days  
**Actual Completed:** 13 days  
**Velocity:** 13 / 20 = 0.65  

See full iteration report: [iteration_1.md](./iteration_1.md)

---

## Iteration 2: 2025-04-01 to 2025-04-14

### Goal:
Complete remaining platform features including payments, messaging, and admin tools.

### Implemented Stories:

- [US-05: Payment Integration](./user_stories/user_story_05_payment.md) – 2 days  
- [US-06: Invoice/Receipt](./user_stories/user_story_06_receipt.md) – 1 day  
- [US-07: Customer Review](./user_stories/user_story_07_review.md) – 2 days  
- [US-08: In-App Chat](./user_stories/user_story_08_chat.md) – 3 days  
- [US-09: View Upcoming Bookings](./user_stories/user_story_09_view_upcoming.md) – 4 days  
- [US-11: Income Tracking](./user_stories/user_story_11_cleaner_income.md) – 3 days  
- [US-12: Calendar Sync](./user_stories/user_story_12_calendar_sync.md) – 2 days  
- [US-13: Profile Upload](./user_stories/user_story_13_cleaner_profile.md) – 3 days  
- [US-14: Review Reply](./user_stories/user_story_14_cleaner_reply_review.md) – 2 days  
- [US-15: Admin Verify Cleaner](./user_stories/user_story_15_admin_verify_cleaner.md) – 4 days  
- [US-16: Admin Suspend/Unban](./user_stories/user_story_16_admin_suspend_user.md) – 2 days  
- [US-17: Admin Analytics Dashboard](./user_stories/user_story_17_admin_dashboard.md) – 4 days  
- [US-04 Task C: Refund Logic](./user_stories/user_story_04_modify_cancel.md) – 1 day  

**Total Estimated Effort:** 36 days  
**Planned Capacity:** 6.5 days  
**Actual Completed:** 36 days (completed in advance)  
**Velocity:** 36 / 10 = 3.6  

See full iteration report: [iteration_2.md](./iteration_2.md)

---

## Burn Down Charts and Velocity Summary

| Iteration    | Duration             | Estimated Capacity | Actual Completed | Velocity |
|--------------|----------------------|--------------------|------------------|----------|
| Iteration 1  | 2025-03-01 – 03-28   | 14 dev-days        | 13 dev-days      | 0.65     |
| Iteration 2  | 2025-04-01 – 04-14   | 6.5 dev-days       | 36 dev-days      | 3.6      |

---

## Project Files

- All user stories: [`user_stories/`](./user_stories/)
- Screenshots and UI evidence: [`images/`](./images/)
- Iteration reports:
  - [iteration_1.md](./iteration_1.md)
  - [iteration_2.md](./iteration_2.md)

---

## Final Notes

The MyClean platform is now fully functional and ready for testing, evaluation, and deployment.  
This project demonstrates agile planning, iterative delivery, and clear documentation throughout its lifecycle.
