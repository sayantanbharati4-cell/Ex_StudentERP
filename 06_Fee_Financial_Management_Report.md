# Fee & Financial Management

## A PROJECT REPORT

**By**

| Student Name | Registration Number |
|---|---|
| ROHIT MAITY | D232419326 |
| SK ASIF | D232419327 |
| PALASH MONDAL | D232419328 |
| HRIDAY BAIRAGI | D232419329 |
| ANKUSH KUMAR | D232419331 |

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

This is to certify that the project entitled **"Fee & Financial Management System"** is a bonafide work carried out by:

- ROHIT MAITY (D232419326)
- SK ASIF (D232419327)
- PALASH MONDAL (D232419328)
- HRIDAY BAIRAGI (D232419329)
- ANKUSH KUMAR (D232419331)

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

We the students of B.Tech. 2nd year, Department of Computer Science & Technology, Kingston Polytechnic College, would like to express our sincere gratitude and deep regards to our guide **Saikat Biswas** (Lecturer, CST) for his excellent guidance, continuous support, and constructive criticism throughout the development of the **Fee & Financial Management System** project.

We would also like to extend our thanks to all faculty members and staff of the Department of Computer Science & Technology, Kingston Polytechnic College, for their valuable suggestions and support. We are grateful to the Principal and the Administrative Staff of Kingston Polytechnic College for providing the necessary infrastructure and resources to complete this project.

Special thanks to all our friends and family members who directly or indirectly supported us during the entire development process.

---

**Submitted by:**

| Student Name | Registration Number |
|---|---|
| ROHIT MAITY | D232419326 |
| SK ASIF | D232419327 |
| PALASH MONDAL | D232419328 |
| HRIDAY BAIRAGI | D232419329 |
| ANKUSH KUMAR | D232419331 |

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

The Fee & Financial Management System is a critical module of the Academic Monitoring System for Students, designed to manage student fees collection, payment processing, receipts, financial records, and accounting. This module streamlines financial operations, ensures transparency, and provides comprehensive financial reporting.

The primary objective is to automate fee collection, payment processing, receipt generation, and financial tracking. The system tracks payment status, manages fee reminders, handles fee waivers and concessions, and generates financial reports for institutional planning and accounting.

The proposed system addresses challenges in manual fee management including manual receipt writing, difficulty in tracking payments, delayed financial reporting, and lack of transparent fee information to students. Key features include fee structure definition, payment processing, receipt generation, payment history tracking, and financial analytics. This report details the technical design, implementation approach, testing methodology, and future enhancements for the Fee & Financial Management System.

---

## CHAPTER 1: INTRODUCTION

### 1.1 Objective

The Fee & Financial Management System is developed with the following objectives:

1. **Automated Payment Processing**: To automate fee payment collection and processing, reducing manual effort and payment errors.

2. **Transparent Fee Information**: To provide students and parents clear fee structures, payment status, and outstanding balance information.

3. **Receipt Management**: To automatically generate digital receipts for all payments with proper documentation.

4. **Payment Tracking**: To maintain complete payment history and enable quick verification of payment status.

5. **Financial Reporting**: To generate accurate financial reports for accounting, budgeting, and institutional planning.

### 1.2 Scope of the Project

The Fee & Financial Management System covers:

**Functional Scope:**
- Fee structure definition for different programs and categories
- Student fee assignment and modification
- Payment processing (online and offline)
- Receipt generation and distribution
- Payment reminders and notifications
- Fee waivers and concessions management
- Financial reports and accounting integration
- Late fee management
- Payment reconciliation

**Geographic Scope:**
- All students and programs at Kingston Polytechnic College
- Accessible to finance staff, parents, and students

**Time Scope:**
- Covers entire academic year and multiple years
- Historical financial data for auditing and analysis

**Technical Scope:**
- Web-based payment processing
- Integration with online payment gateways
- Automated reminders and notifications
- Financial report generation

### 1.3 Modules

The Fee & Financial Management System comprises:

1. **Fee Structure Module**: Define fee components, categories, and payment schedules.

2. **Fee Assignment Module**: Assign fees to students based on program and category.

3. **Payment Processing Module**: Record and process fee payments from students.

4. **Receipt Generation Module**: Automatically generate digital receipts for all payments.

5. **Payment Tracking Module**: Maintain payment history and status for each student.

