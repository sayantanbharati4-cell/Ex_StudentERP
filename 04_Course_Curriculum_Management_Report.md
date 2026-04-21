# Course & Curriculum Management

## A PROJECT REPORT

**By**

| Student Name | Registration Number |
|---|---|
| PAYEL KHAN | D232419312 |
| UPAMA PARAMANIK | D232419313 |
| MOU DAS | D232419314 |
| SUDESHNA SAMANTA | D232419316 |
| RAMDAS HEMBRAM | D232419318 |

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

This is to certify that the project entitled **"Course & Curriculum Management System"** is a bonafide work carried out by:

- PAYEL KHAN (D232419312)
- UPAMA PARAMANIK (D232419313)
- MOU DAS (D232419314)
- SUDESHNA SAMANTA (D232419316)
- RAMDAS HEMBRAM (D232419318)

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

We the students of B.Tech. 2nd year, Department of Computer Science & Technology, Kingston Polytechnic College, would like to express our sincere gratitude and deep regards to our guide **Saikat Biswas** (Lecturer, CST) for his excellent guidance, continuous support, and constructive criticism throughout the development of the **Course & Curriculum Management System** project.

We would also like to extend our thanks to all faculty members and staff of the Department of Computer Science & Technology, Kingston Polytechnic College, for their valuable suggestions and support. We are grateful to the Principal and the Administrative Staff of Kingston Polytechnic College for providing the necessary infrastructure and resources to complete this project.

Special thanks to all our friends and family members who directly or indirectly supported us during the entire development process.

---

**Submitted by:**

| Student Name | Registration Number |
|---|---|
| PAYEL KHAN | D232419312 |
| UPAMA PARAMANIK | D232419313 |
| MOU DAS | D232419314 |
| SUDESHNA SAMANTA | D232419316 |
| RAMDAS HEMBRAM | D232419318 |

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

The Course & Curriculum Management System is a foundational module of the Academic Monitoring System for Students, designed to manage academic programs, courses, curricula, and their associations with students, faculty, and resources. This module provides administrators with tools to design, implement, and maintain institutional academic structures and ensure alignment with accreditation standards and learning objectives.

The primary objective of this system is to centralize curriculum management, automate course scheduling, link students to appropriate courses, and provide faculty with course information. The system facilitates curriculum versioning, allows tracking of course prerequisites and co-requisites, and enables analysis of curriculum effectiveness.

The proposed system addresses challenges in manual curriculum management such as scheduling conflicts, incorrect course-student associations, difficulty in curriculum updates, and lack of curriculum alignment tracking. Key features include program management, course creation and management, curriculum design, prerequisite tracking, and course allocation. This report details the technical design, implementation approach, testing methodology, and future enhancements for the Course & Curriculum Management System.

---

## CHAPTER 1: INTRODUCTION

### 1.1 Objective

The Course & Curriculum Management System is developed with the following primary objectives:

1. **Centralized Curriculum Management**: To create a unified system for defining, managing, and updating academic programs and curricula.

2. **Course Organization**: To systematically organize courses, subjects, and topics with clear learning objectives and assessment methods.

3. **Student-Course Mapping**: To efficiently associate students with appropriate courses based on their program enrollment and prerequisites.

4. **Curriculum Versioning**: To track curriculum changes over time and maintain version control for quality assurance and accreditation.

5. **Schedule Optimization**: To facilitate conflict-free course scheduling for faculty and students across the institution.

### 1.2 Scope of the Project

The Course & Curriculum Management System is developed as an integral part of the Academic Monitoring System for Students. The scope includes:

**Functional Scope:**
- Program creation and management (B.Tech, Diploma, etc.)
- Course/Subject creation with learning objectives
- Curriculum design and structure definition
- Prerequisite and co-requisite management
- Course scheduling and timetable generation
- Student enrollment in programs and courses
- Faculty course allocation
- Curriculum effectiveness analysis

**Geographic Scope:**
- Applicable to all academic departments and programs at Kingston Polytechnic College
- Accessible to administrators, faculty, and students

**Time Scope:**
- Covers multiple semesters and academic years
- Historical tracking of curriculum changes

**Technical Scope:**
- Web-based application using PHP, MySQL, HTML, CSS, and JavaScript
- Integration with Student Information and Attendance modules
- Schedule conflict detection and resolution

### 1.3 Modules

The Course & Curriculum Management System comprises:

1. **Program Management Module**: Create and manage academic programs with structure and duration.

2. **Course/Subject Management Module**: Define courses with learning objectives, syllabus, and assessment methods.

3. **Curriculum Design Module**: Design semester-wise curriculum structure and course sequences.

4. **Prerequisite Management Module**: Define and enforce course prerequisites and co-requisites.

5. **Course Allocation Module**: Allocate courses to faculty and manage course preferences.

