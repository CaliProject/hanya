<?php

namespace Hanya\Providers;

use Blade;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('zh');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registersConfDirective();
    }

    /**
     * 注册 @conf, 用法: @conf('key')
     */
    private function registersConfDirective()
    {
        Blade::directive('conf', function ($expression) {
            return "<?php echo Conf::callByExpression{$expression} ?>";
        });
    }
}
