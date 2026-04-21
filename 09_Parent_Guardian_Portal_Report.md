# Parent & Guardian Portal

## A PROJECT REPORT

**By**

| Student Name | Registration Number |
|---|---|
| OBAIDUR RAHAMAN | D232419347 |
| SAMRAT BISWAS | D232419348 |
| ADDRITA CHAKRABOTY | D232419349 |
| RUPAYAN BHATTACHARJEE | D232419351 |
| TANMOY BERA | D232419352 |

---

**Guided By: Saikat Biswas**  
*Lecturer, Department of Computer Science & Technology*

**Department of Computer Science & Technology**  
Kingston Polytechnic College  
*(A UNIT OF KINGSTON EDUCATIONAL INSTITUTE)*  
*(AN ISO 9001-2000 Certified Institute)*  
BERUNANPUKURIA, BARASAT, 24 PGS (NORTH), KOLKATA-700126

**Date: March 2026**

---

## CERTIFICATE

This is to certify that the project entitled **"Parent & Guardian Portal"** is a bonafide work carried out by:

- OBAIDUR RAHAMAN (D232419347)
- SAMRAT BISWAS (D232419348)
- ADDRITA CHAKRABOTY (D232419349)
- RUPAYAN BHATTACHARJEE (D232419351)
- TANMOY BERA (D232419352)

under my guidance in partial fulfillment of the requirements for the completion of B.Tech. in Computer Science & Technology at Kingston Polytechnic College during the academic year 2025-2026.

The work has been completed as per my satisfaction and is ready for evaluation.

---

**Saikat Biswas**  
Lecturer, Department of Computer Science & Technology  
Kingston Polytechnic College

**Date:** March 2026

**Signature:** ___________________

---

## ACKNOWLEDGEMENT

We the students of B.Tech. 2nd year, Department of Computer Science & Technology, Kingston Polytechnic College, would like to express our sincere gratitude and deep regards to our guide **Saikat Biswas** (Lecturer, CST) for his excellent guidance, continuous support, and constructive criticism throughout the development of the **Parent & Guardian Portal** project.

We would also like to extend our thanks to all faculty members and staff of the Department of Computer Science & Technology, Kingston Polytechnic College, for their valuable suggestions and support. We are grateful to the Principal and the Administrative Staff of Kingston Polytechnic College for providing the necessary infrastructure and resources to complete this project.

Special thanks to all our friends and family members who directly or indirectly supported us during the entire development process.

---

**Submitted by:**

| Student Name | Registration Number |
|---|---|
| OBAIDUR RAHAMAN | D232419347 |
| SAMRAT BISWAS | D232419348 |
| ADDRITA CHAKRABOTY | D232419349 |
| RUPAYAN BHATTACHARJEE | D232419351 |
| TANMOY BERA | D232419352 |

**Date:** March 2026

---

## TABLE OF CONTENTS

| Sr. No. | Content | Page No. |
|---|---|---|
| 1 | Abstract | 6 |
| 2 | Chapter 1: Introduction | 8 |
| 2.1 | 1.1 Objective | 8 |
| 2.2 | 1.2 Scope of the Project | 9 |
| 2.3 | 1.3 Modules | 10 |
| 3 | Chapter 2: Requirement Specifications | 11 |
| 3.1 | 2.1 Hardware Requirements | 11 |
| 3.2 | 2.2 Software Requirements | 12 |
| 4 | Chapter 3: Analysis | 13 |
| 4.1 | 3.1 Existing System | 13 |
| 4.2 | 3.2 Proposed System | 14 |
| 4.3 | 3.3 Feasibility System | 15 |
| 4.4 | 3.4 Software Specification | 16 |
| 5 | Chapter 4: System Design | 17 |
| 5.1 | 4.1 Table Design | 17 |
| 5.2 | 4.2 Flowchart | 19 |
| 5.3 | 4.3 Data Flow Diagram | 20 |
| 5.4 | 4.4 E-R Diagram | 21 |
| 6 | Chapter 5: Sample Screenshots | 22 |
| 7 | Chapter 6: System Implementation | 24 |
| 8 | Chapter 7: Testing | 26 |
| 8.1 | 7.1 Introduction to System Testing | 26 |
| 8.2 | 7.2 Types of Testing | 27 |
| 9 | Chapter 8: Conclusion and Future Scope | 28 |
| 10 | Chapter 9: Reference | 29 |

---

## ABSTRACT

