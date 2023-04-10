<?php

 
namespace Gtd\Extension\Demo\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Gtd\Extension\Demo\Http\Controllers\AdminController;


class HomeController extends AdminController{
    
    public $self_url = 'extension/demo/index';
    
    public function index(Request $request,$param='')
    {
        
        $this->title('Demo');
        
        //权限
        $this->gate('demo_menu.index');
        //菜单
        $this->setMenu('demo_menu','index');

        return $this->display('view_extension_demo::admin.index');
    }
    
    public function help()
    {
        
        $this->title('Help');
        
        $this->setMenu('demo_menu.help');

        return $this->display('view_extension_demo::admin.help');
    }
    
    
}

