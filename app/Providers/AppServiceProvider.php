<?php

namespace App\Providers;

use App\Models\AboutSection;
use App\Models\MainInfo;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $menu = SiteMenu::where('active', 1)->get();
        // $languages = DB::table('languages')->get();
        // View::share('menu', $menu);
        // View::share('languages', $languages);
        $socialMedia = SocialMedia::all();
        $main_info = MainInfo::first();
        $aboutSection = AboutSection::first();
        View::share('aboutSection', $aboutSection);
        View::share('socialMedia', $socialMedia);
        View::share('main_info', $main_info);
        Schema::defaultStringLength(191);
    }
}