The Parent & Guardian Portal is a dedicated module of the Academic Monitoring System for Students, designed to provide parents and guardians with transparent access to their child's academic progress, attendance, and institutional information. This module strengthens parent-institution communication and enables informed engagement in student's education.

The primary objective is to empower parents with real-time information about their child's academic performance, attendance records, and important institutional communications. The portal provides a secure, user-friendly interface for parents to monitor student progress, view attendance and grades, respond to alerts, and communicate with faculty.

The proposed system addresses challenges in parent engagement including lack of transparency in academic progress, delayed awareness of attendance issues, and difficulty in contacting faculty. Key features include student information access, grade viewing, attendance monitoring, alert notifications, and parent-faculty messaging. This report details the technical design, implementation approach, testing methodology, and future enhancements for the Parent & Guardian Portal.

---

## CHAPTER 1: INTRODUCTION

### 1.1 Objective

The Parent & Guardian Portal is developed with the following objectives:

1. **Transparent Progress Monitoring**: To enable parents to view their child's academic performance, grades, and attendance in real-time.

2. **Early Intervention**: To alert parents to academic or attendance issues enabling timely interventions.

3. **Parent-Faculty Communication**: To facilitate direct communication between parents and faculty for discussions about student progress.

4. **Institutional Information Access**: To provide parents with important institutional announcements and information.

5. **Engagement Improvement**: To strengthen parent involvement in their child's education through accessible information and communication channels.

### 1.2 Scope of the Project

The Parent & Guardian Portal covers:

**Functional Scope:**
- Parent login and authentication
- View student personal information
- View grades and academic performance
- Monitor attendance records
- Receive alert notifications
- Access institutional announcements
- Communicate with faculty through messaging
- View fee and payment information
- Download academic reports
- Multiple student management (parents with multiple children)

**Geographic Scope:**
- All parents and guardians of students at Kingston Polytechnic College
- Accessible anywhere via web browser

**Time Scope:**
- Real-time access to current academic information
- Historical data for performance trends
- Ongoing access throughout academic year

**Technical Scope:**
- Web-based responsive interface
- Secure authentication and authorization
- Real-time data synchronization with main ERP
- Mobile-friendly design
- Notification delivery system

### 1.3 Modules

The Parent & Guardian Portal comprises:

1. **Parent Authentication Module**: Secure login with email/phone verification.

2. **Student Information Module**: View child's personal and enrollment information.

3. **Academic Performance Module**: View grades, performance trends, and GPA.

4. **Attendance Monitoring Module**: Track attendance percentage and absence patterns.

5. **Alerts & Notifications Module**: Receive important institutional and performance alerts.

6. **Messaging Module**: Communicate with faculty regarding student progress.

7. **Fee Information Module**: View fee structure and payment status of child.

8. **Report Download Module**: Download academic transcripts and reports (PDF).

---

## CHAPTER 2: REQUIREMENT SPECIFICATIONS

### 2.1 Hardware Requirements

| Component | Requirement |
|---|---|
| **Processor** | Standard home computer processor |
| **RAM** | Minimum 2 GB (for smooth browsing) |
| **Hard Disk** | Not applicable (web-based) |
| **Monitor** | Standard display (tablets and mobile friendly) |
| **Network** | Internet connectivity |
| **Mobile Device** | Smartphone or tablet for mobile access |

### 2.2 Software Requirements

| Component | Specification |
|---|---|
| **Operating System** | Any OS with web browser support |
| **Web Browser** | Chrome, Firefox, Safari, Edge (latest versions) |
| **Backend Language** | PHP 7.4.29 or higher |
| **Database** | MySQL 8.0 (shared with main ERP) |
| **Frontend Framework** | Bootstrap 5.3 (responsive design) |
| **Frontend Languages** | HTML5, CSS3, JavaScript |
| **Push Notifications** | Firebase Cloud Messaging |
| **Development IDE** | Visual Studio Code, PhpStorm |

---

## CHAPTER 3: ANALYSIS

### 3.1 Existing System

Challenges in parent communication without portal:

1. **Information Silos**: Parents lack access to:
   - Grades and academic performance
   - Attendance information
   - School announcements
   - Fee status

2. **Slow Communication**: Parent-institution contact limited to:
   - Parent-teacher meetings (scheduled quarterly)
   - Phone calls (not always responsive)
   - Letters (delayed information)

