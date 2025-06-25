<?php
use App\Models\Product;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;


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



// admin work

Route::get('/add_product',[AdminController::class,'add_product']);




// upload product
Route::post('/upload_product',[AdminController::class,'upload_product']);

// add product route
Route::post('/inserted',[AdminController::class,'product']);

// all product route
Route::get('/all_product',[AdminController::class,'all_product']);

// delete route
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);


// edit route
Route::get('/edit_product/{id}',[AdminController::class,'edit_product']);
Route::post('/update_product/{id}',[AdminController::class,'update_product']);




// empolyee all product route 
Route::get('/all_product',[EmployeeController::class,'all_product']);

Route::get('/', function () {
    $product = Product::all();
    return view('index',compact('product'));
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


// admin work
 Route::get('/admindashboard', function () {
    return view('Admin.index');
});


Route::get('/', function () {
    return view('index'); 
})->name('home');


// employee work
Route::get('/employeedashboard', function () {
    return view('Employee.index');
});


Route::get('/', function () {
    $product = Product::all();
    return view('index', compact('product'));
});


// feedback route
Route::post('/contact', [FeedbackController::class, 'store'])->name('contact.store');


Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [CartController::class, 'updateCart'])->name('update.cart');
Route::delete('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [CartController::class, 'placeOrder'])->name('place.order');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role == 'customer')
        {
            $product = Product::all();
            return view('index',compact('product'));
        }
        elseif(Auth::user()->role == 'employee'){
            return view('Employee.index');
        }
        else{
            return view('Admin.index');
        }
        
    })->name('dashboard');
});