<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; // <-- WAJIB TAMBAHKAN BARIS INI!

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Baris 23 Anda yang sempat eror:
        Paginator::useBootstrapFive(); 
        
        // Atau jika template PERADI Anda menggunakan Bootstrap 4, gunakan:
        // Paginator::useBootstrapFour();
    }
}