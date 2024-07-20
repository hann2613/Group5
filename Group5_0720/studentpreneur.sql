create database studentpreneur;

use studentpreneur;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
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

create table lives (
    id int auto_increment primary key,
    title varchar(255) not null,
    date date not null
);

CREATE TABLE workshops (
    id int auto_increment primary key,
    title varchar(255) not null,
    date date not null
);

CREATE TABLE mentors (
    id int auto_increment primary key,
    name varchar(255) not null,
    description varchar(255) not null
);

CREATE TABLE courses (
    id int auto_increment primary key,
    title varchar(255) not null,
    description varchar(255) not null,
    rate decimal(2,0) not null
);

INSERT INTO courses VALUES 
(2001, 'Entrepreneurial Ventures', ,),
(2002, 'Ecommerce Fundamentals', ,),
(3003, 'Solution Creation', ,);

-- Create a user named ts_user
CREATE USER IF NOT EXISTS ts_user@localhost;

-- Grant privileges to the ts_user
GRANT ALL PRIVILEGES
ON studentpreneur.*
TO ts_user@localhost;