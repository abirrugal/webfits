<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Favicon;
use App\Models\Logo;
use App\Models\PageCreate;
use App\Models\Social;
use App\Models\TitleCategory;
use App\Models\WishList;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Auth;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    
        if (Schema::hasTable('categories')) {
            $categories = Category::with('child_category')->where('category_id', null)->whereNull('subcategory_id')->latest()->get();
            view()->share('categories', $categories);
      
        };
        PaginationPaginator::useBootstrap();



        if (Schema::hasTable('logos')) {
            $logo = Logo::select('image')->get();
            view()->share('logo', $logo);
      
        };

        if (Schema::hasTable('favicons')) {
            $favicon = Favicon::select('image')->get();
            view()->share('favicon', $favicon);
      
        };

        if (Schema::hasTable('socials')) {
            $socials = Social::all();
            view()->share('socials', $socials);
      
        };

        if (Schema::hasTable('page_creates')) {
            $page_title = PageCreate::with('page_contents')->get();
            view()->share('page_title', $page_title);
      
        };


        if (Schema::hasTable('contacts')) {
            $contact = Contact::take(1)->get();
            view()->share('contact', $contact);
         
      
        };
    
        // if (Schema::hasTable('wish_lists') && Auth::check()) {
        //     $wish_list_count = WishList::where('user_id', auth()->user()->id )->get();
        //     $count = $wish_list_count->count();
        //     view()->share('count', $count);
      
        // }else{
        //     $count = 0;
        //     view()->share('count', $count);
        // }
        
        

       
    }

 
}
