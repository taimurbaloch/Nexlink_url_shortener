-- ===================================================
-- NexLink URL Shortener Database
-- Author: Taimur Baloch
-- ===================================================

CREATE DATABASE IF NOT EXISTS url_shortener;
USE url_shortener;

-- ==========================
-- Admin Table
-- ==========================

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

INSERT INTO admin (username, password)
VALUES ('admin', 'admin123');

-- ==========================
-- URL Table
-- ==========================

CREATE TABLE url (
    id INT AUTO_INCREMENT PRIMARY KEY,
    long_url TEXT NOT NULL,
    short_code VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
