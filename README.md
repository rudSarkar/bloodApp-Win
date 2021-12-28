### Blood Application

> Final version of the Blood Application


### Blood Application Installation of Docker

Update composer

```console
$ docker-compose exec app composer update
```

Install composer dependencies

```console
$ docker-compose exec app composer install
```

Generate unique application key

```console
$ docker-compose exec app php artisan key:generate
```

Reference: [How To Containerize a Laravel Application for Development with Docker Compose](https://www.digitalocean.com/community/tutorials/how-to-containerize-a-laravel-application-for-development-with-docker-compose-on-ubuntu-18-04)