## Livewire Playground

This is just a basic repository with Laravel, Livewire, Alpine, and Tailwind installed for quick testing purposes.

## How to use

There is a component already setup called main and it can be accessed on the base route (`/`).

It is stored at `app/Http/Livewire/Main.php` and `resources/views/livewire/main.blade.php`.

Create any other components/ models/ code that is necessary to setup the example.

## How to install

1. Clone the `master` branch of this repo
2. Run `composer install`
3. Copy any code into `main` (see above)
4. Open site in browser and go to `/`

## Details

Laravel 8 is installed.

Livewire `^2.3` is installed and configured in `layouts/app.blade.php`.

Tailwind `^2.0` and Alpine `^2.0` are both pulled in via CDN in `layouts/app.blade.php`.