6. **Schedule Management Module**: Create conflict-free timetables and course schedules.

7. **Enrollment Management Module**: Enroll students in courses based on program and prerequisites.

8. **Curriculum Analysis Module**: Analyze curriculum effectiveness and identify improvements.

---

## CHAPTER 2: REQUIREMENT SPECIFICATIONS

### 2.1 Hardware Requirements

| Component | Requirement |
|---|---|
| **Processor** | Intel Core i5 (2.8 GHz) or equivalent |
| **RAM** | Minimum 4 GB (8 GB recommended) |
| **Hard Disk** | 500 GB with curriculum archives |
| **Monitor** | 15-inch LED or LCD display |
| **Network** | Internet with minimum 2 Mbps |
| **Server Hardware** | Intel Xeon, 8 GB RAM, 1 TB HDD |

### 2.2 Software Requirements

| Component | Specification |
|---|---|
| **Operating System** | Windows 10/11, macOS, Ubuntu Linux 20.04 LTS |
| **Web Server** | Apache HTTP Server 2.4.29 (XAMPP) |
| **Backend Language** | PHP 7.4.29 or higher |
| **Database** | MySQL 8.0 with PHP MySQLnd 7.4.29 |
| **Frontend Framework** | Bootstrap 5.3 |
| **Frontend Languages** | HTML5, CSS3, JavaScript |
| **Chart Library** | Chart.js for curriculum analytics |
| **Development IDE** | Visual Studio Code, PhpStorm |
| **Web Browser** | Chrome, Firefox, Edge (latest) |

---

## CHAPTER 3: ANALYSIS

### 3.1 Existing System

Current challenges in curriculum management:

1. **Manual Curriculum Design**: Paper-based curriculum documents with:
   - Difficult updates and version control
   - No centralized repository
   - Inconsistent across departments

2. **Scheduling Conflicts**: Manual timetable creation prone to:
   - Room and faculty overlaps
   - Student section conflicts

### 3.2 Proposed System

Automated curriculum management with:

1. **Centralized Curriculum Database**: All programs and courses in single system.

2. **Version Control**: Track curriculum changes and maintain history.

3. **Conflict Detection**: Automated detection of scheduling and prerequisite conflicts.

4. **Easy Updates**: Quick curriculum modifications with audit trails.

### 3.3 Feasibility System

#### Economic Feasibility
- **Efficiency**: Reduces manual curriculum planning time and scheduling errors.
- **ROI**: Quick recovery through improved scheduling and reduced conflicts.
- **Verdict**: **FEASIBLE**

#### Technical Feasibility
- **Technology**: PHP, MySQL proven for educational systems.
- **Integration**: Compatible with existing modules.
- **Verdict**: **FEASIBLE**

#### Operational Feasibility
- **Training**: Administrators quickly learn system operations.
- **Adoption**: Improves curriculum accuracy and planning.
- **Verdict**: **FEASIBLE**

### 3.4 Software Specification

#### HTML5
- Program and course definition forms
- Curriculum structure builders
- Schedule/timetable displays
- Prerequisite relationship mappings

#### CSS3
- Responsive curriculum displays
- Color-coded semester views
- Conflict highlighting
- Print-friendly curriculum documents

#### JavaScript
- Real-time prerequisite validation
- Schedule conflict checking
- Dynamic curriculum builders
- AJAX-based curriculum updates

#### PHP
- Program and course CRUD operations
- Curriculum structure management
- Conflict detection algorithms
- Schedule generation

#### MySQL
- **Programs**: Program name, duration, credits, learning outcomes
- **Courses**: Course code, name, credits, learning objectives, syllabus
- **Curriculum**: Program semester structure and course sequences
- **Prerequisites**: Course dependency relationships

---

## CHAPTER 4: SYSTEM DESIGN

### 4.1 Table Design

#### Table 1: `programs`
| Field | Type | Constraint | Description |
|---|---|---|---|
| program_id | INT | PRIMARY KEY, AUTO_INCREMENT | Program identifier |
| program_name | VARCHAR(100) | NOT NULL, UNIQUE | Program name (B.Tech CSE, etc.) |
| program_code | VARCHAR(20) | UNIQUE | Program code |
| duration_years | INT | NOT NULL | Program duration in years |
| total_credits | INT | NOT NULL | Total credits in program |
| description | TEXT | Program description |
| is_active | BOOLEAN | DEFAULT TRUE | Current program status |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation date |

#### Table 2: `courses`
| Field | Type | Constraint | Description |
|---|---|---|---|
| course_id | INT | PRIMARY KEY, AUTO_INCREMENT | Course identifier |
| course_code | VARCHAR(20) | UNIQUE, NOT NULL | Course code |
| course_name | VARCHAR(100) | NOT NULL | Course name |
| description | TEXT | Course description |
| credits | INT | NOT NULL | Course credits |
| learning_outcomes | TEXT | Learning objectives |
| syllabus | LONGTEXT | Course syllabus |
| assessment_method | TEXT | Assessment methods |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation date |

