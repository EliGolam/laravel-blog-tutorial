@extends('layouts.app', [
    'title' => 'Laravel Cheatsheets | by EliGolam',
    'titleHeading' => 'Welcome to Laravel!',
    ])

@section('content')
    <h2>Laravel (latest)</h2>

    <h3>Setup</h3>
    <p id="setup-prerequisites"><strong>Prerequisites</strong></p>
    <ul aria-labelledby="setup-prerequisites">
        <li>PHP: php -v</li>
        <li>Composer: composer -V</li>
        <li>Node: node -v</li>
        <li>NPM</li>
    </ul>

    <h4 id="setup-new-project">Create New Project</h4>
    <ul aria-labelledby="setup-new-project">
        <li> Method 1
            <ul>
                <li>composer create-project laravel/laravel example-app</li>
            </ul>
        </li>
        <li> Method 2
            <ul>
                <li>composer global require laravel/installer</li>
                <li>laravel new example-app</li>
            </ul>
        </li>
    </ul>

    <h4 id="setup-clone-repo">Clone Project from remote repository</h4>
    <ol aria-labelledby="setup-clone-repo">
        <li>composer install</li>
        <li>cp .env.example .env (copy .env.example as .env file)</li>
        <li>php artisan key:generate</li>
        <li>Create necessary databases</li>
        <li>Add .env credentials</li>
        <li>php artisan config:cache</li>
        <li>Migrate and Seed database (php artisan migrate, php artisan db:seed --class=UsersTableSeeder)</li>
        <li>npm i</li>
        <li>php artisan serve (or php -S localhost:8000 -t public)</li>
        <li>npm run watch</li>
    </ol>
@endsection
