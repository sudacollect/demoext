<?php


namespace Gtd\Extension\Demo;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Event;
use ReflectionClass;
use Illuminate\Support\Str;

class DemoServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(Router $router,\App\Http\Kernel $kernel)
    {
        $extensions = app('suda_extension')->installedExtensions();
        if(isset($extensions['demoext']))
        {
            $this->loadViewsFrom($extensions['demoext']['path'].'/resources/views', 'view_extension_demo');    
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }
    
}
