<?php

namespace Hanya\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->passThroughAdminAttr();
        $this->passThroughIndexInfo();
        $this->passThroughFooterAboutInfo();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * 注入到后台的属性
     */
    protected function passThroughAdminAttr()
    {
        view()->composer("admin.home.index", function($view) {
            $social       = \Hanya\Configuration::social();
            $weibo        = $social->weibo;
            $qq           = $social->qq;
            $wechat       = $social->wechat;
            $home         = \Hanya\Configuration::home();
            $link         = $home->link;
            $link_type    = $home->link_type;
            $image        = $home->image;
            $footer_about = $home->footer_about;

            return $view->with(compact('weibo','qq','wechat','link','link_type','image','footer_about'));
        });
        view()->composer("admin.index", function($view) {
            $culture = \Hanya\Culture::count();
            $course  = \Hanya\Course::count();
            $teacher = \Hanya\Teacher::count();
            $train   = \Hanya\Train::count();
            $link    = count(\Hanya\Configuration::link()->captions);
            $count = \Hanya\Culture::all()->sum('count')+\Hanya\Course::all()->sum('count')+\Hanya\Train::all()->sum('count')+\Hanya\Teacher::all()->sum('count');

            return $view->with(compact('culture','course','teacher','train','link','count'));
        });
    }

    /**
     * 注入到底部的信息
     */
    protected function passThroughFooterAboutInfo()
    {
//        view()->composer("layouts.partials.app-footer", function($view) {
//            $links  = \Hanya\Configuration::link()->captions;
//            $social = \Hanya\Configuration::social();
//            $about  = \Hanya\Configuration::home()->footer_about;
//
//            return $view->with(compact('links','social','about'));
//        });
    }

    /**
     * 注入到前端主页的信息
     */
    protected function passThroughIndexInfo()
    {
        view()->composer("index", function($view) {
            $cultures = \Hanya\Culture::orderBy('created_at','desc')->take(6)->get();
            $courses  = \Hanya\Course::orderBy('created_at','desc')->take(10)->get();
            $trains   = \Hanya\Train::orderBy('created_at','desc')->take(8)->get();
            $teachers  = \Hanya\Teacher::orderBy('is_good')->take(3)->get();
            $link = \Hanya\Configuration::home()->link;
            
            return $view->with(compact('cultures','courses','trains','teachers','link'));
        });
        view()->composer("layouts.content", function($view) {
            $trains = \Hanya\Train::orderBy('created_at','desc')->take(10)->get();

            return $view->with(compact('trains'));
        });
        view()->composer("layouts.partials.app-navbar", function($view) {
            $weibo = \Hanya\Configuration::social()->weibo;
            
            return $view->with(compact('weibo'));
        });
        view()->composer("layouts.app", function($view) {
            $image = \Hanya\Configuration::home()->image;

            return $view->with(compact('image'));
        });
    }

}
