# Laravel Task Manager

This is a simple task management application built with Laravel. It allows you to create, read, update, and delete tasks.

## Features

- Create new tasks with a title, description, and long description
- View a list of all tasks
- Mark tasks as completed or not completed
- Edit existing tasks
- Delete tasks

## Installation

1. Clone the repository:
```bash
git clone https://github.com/your-username/laravel-task-manager.git
```

2. Install dependencies:
```bash
cd laravel-task-manager
composer install
```

3. Create a copy of the .env.example file and rename it to .env. Then, update the environment variables with your local configuration details.

4. Generate an application key:
```bash
php artisan key:generate
```

5. Run database migrations:
```bash
php artisan migrate
``` 

6. Start the development server:   
```bash
php artisan serve
```
The application should now be accessible at http://localhost:8000.