#### Table 3: `curriculum`
| Field | Type | Constraint | Description |
|---|---|---|---|
| curriculum_id | INT | PRIMARY KEY, AUTO_INCREMENT | Curriculum version ID |
| program_id | INT | FOREIGN KEY | Reference to program |
| semester | INT | NOT NULL | Semester number |
| course_id | INT | FOREIGN KEY | Course in curriculum |
| is_compulsory | BOOLEAN | DEFAULT TRUE | Compulsory or elective |
| version | INT | NOT NULL | Curriculum version |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation date |

#### Table 4: `prerequisites`
| Field | Type | Constraint | Description |
|---|---|---|---|
| prerequisite_id | INT | PRIMARY KEY, AUTO_INCREMENT | Prerequisite rule ID |
| course_id | INT | FOREIGN KEY | Course requiring prerequisite |
| prerequisite_id_ref | INT | FOREIGN KEY | Required course |
| min_grade | VARCHAR(5) | Minimum grade required |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation date |

### 4.2 Flowchart

[Placeholder: Provide flowchart showing: administrator selects program → defines curriculum → adds courses to semesters → validates prerequisites → saves curriculum → generates timetable. Include decision points for conflicts and prerequisite validation.]

### 4.3 Data Flow Diagram

[Placeholder: Provide DFD showing flow from program setup through curriculum definition to course allocation and schedule generation.]

### 4.4 E-R Diagram

[Placeholder: Provide ER diagram showing entities: Programs, Courses, Curriculum, Prerequisites, Faculty, Students, Schedules with relationships.]

---

## CHAPTER 5: SAMPLE SCREENSHOTS

[Placeholder: Include screenshots showing:]

1. **Program Management**: [Screenshot of program creation form and program list]

2. **Course Management**: [Screenshot showing course catalog with details]

3. **Curriculum Design**: [Screenshot showing semester-wise curriculum layout]

4. **Prerequisite Mapping**: [Screenshot showing prerequisite relationship visualization]

5. **Schedule/Timetable**: [Screenshot showing generated class schedule]

---

## CHAPTER 6: SYSTEM IMPLEMENTATION

### Program and Course Management (PHP)

**create_program.php:**
```php
<?php
session_start();
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $program_name = trim($_POST['program_name'] ?? '');
    $program_code = trim($_POST['program_code'] ?? '');
    $duration_years = intval($_POST['duration_years'] ?? 0);
    $total_credits = intval($_POST['total_credits'] ?? 0);
    $description = trim($_POST['description'] ?? '');
    
    // Validate
    if (!$program_name || !$program_code || !$duration_years || !$total_credits) {
        $_SESSION['error'] = 'All required fields must be filled';
        header('Location: program_create.php');
        exit();
    }
    
    try {
        $sql = "INSERT INTO programs 
                (program_name, program_code, duration_years, total_credits, description) 
                VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$program_name, $program_code, $duration_years, $total_credits, $description])) {
            $_SESSION['success'] = 'Program created successfully';
            header('Location: programs.php');
        } else {
            $_SESSION['error'] = 'Failed to create program';
        }
    } catch (PDOException $e) {
        if ($e->getCode() == '23000') { // Duplicate entry
            $_SESSION['error'] = 'Program code or name already exists';
        } else {
            $_SESSION['error'] = 'Database error: ' . $e->getMessage();
        }
    }
    
    header('Location: program_create.php');
    exit();
}
?>
```

### Curriculum Design Form

**HTML:**
```html
<form id="curriculumForm" method="POST" action="save_curriculum.php">
    <div class="form-group">
        <label for="programSelect">Select Program</label>
        <select id="programSelect" name="program_id" class="form-control" 
                required onchange="updateCurriculumDisplay()">
            <option value="">-- Select --</option>
        </select>
    </div>

    <div id="semesters">
        <!-- Semesters will be generated dynamically -->
    </div>

    <button type="submit" class="btn btn-primary">Save Curriculum</button>
</form>

<script>
function updateCurriculumDisplay() {
    const programId = document.getElementById('programSelect').value;
    if (!programId) return;
    
    fetch('ajax/get_program_structure.php?program_id=' + programId)
        .then(response => response.json())
        .then(data => {
            let html = '';
            for (let sem = 1; sem <= data.duration_years * 2; sem++) {
                html += `
                    <div class="semester-panel">
                        <h5>Semester ${sem}</h5>
                        <div class="course-selector">
                            <select multiple name="courses[${sem}][]" class="form-control">
                            </select>
                        </div>
                    </div>
                `;
            }
            document.getElementById('semesters').innerHTML = html;
        });
}
</script>
```

