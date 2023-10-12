<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('products/search', [ProductController::class, 'search'])->name('product.search');
Route::get('allProducts', [ProductController::class, 'index'])->name('products.allProducts');
Route::get('allProducts/arrange', [ProductController::class, 'arrange'])->name('arrange.allProducts');
Route::post('/carts/update', [CartController::class, 'updateAll'])->name('carts.updateAll');
Route::post('/orders/update', [OrderController::class, 'changeStatus'])->name('orders.changeStatus');
Route::post('/orders_user/update', [OrderController::class, 'changeStatusUser'])->name('orders.changeStatusUser');
Route::get('/', [HomeController::class,'checkUserType']);

Route::get('/admin/dashboard',function(){
    return view('welcome');
})->name('admin.dashboard');

Route::get('carts',function(){
    return view('carts.index');
});
Route::get('orders',function(){
    return view('orders.index');
});


Route::get('/index',function(){
    $products = Product::paginate(8);
    $categories = Category::all();
    return view('products.index',compact('products','categories'));
})->name('user.dashboard');

Route::get('/categories/{id}/products', [ProductController::class, 'showCateByID'])->name('categories.products');
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', ProfileController::class);
Route::resource('carts', CartController::class);
Route::resource('orders', OrderController::class);
Route::resource('comments', CommentController::class);
Route::get('/ManagerProduct', function () {
    return view('products.ManagerProduct');
});


Route::get('/ManagerProduct', [ProductController::class, 'manager'])->name('products.ManagerProduct');
Route::get('/admin/logout', [UserController::class, 'destroy'])->name('admin.logout');
Route::delete('/users/delete/{id}', [ProfileController::class, 'destroy'])->name('users.destroy');
Route::get('/user/profile', [UserController::class, 'show'])->name('user.show');
Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('password.change');
Route::get('/ManagerUser', [UserController::class, 'index'])->name('admin.ManagerUser');
Route::post('/change-password', [UserController::class, 'changePassword'])->name('change.password');
Route::get('/ManagerOrder', [OrderController::class, 'manageOrders'])->name('orders.ManagerOrder');

require __DIR__.'/auth.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
