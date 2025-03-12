<?php

namespace App\Providers;

use App\Models\Post;
use App\Observers\PostOberver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Support\ServiceProvider;

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
        Post::observe(PostOberver::class);
    }
}
