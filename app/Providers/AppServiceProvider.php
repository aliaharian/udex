<?php

namespace App\Providers;

use App\Model\WhatsNews;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('layouts.profile.master', function($view) {
        $this->whats_news = WhatsNews::where('status', 'published')->orderBy('created_at', 'asc')->get()->all();
            $view->with(['WhatsNews' => $this->whats_news]);
        });
    }
}
