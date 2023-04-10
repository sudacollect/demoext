<?php

namespace Gtd\Extension\Demo\Http\Controllers;

use Illuminate\Http\Request;

use Gtd\Suda\Http\Controllers\SiteController as SiteCtl;


class SiteController extends SiteCtl
{
    public $extension_view = 'demo';    //定义view目录
    
    public function index(Request $request)
    {
        $this->title('Example');

        return $this->display('index');
    }
    
}