3. **No Transparency**: Parents unaware of:
   - Student's day-to-day performance
   - Attendance issues until too late
   - Academic support needed

### 3.2 Proposed System

Dedicated parent portal with:

1. **Real-Time Access**: Parents view grades, attendance, performance anytime.

2. **Proactive Alerts**: Immediate notification of performance or attendance issues.

3. **Direct Communication**: Messaging with faculty for quick discussions.

4. **Engagement Tools**: Parents can track progress trends and take action.

### 3.3 Feasibility System

#### Economic Feasibility
- **Cost**: Minimal additional hardware needed for parents.
- **Benefit**: Improved parent engagement strengthens retention.
- **Verdict**: **FEASIBLE**

#### Technical Feasibility
- **Technology**: Reuses existing ERP database and infrastructure.
- **Integration**: Easy API integration with main system.
- **Verdict**: **FEASIBLE**

#### Operational Feasibility
- **Training**: Parents learn intuitively through simple UI.
- **Adoption**: Improves communication satisfaction.
- **Verdict**: **FEASIBLE**

### 3.4 Software Specification

#### HTML5
- login interface with email/phone options
- Student dashboard with information cards
- Grades and attendance tables
- Download buttons for reports

#### CSS3
- Responsive mobile-first design
- Card-based information layout
- Color-coding for academic status
- Print-friendly report templates

#### JavaScript
- Form validation for secure login
- Dynamic data loading
- Real-time alerts notification
- Messaging interface real-time updates

#### PHP
- Secure authentication with session management
- Data retrieval from main ERP database
- Authorization checks (parent can only view own child)
- Report generation and PDF export

#### MySQL
- Read-only access to: Students, Enrollments, Grades, Attendance, Fees
- New tables: ParentAccounts, ParentMessages, ParentAlerts

---

## CHAPTER 4: SYSTEM DESIGN

### 4.1 Table Design

#### Table 1: `parent_accounts`
| Field | Type | Constraint | Description |
|---|---|---|---|
| parent_id | INT | PRIMARY KEY, AUTO_INCREMENT | Parent account identifier |
| student_id | INT | FOREIGN KEY | Associated student |
| email | VARCHAR(100) | UNIQUE | Parent email for login |
| phone | VARCHAR(15) | Parent phone number |
| password_hash | VARCHAR(255) | Hashed login password |
| name | VARCHAR(100) | Parent/Guardian name |
| relationship | VARCHAR(50) | Father, Mother, Guardian, etc. |
| is_active | BOOLEAN | DEFAULT TRUE | Account active status |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Account creation date |
| last_login | TIMESTAMP | Last portal login |

#### Table 2: `parent_messages`
| Field | Type | Constraint | Description |
|---|---|---|---|
| message_id | INT | PRIMARY KEY, AUTO_INCREMENT | Message identifier |
| parent_id | INT | FOREIGN KEY | Reference to parent |
| student_id | INT | FOREIGN KEY | Student message is about |
| faculty_id | INT | FOREIGN KEY | Faculty recipient |
| message_type | VARCHAR(50) | Question, Suggestion, Feedback, Request |
| subject | VARCHAR(200) | Message subject |
| message_body | LONGTEXT | Message content |
| status | ENUM('New','Read','Replied','Closed') | Message status |
| replied_at | TIMESTAMP | When faculty replied |
| reply_body | LONGTEXT | Faculty reply |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Message date |

#### Table 3: `parent_alerts`
| Field | Type | Constraint | Description |
|---|---|---|---|
| alert_id | INT | PRIMARY KEY, AUTO_INCREMENT | Alert identifier |
| parent_id | INT | FOREIGN KEY | Alert recipient |
| student_id | INT | FOREIGN KEY | Student alert concerns |
| alert_type | VARCHAR(50) | Low Attendance, Low Grades, Fee Due, etc. |
| alert_message | TEXT | Alert content |
| is_read | BOOLEAN | DEFAULT FALSE | Alert read status |
| read_at | TIMESTAMP | When parent read alert |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Alert creation date |

### 4.2 Flowchart

[Placeholder: Provide flowchart showing: parent login → authentication → view student dashboard → check grades/attendance → receive alerts → message faculty → logout with security checkpoints throughout.]

### 4.3 Data Flow Diagram

[Placeholder: Provide DFD showing data flow from parent login through data retrieval from main ERP, alert triggering, messaging workflow, and session management.]

### 4.4 E-R Diagram