6. **Fee Reminder Module**: Send automated reminders for pending fee payments.

7. **Concession Management Module**: Manage fee waivers, scholarships, and concessions.

8. **Financial Reporting Module**: Generate financial reports for accounting and analysis.

---

## CHAPTER 2: REQUIREMENT SPECIFICATIONS

### 2.1 Hardware Requirements

| Component | Requirement |
|---|---|
| **Processor** | Intel Core i5 (2.8 GHz) or equivalent |
| **RAM** | Minimum 4 GB (8 GB recommended) |
| **Hard Disk** | 500 GB for fee records and receipts |
| **Monitor** | 15-inch LED display with 1366×768 resolution |
| **Network** | Internet with minimum 2 Mbps for payment gateway |
| **Server Hardware** | Intel Xeon, 8 GB RAM, 1 TB HDD (production) |

### 2.2 Software Requirements

| Component | Specification |
|---|---|
| **Operating System** | Windows 10/11, macOS, Ubuntu Linux |
| **Web Server** | Apache HTTP Server 2.4.29 (XAMPP) |
| **Backend Language** | PHP 7.4.29 or higher |
| **Database** | MySQL 8.0 with MySQLnd 7.4.29 |
| **Frontend Framework** | Bootstrap 5.3 |
| **PDF Generation** | TCPDF, mPDF for receipt generation |
| **Payment Gateway** | Razorpay, PayU, or similar integration |
| **Email Service** | SMTP for payment notifications |
| **Development IDE** | Visual Studio Code, PhpStorm |
| **Web Browser** | Chrome, Firefox, Edge (latest) |

---

## CHAPTER 3: ANALYSIS

### 3.1 Existing System

Challenges in manual fee management:

1. **Manual Receipt Writing**: Paper-based receipts with:
   - Risk of loss or damage
   - Difficult record keeping
   - No digital backup

2. **Payment Tracking Issues**: Manual tracking causes:
   - Delays in payment verification
   - Duplicate payment risks
   - Difficult reconciliation

3. **Poor Transparency**: Students and parents unaware of:
   - Exact fee amounts
   - Payment deadlines
   - Outstanding balance

### 3.2 Proposed System

Automated fee management with:

1. **Digital Payment Processing**: Online and offline payment recording with verification.

2. **Automatic Receipt Generation**: Digital receipts emailed to parents immediately.

3. **Real-Time Payment Status**: Students view payment status anytime.

4. **Automated Reminders**: Email/SMS reminders before payment deadlines.

### 3.3 Feasibility System

#### Economic Feasibility
- **Cost Savings**: Eliminates manual receipt writing and tracking time.
- **Reduced Bad Debts**: Reminders help improve payment collection.
- **Verdict**: **FEASIBLE**

#### Technical Feasibility
- **Payment Gateway**: Integration APIs readily available.
- **Technology**: PHP, MySQL proven for financial systems.
- **Verdict**: **FEASIBLE**

#### Operational Feasibility
- **Training**: Finance staff quick to learn system.
- **Adoption**: Students prefer online payment convenience.
- **Verdict**: **FEASIBLE**

### 3.4 Software Specification

#### HTML5
- Fee structure and payment forms
- Payment history and receipt displays
- Online payment pages
- Financial report templates

#### CSS3
- Responsive payment interface
- Color-coding for payment status
- Print-friendly receipt layouts
- Mobile-optimized payment page

#### JavaScript
- Form validation for payment details
- Real-time balance calculation
- Payment gateway integration
- Receipt download and printing

#### PHP
- Payment processing and verification
- Receipt generation logic
- Fee calculation and tracking
- Financial report generation

#### MySQL
- **FeeStructure**: Fee components, amounts, categories
- **StudentFees**: Assigned fees per student
- **Payments**: Payment records with date, amount, method
- **Receipts**: Generated receipt information
- **FinancialRecords**: Accounting entries

---

## CHAPTER 4: SYSTEM DESIGN

### 4.1 Table Design

#### Table 1: `fee_structure`
| Field | Type | Constraint | Description |
|---|---|---|---|
| fee_id | INT | PRIMARY KEY, AUTO_INCREMENT | Fee structure identifier |
| fee_name | VARCHAR(100) | NOT NULL | Fee name (Tuition, Lab, etc.) |
| fee_amount | DECIMAL(10,2) | NOT NULL | Fee amount in rupees |
| fee_type | VARCHAR(50) | Fixed, Variable, One-time |
| academic_year | VARCHAR(10) | NOT NULL | Academic year applicable |
| program_id | INT | FOREIGN KEY | Program this fee applies to |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation date |

