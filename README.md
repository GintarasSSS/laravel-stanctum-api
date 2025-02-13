<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Running API

- Clone repository
- ```cd laravel-stanctum-api```
- ```cp .env.example .env```
- ```docker-compose up -d```
- ```docker-compose exec app composer install```
- ```docker-compose exec app php artisan key:generate```
- ```docker-compose exec app php artisan migrate:fresh --seed```

## Api end-points

### Login:

```
curl --location 'http://127.0.0.1/api/login' \
--form 'email="test.user@example.com"' \
--form 'password="password123"'
```

![img.png](img.png)

### Logout

```
curl --location --request POST 'http://127.0.0.1/api/logout' \
--header 'Authorization: Bearer 2|HFAtkxgQeQmCHZPhsL4CGShUSsvJ8XGActVv55ip82cae5d1'
```

![img_2.png](img_2.png)

### Home

```
curl --location 'http://127.0.0.1/api/home' \
--header 'Authorization: Bearer 3|XF78VVtQUSLa2sFlKKsM9tWzG445CAUFwwc0Jccq0af87df8'
```

![img_3.png](img_3.png)
