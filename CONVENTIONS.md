# Project conventions
## General guidelines
- Always use Laravel's built-in structures (Eloquent, Blade, Service Container, Farcades)
- No spaghetti code: separate responsibilities (Controllers, Models, Services)

## code languages & frameworks
-  backend: PHP
-  frontend: css, tailwind
-  packages: blade, livewire

## versions
- Laravel: 8
- PHP: 8
- MySQL: 8
- Apache: 2.4 || Nginx 1.24


## code style
- models, functions: camelCase
- tabels and lists: plural
- classnames: PascalCase
- constants: UPPER_CASE

## folders & files
- controllers in `app/Http/Controllers/`
- models in `app/models`
- migrations in `YYYY_MM_DD_create_users_table.php`
- views in `resources/views`, use subfolders per feature (`users/index.blade.php`)

## controllers
- one controller per resource example `UserController`
- RESTful methods: `index`, `show`, `create`, `store`, `update`, `destroy`

## route
- use Route::resource for standard CRUD 

## validation
- use request classes for example (php artisan make:request)

## database
- tablenames or columns, forgein_keys: plural or snake_case
- database: mysql version 8.0

## file- and mapstructure
- `/public` -> only public accesible content(index.php, css, imgs)
- `/src` -> PHP classes
- `/views` -> templates, CRUD-UI, homepage

## branches
- `main` → stabele production
- `dev` → developarea

## blade template
- components in `resources/views/components`
- reusable layouts in `resources/views/layours`
- use `@foreach` and `@if`
- pictures are used with `asset()`
