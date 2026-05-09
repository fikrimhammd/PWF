<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Str;
use Dedoc\Scramble\Scramble;
use Illuminate\Routing\Route;

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
        // Konfigurasi Scramble untuk dokumentasi API
        Scramble::configure()
            ->routes(function (Route $route) {
                return Str::startsWith($route->uri, 'api/');
            });

        // Menambahkan tombol Authorize (Gembok) di Scramble UI
        Scramble::extendOpenApi(function (\Dedoc\Scramble\Support\Generator\OpenApi $openApi) {
            $openApi->secure(
                \Dedoc\Scramble\Support\Generator\SecurityScheme::http('bearer')
            );
        });

        // 👇 TAMBAHKAN KODE INI DI SINI (setelah Scramble config)
        Gate::define('viewApiDocs', function () {
            return true;
        });

        // Gate definitions yang sudah ada
        Gate::define('export-product', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('manage-product', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('manage-category', function (User $user) {
            return $user->role === 'admin';
        });
    }
}