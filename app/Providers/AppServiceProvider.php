<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Component as LivewireComponent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->isLocal()) {
            LivewireComponent::macro('consoleLog', function (...$data) {
                $this->dispatchBrowserEvent('livewire-debug', json_encode($data));
            });
        }
    }
}
