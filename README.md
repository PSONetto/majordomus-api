# Majordomus API

Majordomus API is a powerful backend built using Laravel and PostgreSQL, providing the necessary endpoints to manage tasks for the Majordomus Tasker web application.

## Features

- **CRUD Operations:** Perform Create, Read, Update, and Delete operations on tasks.
- **Validation:** Validate incoming data to ensure data integrity.
- **Authentication:** Secure your API endpoints with user authentication. (WIP)
- **Error Handling:** Implement robust error handling and response messages. (WIP)

## Technologies Used

- PHP
- Laravel
- Eloquent
- PostgreSQL

## Getting Started

These instructions will help you set up the project on your local machine.

### Prerequisites

- PHP 7.4 or higher
- Composer (https://getcomposer.org/)
- PostgreSQL (https://www.postgresql.org/)

### Installation

1. Clone the repository: `git clone https://github.com/your-username/tasktrackr-api.git`
2. Navigate to the project directory: `cd tasktrackr-api`
3. Install Composer dependencies: `composer install`
4. Copy the `.env.example` file to `.env` and configure your database settings.
5. Generate the application key: `php artisan key:generate`
6. Run migrations to create the database tables: `php artisan migrate`
7. Start the development server: `php artisan serve`

## API Endpoints

### Get All Tasks

- **URL:** `/api/tasks`
- **Method:** GET

### Get Single Task

- **URL:** `/api/tasks/{id}`
- **Method:** GET

### Create Task

- **URL:** `/api/tasks`
- **Method:** POST

### Update Task

- **URL:** `/api/tasks/{id}`
- **Method:** PUT

### Delete Task

- **URL:** `/api/tasks/{id}`
- **Method:** DELETE

## Authentication (WIP) :construction:

Not yet implemented.

## Error Handling (WIP) :construction:

Not yet implemented.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

- Thanks to the open-source community for providing valuable tools and libraries to make this project possible.

## Contact

Linkedin: [Plínio Netto](https://linkedin.com/in/plinio-netto)

---
