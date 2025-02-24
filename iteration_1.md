# Actual Iteration-1 Board

## 1. Iteration Overview
- **Iteration Name**: Iteration 1
- **Start Date**: 2025-03-01  
- **End Date**: 2025-03-28 (approximately 4 weeks, ~20 working days)
- **Team Size**: 1 (myself)
- **Assumed Velocity**: 0.7  
  > Meaning ~70% of each day is effectively used for development; the rest is overhead (admin, testing, breaks, etc.)
- **Theoretical Workdays**: 20 (over 4 weeks)  
- **Actual Capacity** = 20 × 0.7 = **14 dev-days**  



---

## 2. Chosen Must-Have User Stories (Focus for Iteration 1)

The following Must-Have stories are selected for Iteration 1, aiming for a total estimate of ~14 dev-days:

| **User Story**                  | **Est. (days)** | **Brief Description**                                                                |
|---------------------------------|----------------:|--------------------------------------------------------------------------------------|
| US-01 Register & Login          | 3               | Users can create an account and log in securely                                      |
| US-02 Password Reset            | 1               | Support email or SMS reset                                                           |
| US-03 Booking                   | 5               | Users can schedule a cleaning service (date/time/type)                               |
| US-04 Modify/Cancel Booking     | 3               | Users can change or cancel an existing booking within a valid time window            |
| US-10 Accept/Decline New Booking| 2               | Cleaner can accept or reject incoming booking requests                               |
| **Total**                       | **14**          |  


---

## 3. Task Breakdown & Status

Below are the tasks for each user story. Each task has its own estimate (in days).  
All tasks start in "To Do". When I begin a task, I move it to “In Progress”, and upon completion, I move it to “Completed.”

### US-01 Register & Login (3 days)
- [ ] **Task A**: Registration page (front-end) - 1 day
- [ ] **Task B**: Login validation logic (back-end) - 2 days

### US-02 Password Reset (1 day)
- [ ] **Task A**: Reset UI (0.5 day)
- [ ] **Task B**: Email/SMS verification (0.5 day)

### US-03 Booking (5 days)
- [ ] **Task A**: Database schema & table (1 day)
- [ ] **Task B**: Booking page + validations (2 days)
- [ ] **Task C**: Submit booking & notification logic (2 days)

### US-04 Modify/Cancel Booking (3 days)
- [ ] **Task A**: Back-end API to update booking (1 day)
- [ ] **Task B**: Front-end UI changes (1 day)
- [ ] **Task C**: Cancellation logic & partial refund mock (1 day)

### US-10 Accept/Decline New Booking (2 days)
- [ ] **Task A**: Accept/Decline logic (1 day)
- [ ] **Task B**: Update DB & notify front-end (1 day)

---

## 4. Board Columns

### 4.1 To Do
- US-01 / Task A: Registration page (1 day)  
- US-01 / Task B: Login validation (2 days)  
- US-02 / Task A: Reset UI (0.5 day)  
- US-02 / Task B: Email/SMS sending (0.5 day)  
- US-03 / Task A: Database schema (1 day)  
- US-03 / Task B: Booking UI & validations (2 days)  
- US-03 / Task C: Submission & notifications (2 days)  
- US-04 / Task A: Update booking API (1 day)  
- US-04 / Task B: Front-end changes (1 day)  
- US-04 / Task C: Cancel logic & mock refund (1 day)  
- US-10 / Task A: Accept/Decline logic (1 day)  
- US-10 / Task B: DB & front-end confirmation (1 day)

### 4.2 In Progress
- **US-01 / Task A: Registration Page**  
  - **Developer**: Me  
  - **Started**: 2025-03-02  
### 4.3 Completed
- **US-02 / Task A: Reset UI**  
  - **Developer**: Me  
  - **Finished**: 2025-03-03  
---

## 5. Burn Down Updates

We will track the remaining dev-days weekly (or even daily):

| **Date/Week**       | **Remaining Work** | **Completed** | **Remarks**                                  |
|---------------------|--------------------|--------------|----------------------------------------------|
| Start (Week 0)      | 14 days           | 0            | Full iteration capacity is 14 dev-days       |
| After Week 1        | ~10 days          | 4            | e.g., finished US-01 Task A, US-02 Task A... |
| After Week 2        | ~6 days           | 8            |                                              |
| After Week 3        | ~2 days           | 12           |                                              |
| End of Iteration    | ~0–2 days         | ~14          | Possibly some tasks slip to next iteration   |



---

## 6. Actual Velocity (End of Iteration)

At the end of Iteration 1, I will calculate actual velocity as:

\[
\text{Actual Velocity} = \frac{\text{Real dev-days completed}}{\text{Theoretical dev-days}}
\]

- If I complete 13 dev-days out of a theoretical 20, the actual velocity is 13/20 = 0.65.  
- This new value may be used to refine the next iteration’s planning.

---

## 7. Notes / Issues
- **Risk**: If the payment/notification logic is trickier than expected, tasks may take longer.  
- **Single Developer Constraint**: If I become sick or busy, velocity can drop significantly.  
- If any tasks remain incomplete by the end of week 4, I may push them to Iteration 2 (or reduce scope).

---

## 8. Conclusion
- **Iteration 1** includes ~14 days of Must-Have features, fitting my single-developer capacity (14 dev-days).  
- I’ll hold daily “standups” (or personal check-ins) to update the board and Burn Down data.  
- At iteration’s end, I’ll record how many dev-days I truly finished (Actual Velocity) and finalize which tasks or stories move to Iteration 2.

---


