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
  avatar varchar(255) DEFAULT NULL,
  country VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  skills VARCHAR(255) NOT NULL,
  field VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users (id, firstName, lastName, description, email, password, role, avatar, country, city, skills, field) VALUES
(1001, 'Emma', 'Rivera', 'Web Developer', 'Emma@example.com', 'sesame', 'user', 'img/avatar/Emma.jpeg', 'USA', 'New York', 'Web Development | UI/UX Design | Usability Testing | Prototyping | Data Science', 'IT'),
(1002, 'John', 'Doe', 'Research Science', 'John@example.com', 'sesame', 'user', NULL, 'USA', 'San Francisco', 'Research | Data Analysis', 'IT'),
(1003, 'Jade', 'Smith', 'Java Developer', 'Jade@example.com', 'sesame', 'user', 'img/avatar/Jade.jpeg', 'USA', 'Los Angeles', 'Java Development | Spring Framework', 'IT'),
(1004, 'Liam', 'Johnson', 'Full Stack Developer', 'liam@example.com', 'sesame', 'user', NULL, 'Canada', 'Toronto', 'Full Stack Development | MERN Stack', 'IT'),
(1005, 'Noah', 'Williams', 'UX Designer', 'noah@example.com', 'sesame', 'user', 'img/avatar/Noah.jpeg', 'UK', 'London', 'UI/UX Design | Prototyping', 'Finance'),
(1006, 'Oliver', 'Brown', 'Front End Developer', 'oliver@example.com', 'sesame', 'user', 'img/avatar/Oliver.jpeg', 'USA', 'Boston', 'Front End Development | React.js', 'IT'),
(1007, 'Elijah', 'Jones', 'Back End Developer', 'elijah@example.com', 'sesame', 'user', 'img/avatar/Elijah.jpeg', 'USA', 'Chicago', 'Back End Development | Node.js', 'Finance'),
(1008, 'William', 'Garcia', 'Data Scientist', 'william@example.com', 'sesame', 'user', NULL, 'Spain', 'Madrid', 'Data Science | Machine Learning', 'IT'),
(1009, 'James', 'Martinez', 'UI/UX Designer', 'james@example.com', 'sesame', 'user', 'img/avatar/James.jpeg', 'Mexico', 'Mexico City', 'UI/UX Design | User Research', 'IT'),
(1010, 'Benjamin', 'Rodriguez', 'DevOps Engineer', 'benjamin@example.com', 'sesame', 'user', NULL, 'USA', 'Seattle', 'DevOps | CI/CD', 'Finance'),
(1011, 'Lucas', 'Martinez', 'Mobile App Developer', 'lucas@example.com', 'sesame', 'user', NULL, 'Brazil', 'São Paulo', 'Mobile Development | Android', 'IT'),
(1012, 'Henry', 'Hernandez', 'AI Specialist', 'henry@example.com', 'sesame', 'user', NULL, 'USA', 'San Jose', 'AI | Machine Learning', 'IT'),
(1013, 'Alexander', 'Lopez', 'Cybersecurity Expert', 'alexander@example.com', 'sesame', 'user', NULL, 'USA', 'Austin', 'Cybersecurity | Network Security', 'IT'),
(1014, 'Mason', 'Gonzalez', 'Cloud Engineer', 'mason@example.com', 'sesame', 'user', 'img/avatar/Mason.jpeg', 'USA', 'San Diego', 'Cloud Computing | AWS', 'Finance'),
(1015, 'Michael', 'Wilson', 'Database Administrator', 'michael@example.com', 'sesame', 'user', NULL, 'USA', 'Denver', 'Database Management | SQL', 'IT'),
(1016, 'Ethan', 'Anderson', 'Systems Analyst', 'ethan@example.com', 'sesame', 'user', NULL, 'USA', 'Miami', 'Systems Analysis | IT Consulting', 'Finance'),
(1017, 'Daniel', 'Thomas', 'Network Engineer', 'daniel@example.com', 'sesame', 'user', NULL, 'Australia', 'Sydney', 'Network Engineering | Cisco', 'IT'),
(1018, 'Jacob', 'Taylor', 'Software Engineer', 'jacob@example.com', 'sesame', 'user', NULL, 'USA', 'Houston', 'Software Engineering | Agile', 'IT'),
(1019, 'Logan', 'Moore', 'Blockchain Developer', 'logan@example.com', 'sesame', 'user', NULL, 'Canada', 'Vancouver', 'Blockchain Development | Solidity', 'IT'),
(1020, 'Jackson', 'Jackson', 'Machine Learning Engineer', 'jackson@example.com', 'sesame', 'user', NULL, 'USA', 'Atlanta', 'Machine Learning | Data Science', 'IT'),
(1021, 'Sebastian', 'Lee', 'UX Researcher', 'sebastian@example.com', 'sesame', 'user', 'img/avatar/Sebastian.jpeg', 'USA', 'San Francisco', 'UX Research | Usability Testing', 'IT'),
(1022, 'Jack', 'Perez', 'Robotics Engineer', 'jack@example.com', 'sesame', 'user', NULL, 'USA', 'Las Vegas', 'Robotics | Automation', 'IT'),
(1023, 'Aiden', 'White', 'Game Developer', 'aiden@example.com', 'sesame', 'user', NULL, 'USA', 'Orlando', 'Game Development | Unity', 'IT');

