<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel Starter Kit

Laravel Starter Kit is a simple starter kit with necessary packages for every laravel project.

## Installed dependencies

- Composer:
  - [laravel/laravel](https://github.com/laravel/laravel) [9.x.x]
  - [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) [dev] [3.x.x]
  - [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) [dev] [2.x.x]
- Npm / Yarn:
  - [Nothing here yet]

## How to use

- Clone this repo or Click on [Use this template](https://github.com/Phu1237/laravel-starter-kit/generate) button then wait for the process to completely fork this template to your repo.
- Rename **.env.example** to **.env** and fill in it with your information.
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

- Serve the application on the PHP development server:

```bash
php artisan serve
```

After that, go to [http://127.0.0.1:8000](http://127.0.0.1:8000) to see your application.

## Useful

- Configurations:
  - DEBUGBAR_ENABLED: Enable or disable debugbar manual (dev)
  - DB_DATABASE: Database name
  - DB_USERNAME: Database username
  - DB_PASSWORD: Database password

- Commands to generate ide-helper files:

```bash
composer dump-ide
```

- Command to export laravel error blades

```bash
php artisan vendor:publish --tag=laravel-errors
```

- Command to export laravel email blades

```bash
php artisan vendor:publish --tag=laravel-mail
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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
