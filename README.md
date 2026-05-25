# Employee Management System

## Project Description
This is a simple Employee Management System developed using PHP and MySQL.  
The project allows admin users to manage employee records with CRUD operations.

---

# Features

- Admin Login Authentication
- Add Employee
- View Employee Records
- Update Employee Details
- Delete Employee Records
- Form Validation
- Logout Functionality

---

# Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- XAMPP
- phpMyAdmin

---

# Project Structure

```bash
Prodigy_FS_02/
│
├── index.php
├── login.php
├── logout.php
├── update.php
├── delete.php
├── db.php
├── style.css
├── script.js
└── README.md
```

---

# Database Setup

## Database Name
```sql
employee_db
```

---

# Employees Table

```sql
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    department VARCHAR(100),
    salary INT
);
```

---

# Admin Table

```sql
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(100)
);
```

---

# Insert Admin Login

```sql
INSERT INTO admin(username, password)
VALUES('admin', '12345');
```

---

# Login Credentials

| Username | Password |
|----------|----------|
| admin | 12345 |

---

# How to Run the Project

## Step 1
Install XAMPP.

## Step 2
Start:
- Apache
- MySQL

## Step 3
Move project folder into:

```bash
C:\xampp\htdocs
```

## Step 4
Open browser and run:

```bash
localhost/Prodigy_FS_02/login.php
```

---

# 📸 Screenshots

## Login Page
<img width="1919" height="1014" alt="Screenshot 2026-05-25 105005" src="https://github.com/user-attachments/assets/6ce93313-9413-4522-a2ab-4796e4d3f083" />


## Dashboard
<img width="1919" height="1021" alt="Screenshot 2026-05-25 105030" src="https://github.com/user-attachments/assets/b48889e4-df50-4a47-ba33-e509c7225890" />



## Employee Records
<img width="1919" height="1021" alt="Screenshot 2026-05-25 105144" src="https://github.com/user-attachments/assets/761a2719-1f8c-4fe2-baaa-8b492f6a2522" />


## Update Employee
<img width="1917" height="1016" alt="Screenshot 2026-05-25 105301" src="https://github.com/user-attachments/assets/6e6c4bd5-f5d2-45cd-9da4-a9a6399df849" />


---

# Learning Outcomes

Through this project I learned:

- CRUD Operations
- Database Connectivity
- PHP Form Handling
- MySQL Queries
- Authentication System
- Frontend & Backend Integration

---

# Author

Prateek Kumar

---

# Internship Task

Prodigy InfoTech Full Stack Web Development Internship Task-02
