# Laravel Project Readme

Welcome to the Laravel project! This document will guide you through the process of setting up and running the project on your local machine.

## Getting Started

### Prerequisites

Before you begin, make sure you have the following software installed on your machine:

- [PHP](https://www.php.net/) (>= 7.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (LTS version recommended)
- [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/) (for managing frontend assets)
- [MySQL](https://www.mysql.com/) or [SQLite](https://www.sqlite.org/) (or any other database supported by Laravel)

### Clone the Repository

```bash
git clone https://github.com/zaeem9233/ikonic-task-backend
```bash

### Change Directory
```bash
cd ikonic-task-backend
```bash

### Update Packages
```bash
composer update
```bash

### Migrate Database with seeders
```bash
php artisan migrate --seed
```bash

### Start project accessable http:127.0.0.1:8000/api/v1/login
```bash
php artisan serve
```bash