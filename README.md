<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel Starter Kit

Laravel Starter Kit is a simple starter kit with necessary packages for every laravel project.

## Installed packages

- Composer:
  - [laravel/laravel](https://github.com/laravel/laravel) [8.49.0]
  - [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) [dev] [3.6.2]
  - [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) [dev] [2.10.0]
  - [phu1237/laravel-tailwind-auth](https://github.com/Phu1237/laravel-tailwind-auth) [dev] [1.0.2]
  - [phu1237/laravel-settings](https://github.com/Phu1237/laravel-settings) [1.1.0]
- Npm / Yarn:
  - [laravel-mix-blade-reload](https://laravel-mix.com/extensions/blade-reload)

## How to use

- Clone this repo or Click on [Use this template](https://github.com/Phu1237/laravel-starter-kit/generate) button then wait for it to complete fork this template to your repo.
- Rename **.env.example** to **.env** and fill in your information.
- Install composer dependencies:

```bash
composer install
```

- Install composer dependencies:

```bash
npm install
```

- Set the application key:

```bash
php artisan key:generate
```

- Run the database migrations:

```bash
php artisan migrate
```

- **(Optional)** Seed the database with records:

```bash
php artisan db:seed
```

- Install authentication:

```bash
php artisan auth:install
```

- Serve the application on the PHP development server:

```bash
php artisan serve
```

After that, go to [http://127.0.0.1:8000](http://127.0.0.1:8000) to see your application.

- Watch blade changes and reload with "laravel-mix-blade-reload"

```bash
npm run hot
```

**Notes:**

- If you don't update composer dependencies, run the commands below  to generate ide-helper files:

```bash
php artisan ide-helper:generate

php artisan ide-helper:models --nowrite

php artisan ide-helper:meta
```

## How to update

- First, set this repo as your upstream repo by running the command below:

```bash
composer run kit:install
```

- Run the command below and merge your changes with the new update:

```bash
composer run kit:update
```

- If you want to remove this repo from your repo, run the command below:

```bash
composer run kit:uninstall
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
