<?php

namespace Gtd\Extension\Demo\Http\Controllers\Site;

use Log;
use Illuminate\Http\Request;
use Gtd\Extension\Demo\Http\Controllers\SiteController;

class ExampleController extends SiteController
{
    
    function __construct()
    {
        parent::__construct();
        
    }
    
    public function test(Request $request)
    {
        $this->title('Demo page');
        $this->setData('test_data','Page test ok!');
        return $this->display('view_extension_demo::site.example.test');
    }
    
}