CREATE TABLE investors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    field VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) 
);

INSERT INTO investors (name, field, avatar) VALUES
('Alice Johnson', 'Technology', 'img/avatar/Oliver.jpeg'),
('Bob Smith', 'Healthcare', 'img/avatar/Mason.jpeg'),
('Charlie Brown', 'Finance', 'img/avatar/Elijah.jpeg');

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
('Sustainable Fashion Trends', 'img/live1.jpg', '2024-07-28 10:00:00', 'Join Now'),
('Green Innovations in Textiles', 'img/live2.jpg', '2024-08-05 14:00:00', 'Register Today'),
('Eco-Friendly Fabric Technologies', 'img/live3.jpg', '2024-08-12 16:00:00', 'Learn More');


CREATE TABLE workshops (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    date DATETIME NOT NULL,
    buttonText VARCHAR(255) NOT NULL
);

INSERT INTO workshops (title, image, date, buttonText) VALUES
('Fashion Design for Sustainability', 'img/event-workshop1.jpeg', '2024-07-25 09:00:00', 'Sign Up'),
('Circular Economy in Fashion', 'img/event-workshop2.jpeg', '2024-08-02 11:00:00', 'Enroll Now'),
('Green Manufacturing Techniques', 'img/event-workshop3.jpeg', '2024-08-10 13:00:00', 'Reserve Spot');


CREATE TABLE mentors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    avatar VARCHAR(255),
    description TEXT
);


INSERT INTO mentors (name, avatar, description) VALUES
('Alice Johnson', 'img/mentor1.png', 'Expert in digital marketing with over 10 years of experience.'),
('Bob Lee', 'img/mentor2.jpg', 'Software engineer with a background in artificial intelligence and machine learning.'),
('Charlie Davis', 'img/mentor3.png', 'Entrepreneur and mentor specializing in startup growth and strategy.'),
('Michael Brown', 'img/mentor4.png', 'Founder of several tech startups, specializes in product development and design thinking.');

CREATE TABLE courses (
    id int auto_increment primary key,
    title varchar(255) not null,
    description varchar(255) not null,
    rate decimal(2,0) not null
);
INSERT INTO courses (title, description, rate) VALUES
('Introduction to Python', 'Learn the basics of Python programming.', 4.50),
('Advanced JavaScript', 'Deep dive into advanced concepts of JavaScript.', 4.70),
('Data Structures and Algorithms', 'Data Structures and Algorithms.', 4.80);


-- Create a user named ts_user
CREATE USER IF NOT EXISTS ts_user@localhost;

-- Grant privileges to the ts_user
GRANT ALL PRIVILEGES
ON studentpreneur.*
TO ts_user@localhost;