#### Table 2: `student_fees`
| Field | Type | Constraint | Description |
|---|---|---|---|
| student_fee_id | INT | PRIMARY KEY, AUTO_INCREMENT | Student fee record |
| student_id | INT | FOREIGN KEY | Reference to student |
| fee_id | INT | FOREIGN KEY | Reference to fee structure |
| amount_due | DECIMAL(10,2) | NOT NULL | Total amount due |
| due_date | DATE | NOT NULL | Payment due date |
| status | ENUM('Pending','Paid','Partial','Overdue') | DEFAULT 'Pending' | Payment status |
| assigned_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Date fee assigned |

#### Table 3: `payments`
| Field | Type | Constraint | Description |
|---|---|---|---|
| payment_id | INT | PRIMARY KEY, AUTO_INCREMENT | Payment record identifier |
| student_fee_id | INT | FOREIGN KEY | Reference to student fee |
| student_id | INT | FOREIGN KEY | Reference to student |
| amount_paid | DECIMAL(10,2) | NOT NULL | Amount paid |
| payment_method | VARCHAR(50) | Cash, Online, Cheque, DD |
| payment_date | DATE | NOT NULL | Payment date |
| reference_no | VARCHAR(100) | Bank/gateway reference |
| payment_status | ENUM('Success','Pending','Failed') | Payment status |
| processed_by | INT | FOREIGN KEY | Staff who recorded payment |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation timestamp |

#### Table 4: `receipts`
| Field | Type | Constraint | Description |
|---|---|---|---|
| receipt_id | INT | PRIMARY KEY, AUTO_INCREMENT | Receipt identifier |
| payment_id | INT | FOREIGN KEY | Reference to payment |
| receipt_number | VARCHAR(50) | UNIQUE | Receipt number |
| receipt_date | DATE | NOT NULL | Receipt issue date |
| receipt_path | VARCHAR(255) | Path to PDF receipt file |
| email_sent | BOOLEAN | DEFAULT FALSE | Receipt emailed to parent |
| sent_at | TIMESTAMP | Date receipt email sent |

#### Table 5: `financial_records`
| Field | Type | Constraint | Description |
|---|---|---|---|
| record_id | INT | PRIMARY KEY, AUTO_INCREMENT | Financial record |
| payment_id | INT | FOREIGN KEY | Reference to payment |
| transaction_type | VARCHAR(50) | Debit, Credit, Refund |
| amount | DECIMAL(10,2) | NOT NULL | Transaction amount |
| narration | TEXT | Transaction description |
| entry_date | DATE | NOT NULL | Entry date |
| created_at | TIMESTAMP | DEFAULT CURRENT_TIMESTAMP | Creation timestamp |

### 4.2 Flowchart

[Placeholder: Provide flowchart showing: fee structure setup → student fee assignment → payment processing → receipt generation → payment reconciliation → financial reporting with decision points for status verification and reminder triggering.]

### 4.3 Data Flow Diagram

[Placeholder: Provide DFD showing data flow from fee structure definition through student fee assignment, payment collection, receipt generation, and financial reporting.]

### 4.4 E-R Diagram

[Placeholder: Provide ER diagram showing entities: FeeStructure, StudentFees, Payments, Receipts, FinancialRecords, Students, and their relationships.]

---

## CHAPTER 5: SAMPLE SCREENSHOTS

[Placeholder: Include screenshots showing:]

1. **Fee Structure Setup**: [Screenshot showing form to create fee components and amounts]

2. **Student Fee Assignment**: [Screenshot showing list of students with assigned fees]

3. **Payment Entry Form**: [Screenshot showing payment collection form with student details]

4. **Digital Receipt**: [Screenshot of PDF receipt with student info, fee details, amount paid]

5. **Financial Dashboard**: [Screenshot showing fee collection statistics and financial summary]

---

## CHAPTER 6: SYSTEM IMPLEMENTATION

### Payment Processing (PHP)

