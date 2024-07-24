create database studentpreneur;

use studentpreneur;

CREATE TABLE users (
  id int(11) NOT NULL,
  firstName varchar(255) NOT NULL,
  lastName varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  role enum('user','admin') NOT NULL,
  avatar varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `firstName`, `lastName`, `description`, `email`, `password`, `role`, `avatar`) VALUES
(1001, 'Emma', 'Rivera', 'Web Developer', 'Emma@example.com', 'sesame', 'user', 'img/avatar/Emma.jpeg'),
(1002, 'John', 'Doe', 'Research Science', 'John@example.com', 'sesame', 'user', NULL),
(1003, 'Jade', 'Smith', 'Java Developer', 'Ava@example.com', 'sesame', 'user', 'img/avatar/Jade.jpeg'),
(1004, 'Liam', 'Johnson', 'Full Stack Developer', 'liam@example.com', 'sesame', 'user', NULL),
(1005, 'Noah', 'Williams', 'UX Designer', 'noah@example.com', 'sesame', 'user', 'img/avatar/Noah.jpeg'),
(1006, 'Oliver', 'Brown', 'Front End Developer', 'oliver@example.com', 'sesame', 'user', 'img/avatar/Oliver.jpeg'),
(1007, 'Elijah', 'Jones', 'Back End Developer', 'elijah@example.com', 'sesame', 'user', 'img/avatar/Elijah.jpeg'),
(1008, 'William', 'Garcia', 'Data Scientist', 'william@example.com', 'sesame', 'user', NULL),
(1009, 'James', 'Martinez', 'UI/UX Designer', 'james@example.com', 'sesame', 'user', 'img/avatar/James.jpeg'),
(1010, 'Benjamin', 'Rodriguez', 'DevOps Engineer', 'benjamin@example.com', 'sesame', 'user', NULL),
(1011, 'Lucas', 'Martinez', 'Mobile App Developer', 'lucas@example.com', 'sesame', 'user', NULL),
(1012, 'Henry', 'Hernandez', 'AI Specialist', 'henry@example.com', 'sesame', 'user', NULL),
(1013, 'Alexander', 'Lopez', 'Cybersecurity Expert', 'alexander@example.com', 'sesame', 'user', NULL),
(1014, 'Mason', 'Gonzalez', 'Cloud Engineer', 'mason@example.com', 'sesame', 'user', 'img/avatar/Mason.jpeg'),
(1015, 'Michael', 'Wilson', 'Database Administrator', 'michael@example.com', 'sesame', 'user', NULL),
(1016, 'Ethan', 'Anderson', 'Systems Analyst', 'ethan@example.com', 'sesame', 'user', NULL),
(1017, 'Daniel', 'Thomas', 'Network Engineer', 'daniel@example.com', 'sesame', 'user', NULL),
(1018, 'Jacob', 'Taylor', 'Software Engineer', 'jacob@example.com', 'sesame', 'user', NULL),
(1019, 'Logan', 'Moore', 'Blockchain Developer', 'logan@example.com', 'sesame', 'user', NULL),
(1020, 'Jackson', 'Jackson', 'Machine Learning Engineer', 'jackson@example.com', 'sesame', 'user', NULL),
(1021, 'Sebastian', 'Lee', 'UX Researcher', 'sebastian@example.com', 'sesame', 'user', 'img/avatar/Sebastian.jpeg'),
(1022, 'Jack', 'Perez', 'Robotics Engineer', 'jack@example.com', 'sesame', 'user', NULL),
(1023, 'Aiden', 'White', 'Game Developer', 'aiden@example.com', 'sesame', 'user', NULL);


CREATE TABLE investors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    field VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) 
);

INSERT INTO investors (name, field, avatar) VALUES
('Alice Johnson', 'Technology', 'avatar1.jpg'),
('Bob Smith', 'Healthcare', 'avatar2.jpg'),
('Charlie Brown', 'Finance', 'avatar3.jpg');

CREATE TABLE fundings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    amount DECIMAL(10, 2) NOT NULL,
    field VARCHAR(255) NOT NULL,
    deadline DATE NOT NULL
);

INSERT INTO fundings (amount, field, deadline) VALUES
(50000.00, 'Technology', '2024-12-31'),
(75000.00, 'Healthcare', '2024-11-30'),
(100000.00, 'Education', '2025-01-15');

CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    field VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL
);

INSERT INTO suppliers (name, field, country) VALUES
('Supplier One', 'Electronics', 'USA'),
('Supplier Two', 'Medical Supplies', 'Germany'),
('Supplier Three', 'Office Supplies', 'China');


CREATE TABLE lives (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    date DATETIME NOT NULL,
    buttonText VARCHAR(255) NOT NULL
);

INSERT INTO lives (title, image, date, buttonText) VALUES
('Sustainable Fashion Trends', 'img/live1.jpeg', '2024-07-28 10:00:00', 'Join Now'),
('Green Innovations in Textiles', 'img/live2.jpeg', '2024-08-05 14:00:00', 'Register Today'),
('Eco-Friendly Fabric Technologies', 'img/live3.jpeg', '2024-08-12 16:00:00', 'Learn More');


CREATE TABLE workshops (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    date DATETIME NOT NULL,
    buttonText VARCHAR(255) NOT NULL
);

INSERT INTO workshops (title, image, date, buttonText) VALUES
('Fashion Design for Sustainability', 'img/workshop1.jpeg', '2024-07-25 09:00:00', 'Sign Up'),
('Circular Economy in Fashion', 'img/workshop2.jpeg', '2024-08-02 11:00:00', 'Enroll Now'),
('Green Manufacturing Techniques', 'img/workshop3.jpeg', '2024-08-10 13:00:00', 'Reserve Spot');


CREATE TABLE mentors (
    id int auto_increment primary key,
    name varchar(255) not null,
    description varchar(255) not null
);

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    rate DECIMAL(5, 2) NOT NULL
);

INSERT INTO courses (title, description, rate) VALUES
('Introduction to Python', 'Learn the basics of Python programming.', 4.5),
('Advanced JavaScript', 'Deep dive into advanced concepts of JavaScript.', 4.7),
('Data Structures and Algorithms', 'Understand the fundamental data structures and algorithms.', 4.8);

-- Create a user named ts_user
CREATE USER IF NOT EXISTS ts_user@localhost;

-- Grant privileges to the ts_user
GRANT ALL PRIVILEGES
ON studentpreneur.*
TO ts_user@localhost;