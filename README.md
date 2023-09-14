# Livewire Autocomplete Demo

This is demonstration of how you can use [Livewire Autocomplete](https://github.com/joshhanley/livewire-autocomplete) in a Laravel app.

## Upgrading

For the Livewire V2 version, see the `1.x` branch.

This demo has been updated for Laravel 10 and Livewire 3.
Please note, that `legacy_model_binding` has been set to `true` for this demo to work, **but it's not recommended to use legacy model binding in V3**.
Instead use arrays or collections of primitive types (like strings) instead of models.

## How to use

There is a component already setup called `main` and it can be accessed on the base route (`/`).

It is stored at `app/Http/Livewire/Main.php` and `resources/views/livewire/main.blade.php`.

## How to install

1. Clone the `main` branch of this repo
2. Run `composer install`
3. Copy and configure `.env`
4. Setup and configure a database
5. Run `php artian migrate --seed`
6. Open site in browser and go to `/`
