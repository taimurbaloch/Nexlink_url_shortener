# 🔗 NexLink - Smart URL Shortener

NexLink is a lightweight and user-friendly URL Shortener built using Core PHP, MySQL, Bootstrap 5, HTML, and CSS. It allows users to convert long URLs into short, shareable links while providing an admin panel to manage all generated URLs efficiently.

---

## 📌 Project Overview

NexLink is designed to simplify long web addresses by generating unique short URLs that are easy to share and remember. The project follows a clean and responsive interface with a secure admin management system.

---

## ✨ Features

### 👤 User Features

- Generate unique short URLs from long URLs
- Instant URL shortening
- Clickable short URL that redirects to the original website
- Responsive and modern user interface
- Clean Bootstrap-based design

### 👨‍💼 Admin Features

- Secure Admin Login
- Dashboard with live statistics
- View all generated URLs
- Delete unwanted URLs
- Protected URL management panel

---

## 📊 Dashboard

The dashboard provides live project statistics including:

- Total URLs Generated
- Today's Generated URLs
- Manage URLs Button (Admin Only)

---

## 🛠️ Technologies Used

- PHP (Core PHP)
- MySQL
- HTML5
- CSS3
- Bootstrap 5
- Bootstrap Icons
- XAMPP (Apache & MySQL)

---

## 📂 Project Structure

```
NexLink/
│
├── admin1/
│   ├── login.php
│   ├── dashboard.php
│   ├── urls.php
│   └── logout.php
│
├── include/
│   ├── header.php
│   ├── navbar.php
│   ├── admin-navbar.php
│   └── footer.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
├── redirect.php
├── index.php
├── about.php
└── README.md
```

---

## ⚙️ Installation

1. Clone the repository

```
git clone https://github.com/yourusername/nexlink.git
```

2. Move the project folder into XAMPP's `htdocs` directory.

3. Start **Apache** and **MySQL** using XAMPP.

4. Create a MySQL database:

```
url_shortener
```

5. Import the SQL file into the database.

6. Open your browser:

```
http://localhost/NexLink/
```

---

## 🔐 Default Admin Login

Username

```
admin
```

Password

```
admin123
```

(Change these credentials after deployment.)

---

## 🚀 Future Improvements

- QR Code Generation
- Copy to Clipboard Button
- URL Analytics
- Click Counter
- Custom Short URLs
- Search & Filter URLs
- Expiry Date for Links
- User Authentication
- REST API Support

---

## 🎯 Project Objectives

- Learn Core PHP Development
- Practice MySQL CRUD Operations
- Implement Session-Based Authentication
- Build a Responsive Dashboard
- Understand URL Redirection Logic

---

## 📸 Screenshots

Add screenshots of:

- Home Page
- Dashboard
- Admin Login
- Manage URLs
- URL Generation

---

## 👨‍💻 Author

**Taimur Baloch**

---

## 📄 License

This project is created for educational purposes and portfolio demonstration.