[Placeholder: Provide ER diagram showing entities: Parents, Students (read-only), Grades (read-only), Attendance (read-only), ParentMessages, ParentAlerts and their relationships.]

---

## CHAPTER 5: SAMPLE SCREENSHOTS

[Placeholder: Include screenshots showing:]

1. **Parent Login**: [Screenshot of login interface with email/phone options]

2. **Student Dashboard**: [Screenshot showing student's overview with name, program, attendance%, GPA]

3. **Grades Page**: [Screenshot showing list of courses with grades, percentage, and grade points]

4. **Attendance Record**: [Screenshot showing attendance heatmap and percentage by class]

5. **Messaging Interface**: [Screenshot showing list of messages with faculty and reply threads]

---

## CHAPTER 6: SYSTEM IMPLEMENTATION

### Parent Login (PHP)

**parent_login.php:**
```php
<?php
session_start();
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    
    if (!$email || !$password) {
        $_SESSION['error'] = 'Email and password required';
        header('Location: login.php');
        exit();
    }
    
    try {
        // Find parent account
        $sql = "SELECT parent_id, password_hash, name, student_id, is_active
                FROM parent_accounts 
                WHERE email = ? OR phone = ?";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email, $email]);
        $parent = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$parent) {
            $_SESSION['error'] = 'Invalid email or password';
            header('Location: login.php');
            exit();
        }
        
        if (!$parent['is_active']) {
            $_SESSION['error'] = 'Account has been disabled';
            header('Location: login.php');
            exit();
        }
        
        // Verify password
        if (!password_verify($password, $parent['password_hash'])) {
            $_SESSION['error'] = 'Invalid email or password';
            header('Location: login.php');
            exit();
        }
        
        // Create session
        $_SESSION['parent_id'] = $parent['parent_id'];
        $_SESSION['student_id'] = $parent['student_id'];
        $_SESSION['parent_name'] = $parent['name'];
        $_SESSION['user_role'] = 'parent';
        
        // Update last login
        $updateSql = "UPDATE parent_accounts SET last_login = NOW() WHERE parent_id = ?";
        $updateStmt = $pdo->prepare($updateSql);
        $updateStmt->execute([$parent['parent_id']]);
        
        $_SESSION['success'] = 'Login successful';
        header('Location: dashboard.php');
        
    } catch (Exception $e) {
        $_SESSION['error'] = 'Login failed: ' . $e->getMessage();
    }
    
    header('Location: login.php');
    exit();
}
?>
```

### Student Dashboard View

**dashboard.php:**
```php
<?php
session_start();
require_once 'config/config.php';

// Check parent login
if (!isset($_SESSION['parent_id'])) {
    header('Location: login.php');
    exit();
}

$student_id = $_SESSION['student_id'];

// Get student information
$studentSql = "SELECT s.*, e.program_id FROM students s
               LEFT JOIN enrollments e ON s.student_id = e.student_id
               WHERE s.student_id = ? LIMIT 1";

$stmt = $pdo->prepare($studentSql);
$stmt->execute([$student_id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

// Get latest grades
$gradesSql = "SELECT g.*, c.course_name FROM grades g
              JOIN courses c ON g.subject_id = c.course_id
              WHERE g.student_id = ?
              ORDER BY g.created_at DESC
              LIMIT 5";

$gradesStmt = $pdo->prepare($gradesSql);
$gradesStmt->execute([$student_id]);
$grades = $gradesStmt->fetchAll(PDO::FETCH_ASSOC);

// Get current semester GPA
$gpaSql = "SELECT semester_gpa, cumulative_gpa, academic_standing
           FROM gpa_records
           WHERE student_id = ?
           ORDER BY semester_id DESC LIMIT 1";

$gpaStmt = $pdo->prepare($gpaSql);
$gpaStmt->execute([$student_id]);
$gpa = $gpaStmt->fetch(PDO::FETCH_ASSOC);

// Get attendance percentage
$attendanceSql = "SELECT 
                  COUNT(CASE WHEN a.status = 'Present' THEN 1 END) as present_days,
                  COUNT(a.attendance_id) as total_classes,
                  ROUND(COUNT(CASE WHEN a.status = 'Present' THEN 1 END) / 
                        COUNT(a.attendance_id) * 100, 1) as attendance_percent
                  FROM attendance a
                  WHERE a.student_id = ?";

$attendanceStmt = $pdo->prepare($attendanceSql);
$attendanceStmt->execute([$student_id]);
$attendance = $attendanceStmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard - Parent Portal</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['parent_name']); ?></h2>
            <p>Viewing Progress of: <strong><?php echo htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?></strong></p>
            
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">CGPA</h6>
                            <p class="card-text display-4"><?php echo $gpa['cumulative_gpa'] ?? 'N/A'; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Attendance</h6>
                            <p class="card-text display-4"><?php echo $attendance['attendance_percent'] ?? '0'; ?>%</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h4 class="mt-4">Recent Grades</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Grade</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($grades as $grade): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($grade['course_name']); ?></td>
                        <td><?php echo htmlspecialchars($grade['letter_grade']); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($grade['created_at'])); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <!-- Alerts and Announcements -->
            <h4>Important Alerts</h4>
            <!-- Alert items here -->
        </div>
    </div>
</div>
</body>
</html>

<?php mysqli_close($conn); ?>
```

---

## CHAPTER 7: TESTING

### 7.1 Introduction to System Testing

System testing verifies:

1. Parent login works correctly
2. Parents can only view their own child's information
3. Grades and attendance display accurately
4. Alerts generate appropriately
5. Messaging between parent and faculty works
6. Security prevents unauthorized access

### 7.2 Types of Testing

#### Unit Testing
- Test parent login validation
- Test password hashing
- Test authorization checks (parent sees only their child)
- Test GPA calculation display

#### Integration Testing
- Parent login → View student dashboard
- View grades → Display accurate information
- Send message → Faculty receives notification
- Receive alert → Parent notified

#### Functional Testing
- Parent logs in with email
- Views student's grades, attendance, performance
- Messages faculty about concerns
- Downloads academic report (PDF)
- Logs out securely

#### White Box Testing
- Verify authorization prevents access to other student data
- Test SQL queries return correct filtered data
- Verify session security and timeout
- Test transaction management for message creation

#### Black Box Testing
- Parent enters valid credentials → Logs in successfully
- Parent views grades → Information matches main system
- Parent sends message → Faculty receives notification
- Parent logs out → Session terminated

#### Security Testing
- Parent cannot access other parent accounts
- Parent cannot access student admin interface
- Session timeout after inactivity
- Password reset functionality works securely
- Messages encrypted if containing sensitive info

#### Performance Testing
- Load dashboard with multiple student records
- Display grades for 5000+ student records
- Message system handles concurrent users
- Notification delivery for 2000+ parents

---

## CHAPTER 8: CONCLUSION AND FUTURE SCOPE

### Conclusion

The Parent & Guardian Portal successfully enables parents to monitor their child's academic progress and engage with the institution. The portal provides transparent access to grades, attendance, and institutional information while facilitating direct communication with faculty.

Key achievements:
- Secure parent login and authentication
- Real-time access to student's academic information
- Proactive alert system for performance/attendance issues
- Messaging interface for parent-faculty communication

### Future Scope

1. **Mobile App**: Native iOS and Android apps for convenient access
2. **Financial Portal**: Extended access to fee and payment information
3. **Learning Resources**: Shared study materials and assignment guidelines
4. **Parent-Teacher Video Calls**: Scheduled video conferencing for meetings
5. **Performance Predictions**: AI predictions of final grades based on current performance
6. **Sibling Management**: Parents with multiple children manage all from one account
7. **Event Calendar**: School events and important dates visible to parents
8. **Learning Analytics**: Detailed analytics of child's learning progress
9. **Multi-Language Support**: Portal in regional languages for wider access
10. **Feedback System**: Structured feedback from parents on institutional services

---

## CHAPTER 9: REFERENCE

1. **PHP Official Documentation**: https://www.php.net/manual/en/

2. **MySQL Documentation**: https://dev.mysql.com/doc/

3. **Bootstrap Framework**: https://getbootstrap.com/docs/5.3/

4. **Password Hashing**: https://www.php.net/manual/en/function.password-hash.php

5. **Session Security**: OWASP Session Security: https://owasp.org/

6. **Responsive Design**: W3Schools: https://www.w3schools.com/css/css_rwd_intro.asp

7. **Parent Engagement**: Joyce Epstein's Work on Six Types of Parent Involvement

8. **Educational Technology**: https://www.iste.org/

9. **MDN Web Docs**: https://developer.mozilla.org/en-US/

10. **Software Engineering**: Sommerville, I. (2015)

---

**End of Report**