### Prerequisite Validation

```php
public function validatePrerequisites($student_id, $course_id, $pdo) {
    // Get prerequisites for course
    $sql = "SELECT p.prerequisite_id_ref, p.min_grade 
            FROM prerequisites p 
            WHERE p.course_id = ?";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$course_id]);
    $prerequisites = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($prerequisites as $prereq) {
        // Check if student has completed prerequisite
        $checkSql = "SELECT g.grade_points, g.letter_grade 
                     FROM grades g 
                     WHERE g.student_id = ? 
                     AND g.subject_id = ? 
                     AND g.status = 'Passed'";
        
        $checkStmt = $pdo->prepare($checkSql);
        $checkStmt->execute([$student_id, $prereq['prerequisite_id_ref']]);
        $result = $checkStmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$result) {
            return false; // Prerequisite not completed
        }
        
        // Check minimum grade if specified
        if ($prereq['min_grade']) {
            $gradeValue = $this->getGradeValue($result['letter_grade']);
            $minValue = $this->getGradeValue($prereq['min_grade']);
            
            if ($gradeValue < $minValue) {
                return false; // Grade below minimum
            }
        }
    }
    
    return true; // All prerequisites met
}
```

---

## CHAPTER 7: TESTING

### 7.1 Introduction to System Testing

System testing verifies:

1. Programs created with correct structure
2. Courses linked correctly to curriculum
3. Prerequisites enforced during enrollment
4. Schedule generation produces conflict-free timetables
5. Curriculum versioning maintains history
6. Student-course associations correct

### 7.2 Types of Testing

#### Unit Testing
- Test program duration validation
- Test credit calculation
- Test prerequisite checking logic
- Test curriculum version management

#### Integration Testing
- Program creation → Curriculum assignment → Course enrollment
- Prerequisite checking → Student enrollment blocking
- Schedule generation → Room/faculty conflict detection

#### Functional Testing
- Create program with 8 semesters
- Add 40 courses to curriculum with prerequisites
- Block student from course due to failed prerequisite
- Generate conflict-free timetable for 500 students

#### White Box Testing
- Verify prerequisite algorithm handles all edge cases
- Test database constraints prevent invalid curriculum states
- Test transaction rollback if schedule has conflicts

#### Black Box Testing
- User creates program → Program visible in list
- User assigns courses to semester → Curriculum saved
- User enrolls student → System validates prerequisites
- User generates schedule → No conflicts produced

#### Security Testing
- Non-admins cannot modify curriculum
- Faculty cannot change course schedules
- Student prerequisites enforced before enrollment

#### Performance Testing
- Generate timetable for 1000+ students
- Load curriculum with 100+ courses
- Handle 50+ concurrent curriculum edits

---

## CHAPTER 8: CONCLUSION AND FUTURE SCOPE

### Conclusion

The Course & Curriculum Management System successfully centralizes curriculum management and automates course scheduling. The system ensures curriculum quality, prevents enrollment mistakes through prerequisite enforcement, and optimizes resource allocation.

Key achievements:
- Centralized curriculum database with version control
- Automated conflict-free schedule generation
- Prerequisite enforcement ensuring academic integrity
- Integration with student enrollment workflow

### Future Scope

1. **Curriculum Analytics**: Analyze course effectiveness based on student performance
2. **Learning Path Recommendations**: AI-based course recommendations
3. **Curriculum Comparison**: Compare curricula across institutions
4. **Digital Syllabus**: Rich media syllabus with embedded videos and resources
5. **Real-Time Availability**: Live course availability and seat information
6. **Course Swapping**: Automated student course swaps
7. **Teaching Load Analysis**: Optimize faculty workload distribution
8. **Accreditation Reporting**: Automated alignment with accreditation standards
9. **Mobile Course Catalog**: Mobile app for curriculum browsing
10. **Industry Alignment**: Track curriculum alignment with industry requirements

---

## CHAPTER 9: REFERENCE

1. **PHP Official Documentation**: https://www.php.net/manual/en/

2. **MySQL Documentation**: https://dev.mysql.com/doc/

3. **Bootstrap Framework**: https://getbootstrap.com/docs/5.3/

4. **Curriculum Design**: Wiggins, G., & McTighe, J. (2005). Understanding by Design

5. **Educational Standards**: https://www.aicte-india.org/

6. **W3Schools PHP**: https://www.w3schools.com/php/

7. **Database Design**: Silberschatz, A. et al. (2010)

8. **Software Engineering**: Sommerville, I. (2015)

9. **UML and System Design**: Larman, C. (2004)

10. **Timetable Generation Algorithms**: Research papers on constraint satisfaction

---

**End of Report**
