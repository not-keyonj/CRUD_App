# PHP MySQL CRUD Application

A simple user management system with full Create, Read, Update, Delete functionality.

## 🚀 Features
- ✅ Add new users
- ✅ View all users in a table
- ✅ Edit existing users
- ✅ Delete users
- ✅ Responsive design
- ✅ Form validation

## 🔗 Live Demo
**Live URL:** [Your live URL will go here]

## 💻 Technologies Used
- PHP 7.4+
- MySQL
- HTML5/CSS3
- PDO for database connections

## 📦 Installation (Local Setup)
1. Clone the repository:
```bash
   git clone https://github.com/not-keyonj/CRUD_App.git
```
2. Import database:
   - Open phpMyAdmin
   - Create database `crud_db`
   - Import `sql/crud_db.sql`
3. Update `config.php` with your database credentials
4. Run on localhost: `http://localhost/CRUD_App`

## 🗃️ Database Schema
**Table:** `users`
| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary key, auto-increment |
| name | VARCHAR(100) | User's full name |
| email | VARCHAR(100) | User's email address |
| phone | VARCHAR(20) | User's phone number |
| created_at | TIMESTAMP | Record creation time |

## 📁 Project Structure
```
CRUD_App/
├── sql/
│   └── crud_db.sql          # Database export
├── config.php                # Database configuration
├── index.php                 # Main page (Read)
├── create.php                # Add new user (Create)
├── edit.php                  # Update user (Update)
├── delete.php                # Remove user (Delete)
└── README.md                 # This file
```

## 🌐 Deployment
- **Database:** Hosted on InfinityFree
- **Application:** Hosted on InfinityFree

## 👤 Author
Your Name - [GitHub Profile](https://github.com/not-keyonj)

## 📝 Assignment
Created for Database Management Course
Date: November 2025
```

### **Step 5: Save the file**

Press `Ctrl + S` or click File → Save

---

## 🎯 **VISUAL GUIDE:**

1. **In VS Code, it looks like this:**
```
📁 CRUD_App
  📄 README.md          ← Click this file
  📄 index.php
  📄 config.php
  📄 create.php
  📄 edit.php
  📄 delete.php
  📁 sql

