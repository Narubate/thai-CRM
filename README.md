# thai-CRM

run this step:
1. git clone https://github.com/thai-laravel/thai-CRM.git
2. cd thai-CRM/
3. php artisan cache:clear
4. composer install
5. mkdir storage
6. mkdir storage/framework
7. mkdir storage/framework/sessions
8. mkdir storage/framework/views

9. create file ".env" and pass this value:
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mongodb
DB_HOST=mongo
DB_PORT=27017
DB_DATABASE=thaicrm
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

10. run this command "php artisan key:generate"

11. and run "php artisan serve"

enjoy!!.

---------------------------------------------------------
# Keep fork up to date

### 1. Clone your fork:

    git clone git@github.com:YOUR-USERNAME/thai-CRM.git

### 2. Add remote from original repository in your forked repository: 

    cd into/cloned/fork-repo
    git remote add upstream git://github.com/thai-laravel/thai-CRM.git
    git fetch upstream

### 3. Updating your fork from original repo to keep up with their changes:

    git pull upstream master

---------------------------------------------------------
# Work with Laradock

### 1. path structure:

    project folder
    |
    |--thai-CRM
    |
    |--laradock

### 2. clone laradock:

    git clone https://github.com/Laradock/laradock.git

### 3. create .env:

    cd laradock
    cp env-example .env

### 4. config path thai-CRM project:

    APPLICATION=../thai-CRM

### 5. Run your containers:

    docker-compose up -d nginx mongo php-fpm

---------------------------------------------------------

# note 
add config .env of thai-CRM
```
DB_CONNECTION=mongodb
DB_HOST=mongo
DB_PORT=27017
DB_DATABASE=thaicrm
DB_USERNAME=
DB_PASSWORD=
```

# This for run error with can't get something in storage/
```
php artisan cache:clear 
chmod -R 777 storage/
composer dump-autoload
```
---------------------------------------------------------