**process_payment.php:**
```php
<?php
session_start();
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_fee_id = intval($_POST['student_fee_id'] ?? 0);
    $amount_paid = floatval($_POST['amount_paid'] ?? 0);
    $payment_method = trim($_POST['payment_method'] ?? '');
    $reference_no = trim($_POST['reference_no'] ?? '');
    
    // Validate amount
    $feeSql = "SELECT sf.amount_due, sf.student_id FROM student_fees sf WHERE sf.student_fee_id = ?";
    $feeStmt = $pdo->prepare($feeSql);
    $feeStmt->execute([$student_fee_id]);
    $feeData = $feeStmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$feeData || $amount_paid <= 0 || $amount_paid > $feeData['amount_due']) {
        $_SESSION['error'] = 'Invalid payment amount';
        header('Location: payment_form.php');
        exit();
    }
    
    try {
        $pdo->beginTransaction();
        
        // Record payment
        $paymentSql = "INSERT INTO payments 
                       (student_fee_id, student_id, amount_paid, payment_method, 
                        payment_date, reference_no, payment_status, processed_by)
                       VALUES (?, ?, ?, ?, NOW(), ?, 'Success', ?)";
        
        $paymentStmt = $pdo->prepare($paymentSql);
        $paymentStmt->execute([
            $student_fee_id,
            $feeData['student_id'],
            $amount_paid,
            $payment_method,
            $reference_no,
            $_SESSION['user_id']
        ]);
        
        $payment_id = $pdo->lastInsertId();
        
        // Update student fee status
        $updateFeeSql = "UPDATE student_fees 
                         SET amount_due = amount_due - ?
                         WHERE student_fee_id = ?";
        
        $updateStmt = $pdo->prepare($updateFeeSql);
        $updateStmt->execute([$amount_paid, $student_fee_id]);
        
        // Generate receipt
        generateReceipt($payment_id, $student_fee_id, $amount_paid, $pdo);
        
        // Create financial record
        $finRecordSql = "INSERT INTO financial_records 
                         (payment_id, transaction_type, amount, narration, entry_date)
                         VALUES (?, 'Credit', ?, 'Fee payment received', NOW())";
        
        $finStmt = $pdo->prepare($finRecordSql);
        $finStmt->execute([$payment_id, $amount_paid]);
        
        $pdo->commit();
        
        $_SESSION['success'] = 'Payment processed successfully. Receipt generated.';
        
    } catch (Exception $e) {
        $pdo->rollBack();
        $_SESSION['error'] = 'Payment processing failed: ' . $e->getMessage();
    }
    
    header('Location: payments.php');
    exit();
}

function generateReceipt($payment_id, $student_fee_id, $amount_paid, $pdo) {
    require_once 'libraries/TCPDF/tcpdf.php';
    
    // Get payment and student details
    $sql = "SELECT p.payment_id, p.payment_date, p.amount_paid, 
            s.first_name, s.last_name, s.registration_no, s.email,
            g.contact_name as parent_name, g.email as parent_email
            FROM payments p
            JOIN students s ON p.student_id = s.student_id
            LEFT JOIN emergency_contacts g ON s.student_id = g.student_id
            WHERE p.payment_id = ?
            LIMIT 1";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$payment_id]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Create PDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_PAGE_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Kingston Polytechnic College', 0, 1, 'C');
    
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 10, 'Fee Receipt', 0, 1, 'C');
    
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Ln(5);
    
    $receiptNo = date('Y') . str_pad($payment_id, 6, '0', STR_PAD_LEFT);
    $pdf->Cell(50, 5, 'Receipt No: ' . $receiptNo);
    $pdf->Cell(0, 5, 'Date: ' . date('d-m-Y', strtotime($data['payment_date'])), 0, 1);
    
    $pdf->Ln(5);
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(50, 5, 'Student Details:');
    $pdf->Ln(5);
    
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(50, 5, 'Name: ' . $data['first_name'] . ' ' . $data['last_name']);
    $pdf->Cell(0, 5, 'Reg. No: ' . $data['registration_no'], 0, 1);
    
    $pdf->Ln(5);
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(50, 5, 'Amount Received:');
    $pdf->Ln(5);
    
    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(50, 5, 'Amount: Rs. ' . number_format($data['amount_paid'], 2));
    $pdf->Ln(10);
    
    // Save PDF
    $filename = 'receipts/receipt_' . $receiptNo . '.pdf';
    $pdf->Output($filename, 'F');
    
    // Save receipt record
    $saveSql = "INSERT INTO receipts (payment_id, receipt_number, receipt_date, receipt_path)
                VALUES (?, ?, NOW(), ?)";
    
    $saveStmt = $pdo->prepare($saveSql);
    $saveStmt->execute([$payment_id, $receiptNo, $filename]);
    
    // Send email
    sendReceiptEmail($data['parent_email'], $filename, $data['first_name']);
}
?>
```

