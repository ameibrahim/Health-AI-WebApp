# Health AI Chat Bot Project

This is a web-based health AI chat bot project that describe the illnesses and make insect image processing. In this project you can easly create an account and start chatting with ai. I used HTML, CSS, and JavaScript for the front-end development. For the back-end, I utilized JavaScript and PHP. MySQL database is employed for storing user information and chat histories.

## Technologies Used

- **Front-end:** HTML, CSS, JavaScript
- **Back-end:** JavaScript, PHP
- **Database:** MySQL

## Database Setup

To set up the database, you can use the following SQL commands:

```sql
-- Use the useraccounts database
USE useraccounts;

-- Create the chats table
CREATE TABLE IF NOT EXISTS chats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create the messages table
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chat_id INT NOT NULL,
    sender_type ENUM('user', 'assistant') NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (chat_id) REFERENCES chats(id)
);

```

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/MehmetCakirkaya/Health-Ai-Web-App.git
    ```
2. Navigate to the project directory:
    ```bash
    cd Health-Ai-Web-App
    ```
3. Set up your database using the provided SQL commands.
4. Configure your web server to serve the project files.
5. Open the project in your browser.
