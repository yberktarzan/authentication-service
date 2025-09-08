# Authentication Service

A lightweight authentication microservice built with Laravel API.

## Overview

This is a dedicated authentication microservice that provides user authentication and authorization capabilities through RESTful APIs. It's designed to be stateless and scalable for microservices architecture.

## Features

- User registration and login
- JWT/Sanctum token-based authentication
- Password reset functionality
- User profile management
- Role-based access control (RBAC)
- API-only responses (JSON)

## Tech Stack

- **Framework**: Laravel 12 (API only)
- **Database**: MySQL
- **Cache**: Redis
- **Queue**: Redis
- **Authentication**: Laravel Sanctum/JWT

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```
3. Configure environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Set up database and run migrations:
   ```bash
   php artisan migrate
   ```

## Configuration

- Configure database settings in `.env`
- Set up Redis for caching and queues
- Configure authentication tokens (JWT/Sanctum)

## API Endpoints

All endpoints will be available under `/api/` prefix:

- `POST /api/register` - User registration
- `POST /api/login` - User login
- `POST /api/logout` - User logout
- `GET /api/user` - Get authenticated user
- `POST /api/password/reset` - Password reset

## Running the Service

```bash
php artisan serve
```

The service will be available at `http://localhost:8000`

## Development

This is an API-only microservice. No frontend views or assets are included.

## License

MIT License

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
