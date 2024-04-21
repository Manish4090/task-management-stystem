# task-management-stystem
# Installation
# Backend Setup:
1. Clone the repository.
2. Navigate to the backend directory.
3. Run the following commands:
-- composer install
-- php artisan migrate --seed
-- php artisan serve

# Frontend Setup:
1. Navigate to the frontend directory.
2. Run the following commands:

-- npm install
-- npm start

# Backend Details
The backend is built with Laravel and provides RESTful APIs for managing tasks. It includes endpoints for CRUD operations on tasks, user authentication, and more. Additionally, the backend implements security measures such as XSS (Cross-Site Scripting) protection through middleware. It also utilizes event listeners in conjunction with job queues for handling asynchronous tasks efficiently.

# Frontend Details
The frontend is built with React.js and provides a user-friendly interface for interacting with tasks. It allows users to view, create, edit, and delete tasks.

#  Technologies Used
Laravel
React.js
MySQL
Bootstrap
