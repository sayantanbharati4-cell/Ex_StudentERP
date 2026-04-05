# StudentERP – FINAL Database Sync & Dummy Data (v1.5)

Copy and run this entire script in your phpMyAdmin SQL tab to synchronize your `college_db` with all new features and test data.

---

## 1. Schema Extensions (Run First)
These queries ensure your database has all the columns and tables required for version 1.1 through 1.5.

```sql
-- 1. Ensure new columns exist in Students
-- (These may already exist in your resources/college_db.sql but let's be sure)
ALTER TABLE `students` ADD COLUMN IF NOT EXISTS `registration_no` VARCHAR(50) AFTER `admission_number`;
ALTER TABLE `students` ADD COLUMN IF NOT EXISTS `identification_mark` TEXT AFTER `aadhaar_number`;

-- 2. Ensure new columns exist in Attendance
-- Tracks multiple daily sessions and custom mandatory remarks
ALTER TABLE `attendance` ADD COLUMN IF NOT EXISTS `session_id` INT DEFAULT 1 AFTER `batch_id`;
ALTER TABLE `attendance` ADD COLUMN IF NOT EXISTS `remarks` TEXT AFTER `status`;

-- 3. Ensure new columns exist in Fee Transactions
-- Tracks automatic ₹150/day fines and payment cycles
ALTER TABLE `fee_transactions` ADD COLUMN IF NOT EXISTS `fine_amount` DECIMAL(10,2) DEFAULT 0.00 AFTER `amount_paid`;
ALTER TABLE `fee_transactions` ADD COLUMN IF NOT EXISTS `payment_period` VARCHAR(50) DEFAULT 'Monthly' AFTER `fine_amount`;
ALTER TABLE `fee_transactions` ADD COLUMN IF NOT EXISTS `due_date` DATE AFTER `transaction_date`;

-- 4. Create Tables for Faculty Management & Scheduling
CREATE TABLE IF NOT EXISTS `staff_salaries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `staff_id` INT NOT NULL,
  `amount_paid` DECIMAL(10,2) NOT NULL,
  `bonus` DECIMAL(10,2) DEFAULT 0.00,
  `deductions` DECIMAL(10,2) DEFAULT 0.00,
  `month_year` VARCHAR(20) NOT NULL,
  `payment_date` DATE NOT NULL,
  `payment_method` VARCHAR(50) DEFAULT 'bank_transfer',
  `receipt_no` VARCHAR(50) UNIQUE,
  `remarks` TEXT,
  `created_by` INT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `staff_activities` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `staff_id` INT NOT NULL,
  `activity_title` VARCHAR(255) NOT NULL,
  `activity_description` TEXT,
  `activity_date` DATE NOT NULL,
  `category` VARCHAR(100),
  `status` ENUM('pending','completed','cancelled') DEFAULT 'pending',
  `created_by` INT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `holidays` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `holiday_date` DATE NOT NULL UNIQUE,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `created_by` INT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 2. Populate Dummy Data (Testing v1.5)
Test the new profile tabs, automated fine engine, and conflict-aware scheduler.

```sql
-- 1. Insert Dummy Students with Profile Fields (v1.2)
INSERT INTO students (admission_number, registration_no, first_name, last_name, date_of_birth, gender, blood_group, nationality, religion, caste_category, aadhaar_number, identification_mark, phone, permanent_address, batch_id, program_id, status, admission_date) VALUES 
('ADM2026_T01', 'REG2024_01', 'Arjun', 'Mehta', '2005-06-15', 'male', 'O+', 'Indian', 'Hinduism', 'General', '123456789012', 'Mole on right cheek', '9876543210', '123, Rose Villa, Mumbai', 1, 1, 'active', '2026-04-05'),
('ADM2026_T02', 'REG2024_02', 'Sanya', 'Iyer', '2005-09-22', 'female', 'B+', 'Indian', 'Hinduism', 'OBC', '987654321098', 'Scar on left arm', '9876543211', '45, Skyline Apts, Chennai', 1, 1, 'active', '2026-04-05');

-- 2. Staff Activities & Salaries (Assumes Staff ID 1 from college_db.sql exists) (v1.4)
INSERT INTO staff_activities (staff_id, activity_title, activity_description, activity_date, category, status, created_by) VALUES 
(1, 'Academic Quality Audit', 'Finalizing syllabus for 2026 intake.', '2026-04-10', 'Duties', 'pending', 1),
(1, 'Faculty Convocation', 'Guest lecture preparation.', '2026-04-01', 'Meeting', 'completed', 1);

INSERT INTO staff_salaries (staff_id, amount_paid, bonus, deductions, month_year, payment_date, payment_method, receipt_no, created_by) VALUES 
(1, 150000.00, 5000.00, 1200.00, 'April 2026', '2026-04-05', 'bank_transfer', 'ERP_PAY_APRIL_001', 1);

-- 3. Fees & Automatic Fines (v1.3)
-- Receipt 1: Paid after 11th (Should show ₹600 fine for 4 days late)
INSERT INTO fee_transactions (student_id, receipt_number, fee_type, amount_due, amount_paid, fine_amount, payment_period, payment_status, transaction_date, due_date) VALUES 
(1, 'ERP_RCP_101', 'tuition', 25000.00, 25600.00, 600.00, 'Monthly', 'paid', '2026-04-15', '2026-04-07');

-- 4. Holidays & Class Schedules (v1.5)
INSERT INTO holidays (holiday_date, title, description) VALUES 
('2026-04-14', 'Ambedkar Jayanti', 'Gazetted Holiday'),
('2026-05-01', 'May Day', 'Labor rights celebration');

INSERT INTO class_schedules (batch_id, subject_id, faculty_id, day_of_week, start_time, end_time, room_number) VALUES 
(1, 1, 1, 'Monday', '09:00:00', '10:30:00', 'L-302'),
(1, 4, 1, 'Wednesday', '11:00:00', '12:30:00', 'Lab-01');
```
