# User Stories - MyClean

## Introduction
This document outlines the user stories for **MyClean - Cleaning Service Booking System**,  
designed to support **customers, service providers (cleaners), and administrators**.

### **Prioritization Approach**
- **MoSCoW Method:**
  - **Must-Have**: Core features required for the system to function.
  - **Should-Have**: Important features that enhance usability.
  - **Could-Have**: Features that add extra value but are not essential.
  - **Won’t-Have**: Features planned for future iterations.

- **Effort Estimation:**
  - Short = 2–3 days
  - Medium = 4–7 days
  - Long = 8+ days

---

## **1. Customer Features**
### 1.1 Registration & Authentication
- [ ] **US-01** | **Must-Have** | **Est. 3 days**  
  - *As a customer, I want to **register and log in** (via email or phone), so that I can securely access and manage my cleaning bookings.*

- [ ] **US-02** | **Must-Have** | **Est. 1 day**  
  - *As a customer, I want to **reset my password** (via email or SMS), so that I can regain access if I forget my credentials.*

### 1.2 Booking & Scheduling
- [ ] **US-03** | **Must-Have** | **Est. 5 days**  
  - *As a customer, I want to **book a cleaning service** by selecting date, time, and type of service, so that I can schedule an appointment at my convenience.*

- [ ] **US-04** | **Must-Have** | **Est. 3 days**  
  - *As a customer, I want to **modify or cancel my booking** (within a valid time window), so that I can handle changes in my schedule.*

### 1.3 Payments & Billing
- [ ] **US-05** | **Must-Have** | **Est. 5 days**  
  - *As a customer, I want to **pay for the cleaning service online** (using Stripe or PayPal mock API), so that I can complete the transaction securely without cash.*

- [ ] **US-06** | **Should-Have** | **Est. 2 days**  
  - *As a customer, I want to **receive an invoice/receipt** after payment, so that I can keep a record of my transactions.*

### 1.4 Ratings & Reviews
- [ ] **US-07** | **Should-Have** | **Est. 3 days**  
  - *As a customer, I want to **rate and review the cleaner** after the service is completed, so that I can help others make informed decisions and provide feedback.*

### 1.5 Communication & Notifications
- [ ] **US-08** | **Could-Have** | **Est. 3 days**  
  - *As a customer, I want to **chat or message the cleaner** after booking is confirmed, so that I can provide additional instructions or address any concerns.*

---

## **2. Service Provider (Cleaner) Features**
### 2.1 Booking Management
- [ ] **US-09** | **Must-Have** | **Est. 4 days**  
  - *As a cleaner, I want to **view all my upcoming bookings** (including date, time, and location), so that I can plan my work schedule efficiently.*

- [ ] **US-10** | **Must-Have** | **Est. 2 days**  
  - *As a cleaner, I want to **accept or decline new booking requests**, so that I can manage my availability based on my workload.*

### 2.2 Earnings & Payments
- [ ] **US-11** | **Must-Have** | **Est. 3 days**  
  - *As a cleaner, I want to **track my earnings** (weekly or monthly), so that I can monitor my income from the platform.*

- [ ] **US-12** | **Should-Have** | **Est. 2 days**  
  - *As a cleaner, I want to **sync my schedule with Google Calendar**, so that I can avoid double-booking or missing appointments.*

### 2.3 Profile & Credentials
- [ ] **US-13** | **Should-Have** | **Est. 3 days**  
  - *As a cleaner, I want to **upload my certifications** or business license to my profile, so that customers trust my professional qualifications.*

### 2.4 Feedback & Reviews
- [ ] **US-14** | **Could-Have** | **Est. 2 days**  
  - *As a cleaner, I want to **respond to customer reviews**, so that I can thank them or clarify any issues to maintain a good reputation.*

---

## **3. Administrator Features**
### 3.1 User & Cleaner Management
- [ ] **US-15** | **Must-Have** | **Est. 4 days**  
  - *As an admin, I want to **verify and approve cleaners** before they can accept bookings, so that I can ensure service quality and professionalism.*

- [ ] **US-16** | **Should-Have** | **Est. 2 days**  
  - *As an admin, I want to **suspend or ban users/cleaners** who violate terms, so that the platform remains safe and trustworthy.*

### 3.2 Analytics & Reporting
- [ ] **US-17** | **Should-Have** | **Est. 4 days**  
  - *As an admin, I want to **view data reports** (bookings, revenues, active users), so that I can make informed decisions about platform operations.*

---

## **4. Advanced & Unique Features (USP)**
### 4.1 AI-Powered Recommendations
- [ ] **US-18** | **Could-Have** | **Est. 6 days**  
  - *As a customer, I want an **AI system that recommends the best cleaner** based on location, ratings, and availability, so that I can quickly find an optimal match.*

### 4.2 Eco-Friendly Options
- [ ] **US-19** | **Could-Have** | **Est. 2 days**  
  - *As a customer, I want to **filter cleaners who use eco-friendly products**, so that I can align the service with my environmental values.*

### 4.3 Subscription & Membership
- [ ] **US-20** | **Could-Have** | **Est. 4 days**  
  - *As a customer, I want to **sign up for a regular cleaning subscription** (e.g., weekly or monthly), so that I can get discounts and ensure a consistent cleaning schedule.*

---

## **5. Summary of Priorities & Estimates**
| **User Stories**                       | **Priority**     | **Estimate**       |
|---------------------------------------|------------------|--------------------|
| US-01, US-02, US-03, US-04, US-05, US-09, US-10, US-11, US-15 | **Must-Have**   | 1–5 days each      |
| US-06, US-07, US-12, US-13, US-16, US-17                   | **Should-Have** | 2–4 days each      |
| US-08, US-14, US-18, US-19, US-20                         | **Could-Have**  | 2–6 days each      |

> **Note**: The **effort estimates** are approximate and may adjust based on team size, complexity, and actual development pace.

---

## **6. Next Steps**
1. **Assign Stories to Iterations**  
   - **Iteration 1** (3–4 weeks): Focus on Must-Have stories to deliver a functional MVP.  
   - **Iteration 2** (3–4 weeks): Implement Should-Have stories, and if there’s capacity, tackle Could-Have features.

2. **Create GitHub Issues**  
   - Make an Issue for each user story, label with priority and estimate.  
   - Track progress via “To Do”, “In Progress”, “Done”.

3. **Stay Agile**  
   - Revisit priorities after each iteration.  
   - If time or resources are constrained, deprioritize Could-Have or even some Should-Have stories.

---

## **7. References & Inspirations**
- **Head First Software Development** (Chapters 1–3): Iterative approach and user story best practices.  
- **CP3407 Project Documentation**: Requirements for MyClean, including modern tools, cloud services, and a GUI.  
- **Project Rubric**: Ensuring all user stories are correct, prioritized, and well-documented to aim for an HD grade.

---

