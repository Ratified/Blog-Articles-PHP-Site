CREATE DATABASE blogs;
USE blogs;

CREATE TABLE articles(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title TEXT NOT NULL,
    description TEXT NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

-- You can insert your own values to get started!