### Fee Reminder Script

**send_fee_reminders.php:**
```php
<?php
require_once 'config/config.php';

// Find students with overdue fees
$sql = "SELECT DISTINCT s.student_id, s.first_name, s.last_name, s.email,
        gc.email as parent_email, SUM(sf.amount_due) as total_due
        FROM students s
        JOIN student_fees sf ON s.student_id = sf.student_id
        LEFT JOIN emergency_contacts gc ON s.student_id = gc.student_id
        WHERE sf.status IN ('Pending', 'Overdue')
        AND sf.due_date < NOW()
        GROUP BY s.student_id";

$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $emailData = [
        'student_name' => $row['first_name'] . ' ' . $row['last_name'],
        'total_due' => number_format($row['total_due'], 2),
        'parent_email' => $row['parent_email']
    ];
    
    // Send email reminder
    sendReminderEmail($emailData);
}
?>
```

---

## CHAPTER 7: TESTING

### 7.1 Introduction to System Testing

System testing verifies:

1. Payments recorded correctly
2. Receipts generated accurately
3. Fee status updated properly
4. Financial records maintained
5. Payment reminders sent appropriately
6. Reporting shows correct balances

### 7.2 Types of Testing

#### Unit Testing
- Test payment amount validation
- Test receipt number generation
- Test fee status transitions
- Test financial record calculation

#### Integration Testing
- Payment entry → Receipt generation → Email sending
- Payment recording → Fee status update → Student balance update
- Multiple payments → Total balance calculation

#### Functional Testing
- Student pays partial fee
- Student pays multiple fees simultaneously
- View payment history
- Generate financial report
- Export fee data

#### White Box Testing
- Verify receipt number generation is unique
- Test transaction rollback on email failure
- Verify financial record entries match payments

#### Black Box Testing
- User records payment → Receipt generated and emailed
- User views fee status → Shows accurate balance
- Finance staff generates report → Report totals correct

#### Security Testing
- Student cannot modify payment amount
- Non-finance staff cannot void payments
- Payment amounts limited to fee outstanding
- Email verification of receipts

#### Performance Testing
- Process payments for 1000+ students
- Generate receipts in bulk
- Send reminders to 500+ students
- Generate monthly financial reports

---

## CHAPTER 8: CONCLUSION AND FUTURE SCOPE

### Conclusion

The Fee & Financial Management System successfully automates fee collection and financial management. The system ensures transparent fee information, rapid payment processing, and accurate financial record-keeping.

Key achievements:
- Automated payment processing and receipt generation
- Real-time payment status tracking
- Transparent fee information for students/parents
- Accurate financial reporting

### Future Scope

1. **Online Payment Gateway**: Direct online payment integration (Razorpay, PayU)
2. **QR Code Payments**: QR code-based payment receipts
3. **Schedule-Based Reminders**: Automated reminders before due date
4. **Partial Payment Plans**: Flexible payment installment options
5. **Scholarship Integration**: Automatic scholarship adjustment in fees
6. **Refund Processing**: Automated refund workflows
7. **Multi-Currency Support**: Handle fees in multiple currencies
8. **Expense Tracking**: Track college expenses against income
9. **Mobile Payment**: Payment option from mobile app
10. **Financial Analytics**: Predictive analytics for collection forecasting

---

## CHAPTER 9: REFERENCE

1. **PHP Official Documentation**: https://www.php.net/manual/en/

2. **MySQL Documentation**: https://dev.mysql.com/doc/

3. **TCPDF Library**: https://tcpdf.org/

4. **Payment Gateway APIs**: Razorpay, PayU documentation

5. **Bootstrap Framework**: https://getbootstrap.com/docs/5.3/

6. **Financial Management**: Damodaran, A. (2012). Investment Valuation

7. **Accounting Standards**: https://www.icai.org/

8. **Database Security**: OWASP: https://owasp.org/

9. **W3Schools**: https://www.w3schools.com/

10. **MDN Web Docs**: https://developer.mozilla.org/en-US/

---

**End of Report**
