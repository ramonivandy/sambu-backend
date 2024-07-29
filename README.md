
# Sambu Fullstack Test - Backend

The stack that I use for backend is Laravel with MySQL Database. Authentication using Laravel Sanctum.




## Run Locally

Clone the project

```bash
  git clone sambu-backend
```

Go to the project directory

```bash
  cd sambu-backend
```

Install dependencies

```bash
  composer install
```

Setting up the .env database

```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_sambu
    DB_USERNAME=foo
    DB_PASSWORD=bar
```

Run database migration

```bash
  php artisan migrate:fresh
```

Start the server (run with port 8001)

```bash
  php artisan serve --port=8001
```

