CREATE DATABASE portfolio_db1;

USE portfolio_db1;

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    description TEXT,
    image VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO projects (title, category, description, image) VALUES
('Beer Label Design', 'packaging', 'Modern craft beer label concept', 'beer1.png'),
('Branding Mockup', 'digital', 'Brand identity for brewery', 'beer2.png'),
('Packaging Concept', 'packaging', 'Bottle and can packaging design', 'beer3.png'),
('Social Media Ad', 'marketing', 'Instagram ad campaign', 'beer4.png');


USE portfolio_db1;

CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

USE portfolio_db1;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert admin user (password: 'password' - change this!)
INSERT INTO users (username, password) VALUES 
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');