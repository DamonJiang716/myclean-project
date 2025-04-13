# Iteration 1 Report

## 1. Iteration Overview

- **Iteration Name**: Iteration 1  
- **Start Date**: 2025-03-01  
- **End Date**: 2025-03-28  
- **Team Size**: 1 (myself)  
- **Assumed Velocity**: 0.7 (70% of time used effectively)  
- **Theoretical Workdays**: 20  
- **Actual Capacity**: 20 × 0.7 = **14 dev-days**

---

## 2. Must-Have User Stories Planned for Iteration 1

| User Story | Est. (days) | Description |
|------------|-------------|-------------|
| US-01 Register & Login | 3 | Users can create an account and log in securely |
| US-02 Password Reset   | 1 | Support email or SMS reset |
| US-03 Booking          | 5 | Users can schedule a cleaning service |
| US-04 Modify/Cancel Booking | 3 | Users can change or cancel an existing booking |
| US-10 Accept/Decline New Booking | 2 | Cleaner can accept or reject incoming requests |
| **Total** | **14** |  |

---

## 3. Task Breakdown & Status

### US-01 Register & Login (3 days)
- [x] Task A: Registration page (front-end) - 1 day ✅
- [x] Task B: Login validation logic (back-end) - 2 days ✅

### US-02 Password Reset (1 day)
- [x] Task A: Reset UI (0.5 day) ✅
- [x] Task B: Email/SMS verification (0.5 day) ✅

### US-03 Booking (5 days)
- [x] Task A: Database schema & table (1 day) ✅
- [x] Task B: Booking page + validations (2 days) ✅
- [x] Task C: Submit booking & notification logic (2 days) ✅

### US-04 Modify/Cancel Booking (3 days)
- [x] Task A: Back-end API to update booking (1 day) ✅
- [x] Task B: Front-end UI changes (1 day) ✅
- [ ] Task C: Cancellation logic & refund mock (1 day) ❌ *pushed to Iteration 2*

### US-10 Accept/Decline New Booking (2 days)
- [x] Task A: Accept/Decline logic (1 day) ✅
- [x] Task B: Update DB & notify front-end (1 day) ✅

---

## 4. Kanban Board Summary

### 🟦 To Do
- (None – all tasks started or completed)

### 🟨 In Progress
- US-04 / Task C: Cancel logic & refund mock (1 day)

### ✅ Completed
- All other tasks listed above except US-04 / Task C

---

## 5. Burn Down Chart (Progress Updates)

| Date        | Remaining Work | Completed | Notes |
|-------------|----------------|-----------|-------|
| Start (W0)  | 14 days        | 0         | Full iteration capacity |
| After W1    | ~10 days       | 4         | Finished US-01 Task A, US-02 Task A |
| After W2    | ~6 days        | 8         | Core logic done |
| After W3    | ~2 days        | 12        | Only one task left |
| End (W4)    | ~1 day         | 13        | One task unfinished |

---

## 6. Actual Velocity

- **Completed**: 13 dev-days  
- **Planned Capacity**: 20 theoretical workdays  
- **Actual Velocity** = 13 / 20 = **0.65**

This value will be used to re-estimate next iteration.

---

## 7. Notes / Issues

- **Risk**: Refund/cancellation logic more complex than expected  
- **Impact**: 1 task moved to Iteration 2  
- **Mitigation**: Prioritize refund logic in next sprint  
- **Single Developer Constraint**: Time pressure is higher

---

## 8. Conclusion

Iteration 1 was focused on registration, authentication, booking and booking management features.  
13 out of 14 dev-days were completed (~93%), leaving only one task unfinished and pushed to Iteration 2.  
The system is now functional for end-to-end booking, login, and acceptance.

Good progress, ready to begin Iteration 2 planning.
