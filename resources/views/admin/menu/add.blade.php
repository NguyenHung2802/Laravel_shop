<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\MenuCreateFormRequest;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create(){
        return view('admin.menu.add',[
            'title' => 'Thêm danh mục mới'
        ]);
    }

    public function store(MenuCreateFormRequest $request){
        dd($request -> input());
    }
}
