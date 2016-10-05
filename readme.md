# laravel-crud

## Installation

```bash
composer install
```

## Configuration

```bash
cp .env.example .env
```

Edit .env like so:

```bash
vim .env
```

```bash
APP_ENV=local
APP_KEY=base64:WFZJ5ZGagvUqFai8mxbgwvvdHCmdf0CKucxwwtxizFU=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=sqlite

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_KEY=
PUSHER_SECRET=
```

## Running Development Server

```bash
cd laravel-crud/
php artisan serve --port=8080
```

## Available Routes

http://localhost:8080/register
	
	User registration page

http://localhost:8080/login

	User login

http://loalhost:8080/user/all

	List all the registered users



