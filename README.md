## Covid AL API

This is the api for the mobile app [Covid AL](https://github.com/nicolas-costa/covidal_app).    
The api is hosted on heroku.    
Build with:

* Lumen.
* Postgres.

## Instalation

Make sure that your machine meets the framework requirement.

[Lumen requirements](https://lumen.laravel.com/docs/7.x#server-requirements)

Clone the project

```
git clone https://github.com/nicolas-costa/covidal_api.git
```

Enter in the project's folder

```
cd covidal_api
```

Install project dependencies
```
composer install
```

Make a .env file based off of .env.example with the correct information about your environment    
(database and stuff)

Supply a 32bit key to the APP_KEY variable on .env file

You can use this service [keygen.io](https://keygen.io/)
 
Run the migrations

```
php artisan migrate
```

Run the seeders
```
php artisan db:seed
```
Now the project should be ready, run

```
php -S localhost:8000 -t public
```

## Licence
WTFPL

##Credits
Nícolas Costa


