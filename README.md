# Laravel Project Readme

Welcome to the Laravel project! This document will guide you through the process of setting up and running the project on your local machine.

## Getting Started

### Prerequisites

Before you begin, make sure you have the following software installed on your machine:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) or [SQLite](https://www.sqlite.org/) (or any other database supported by Laravel)

### Clone the Repository

```
git clone https://github.com/zaeem9233/ikonic-task-backend
```

### Change Directory
```
cd ikonic-task-backend
```

### Update Packages
```
composer update
```

### Migrate Database with seeders
```
php artisan migrate --seed
```

### Start project accessable http://127.0.0.1:8000/api/v1/login
```
php artisan serve
```