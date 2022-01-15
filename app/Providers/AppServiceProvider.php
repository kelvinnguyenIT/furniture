<?php

namespace App\Providers;

use App\Models\Cms;
use App\Models\Configuration;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Post;
use App\Models\Slide;
use App\Observers\CheckoutObserver;
use App\Observers\CmsObserver;
use App\Observers\ContactObserver;
use App\Observers\CustomerObserver;
use App\Observers\PostObserver;
use App\Observers\SlideObserver;
use App\View\Components\ActionComponent;
use App\View\Components\DropifyComponent;
use App\View\Components\Error;
use App\View\Components\InputComponent;
use App\View\Components\SummernoteComponent;
use App\View\Components\TextareaComponent;
use Illuminate\Support\Facades\Blade;
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
        Schema::defaultStringLength(191);

        Blade::include('home.includes.src', 'src');
        Blade::include('home.includes.cms', 'cms');
        Blade::component('input', InputComponent::class);
        Blade::component('textarea', TextareaComponent::class);
        Blade::component('summernote', SummernoteComponent::class);
        Blade::component('dropify', DropifyComponent::class);
        Blade::component('action', ActionComponent::class);
        Blade::component('error', Error::class);

        Cms::observe(CmsObserver::class);
        Customer::observe(CustomerObserver::class);
        Post::observe(PostObserver::class);
        Slide::observe(SlideObserver::class);

        Contact::observe(ContactObserver::class);
        Order::observe(CheckoutObserver::class);
        try {
            View::share('configuration', Configuration::all()->pluck('value', 'key'));
        } catch (\Exception $e)
        {
            // NOP
        }
    }
}
