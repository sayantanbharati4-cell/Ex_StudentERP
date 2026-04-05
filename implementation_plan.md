# Implementation Plan: Student Profile & Performance Optimization

## Phase 1: Database & Bug Fixes (The Essentials)
1. **Sync Schema**: Update `students` table to include missing columns like `roll`, `roll_no`, `father_occupation`, `mother_occupation`, `parent_address`, `identification_mark_extra`, etc.
2. **Fix Academic Performance**: Correct the SQL in `view/performance/index.php` to use correct column names (avoiding `s.roll` error).
3. **Fix Student View**: Update `view/students/view.php` to handle undefined array keys and correctly display the new fields.

## Phase 2: Profile Expansion (The Major Changes)
1. **6-Tab UI**: Refactor `view/students/view.php` to incorporate 6 tabs:
    - **Personal** (Fixed & Cleaned)
    - **Contact** (Cleaned)
    - **Guardian** (Fixed & Cleaned)
    - **Fees** (Integrated from `fee_transactions`)
    - **Attendance** (Visual summary synced with `attendance`)
    - **Results** (Academic performance summary)
2. **Real-time Sync**: Ensure the Fees and Attendance tabs reflect data from their respective modules automatically.

## Phase 3: Final Polish
- Ensure all tabs use the new "Premium Shadow" styling.
- Verify data consistency across the entire StudentERP system.
