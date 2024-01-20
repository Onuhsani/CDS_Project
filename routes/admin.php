<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AgentController;
use App\Http\Controllers\admin\CorpersController;
use App\Http\Controllers\admin\HousesController;
use App\Http\Controllers\admin\ItemsController;
use Illuminate\Support\Facades\Route;

route::get('/admin/home', function(){
    return view('admin.index');
});

route::get('/admin/agents', function(){
    return view('admin.agent');
});

// route::get('/admin/corpers', function(){
//     return view('admin.corpers');
// });

route::get('/admin/corpers', [CorpersController::class, 'index'])->name('corpers.index');
route::get('/admin/agents', [AgentController::class, 'index'])->name('agents.index');
route::get('/admin/administrators', [AdminController::class, 'index'])->name('admins.index');
route::get('/admin/new-admin', [AdminController::class, 'create'])->name('admins.create');
route::get('/admin/houses', [HousesController::class, 'index'])->name('houses.index');
route::get('/admin/items', [ItemsController::class, 'index'])->name('items.index');
route::get('/admin/new-items', [ItemsController::class, 'newItems'])->name('items.newItems');
