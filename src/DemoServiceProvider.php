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

        $reflector = new ReflectionClass(get_class($this));
        $whole_dir = dirname($reflector->getFileName());
        
        $path_dir = '';
        // guess extension => vendor repository
        $vendor_path = base_path('vendor');
        $vendor_match = Str::startsWith($whole_dir, $vendor_path);
        if($vendor_match)
        {
            $path_dir = $vendor_path;
        }
        
        // guess extension => custom repository
        $root_path = base_path();
        $root_match = Str::startsWith($whole_dir, $root_path);
        if($root_match)
        {
            $path_dir = $root_path;
        }
        
        $this->loadViewsFrom($path_dir.'/demoext/resources/views', 'view_extension_demo');

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
