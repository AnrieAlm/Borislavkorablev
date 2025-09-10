CREATE DATABASE portfolio_db;

USE portfolio_db;

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
