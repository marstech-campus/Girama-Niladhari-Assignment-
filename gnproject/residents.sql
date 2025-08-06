Create database
-----------------
CREATE DATABASE IF NOT EXISTS resident_database;
USE resident_database;

Create table
-----------------

CREATE TABLE residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    dob DATE NOT NULL,
    nic VARCHAR(12) UNIQUE NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL,
    occupation VARCHAR(50),
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    registered_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Insert records
------------------

INSERT INTO residents (full_name, dob, nic, address, phone, email, occupation, gender)
VALUES
('John Doe', '1985-03-15', '850315123V', '123 Main Street', '0771234567', 'john.doe@example.com', 'Engineer', 'Male'),
('Jane Smith', '1990-07-22', '900722456V', '456 Oak Avenue', '0772345678', 'jane.smith@example.com', 'Teacher', 'Female'),
('Michael Johnson', '1978-11-02', '781102789V', '789 Pine Road', '0773456789', 'michael.j@example.com', 'Doctor', 'Male'),
('Emily Davis', '1995-04-12', '950412321V', '321 Maple Street', '0774567890', 'emily.davis@example.com', 'Nurse', 'Female'),
('Robert Brown', '1982-09-30', '820930654V', '654 Elm Lane', '0775678901', 'robert.b@example.com', 'Lawyer', 'Male'),
('Olivia Wilson', '1998-01-18', '980118987V', '987 Cedar Drive', '0776789012', 'olivia.w@example.com', 'Designer', 'Female'),
('William Taylor', '1975-06-05', '750605321V', '321 Birch Street', '0777890123', 'will.taylor@example.com', 'Architect', 'Male'),
('Sophia Martinez', '2000-10-27', '001027852V', '852 Willow Way', '0778901234', 'sophia.m@example.com', 'Student', 'Female'),
('Daniel Anderson', '1988-12-09', '881209963V', '963 Poplar Blvd', '0779012345', 'daniel.a@example.com', 'Chef', 'Male'),
('Avery Thomas', '1993-05-17', '930517147V', '147 Chestnut Court', '0770123456', 'avery.t@example.com', 'Photographer', 'Other');
