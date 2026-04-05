# StudentERP – Incremental Profiling Update (v1.7)

Since you have already run the previous `db.md`, only run this small block to add the **new** specific columns needed for the profile enhancement.

```sql
-- Run this block in phpMyAdmin
ALTER TABLE `students` 
ADD COLUMN IF NOT EXISTS `roll` VARCHAR(50) AFTER `registration_no`,
ADD COLUMN IF NOT EXISTS `roll_extra` VARCHAR(50) AFTER `roll`,
ADD COLUMN IF NOT EXISTS `identification_mark` TEXT AFTER `aadhaar_number`,
ADD COLUMN IF NOT EXISTS `identification_mark_extra` TEXT AFTER `identification_mark`,
ADD COLUMN IF NOT EXISTS `father_occupation` VARCHAR(255) AFTER `father_phone`,
ADD COLUMN IF NOT EXISTS `mother_occupation` VARCHAR(255) AFTER `mother_phone`,
ADD COLUMN IF NOT EXISTS `parent_address` TEXT AFTER `guardian_phone`;

-- 1. Sync student_grades table with required features
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `batch_id` INT AFTER `student_id`;
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `academic_year` VARCHAR(20) AFTER `batch_id`;
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `is_internal` TINYINT(1) DEFAULT 0 AFTER `remarks`;
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `is_practical` TINYINT(1) DEFAULT 0 AFTER `is_internal`;
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `is_project` TINYINT(1) DEFAULT 0 AFTER `is_practical`;
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `is_semester` TINYINT(1) DEFAULT 0 AFTER `is_project`;
ALTER TABLE `student_grades` ADD COLUMN IF NOT EXISTS `created_by` INT AFTER `is_semester`;
```
