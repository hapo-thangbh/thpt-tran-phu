<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.components.menu', function ($view){
            $post_count = Post::all()->count();
            $view->with('post_count', $post_count);
        });
    }
}
