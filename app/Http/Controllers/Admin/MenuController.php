<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\MenuCreateFormRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function create(){
        echo 123;
        return view('admin.menu.add',[
            'title' => 'Thêm danh mục mới'
        ]);
    }

    public function store(MenuCreateFormRequest $request){
        dd($request -> input());
    }
}
