<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PlacesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


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

// This route for redirect to the overall pages
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/services', 'services')->name('services');
    Route::get('/destinations', 'destinations')->name('destinations');
    Route::get('/packages', 'packages')->name('packages')->middleware('auth');
    Route::get('/booking', 'booking')->name('booking')->middleware('auth');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/singleBlog', 'singleBlog')->name('singleBlog');

    // Change these routes to use POST method for form submissions
    Route::post('/contact/store', 'store')->name('contact.store');
    Route::post('/booking/store', 'B')->name('booking.B');
    
    
});
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');



Route::controller(ThemeController::class)->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login.store');
    Route::get('/register', 'register')->name('register.store');

    // Change these routes to use POST method for form submissions
    Route::post('/register/store', 'registerStore')->name('register.store');
    Route::post('/login/store', 'loginStore')->name('login.store');
});


// This route for redirect to the Categories
Route::controller(CategoriesController::class)->name('categories.')->group(function () {
    Route::get('/adventure', 'adventure')->name('adventure');
    Route::get('/beach', 'beach')->name('beach');
    Route::get('/cultural', 'cultural')->name('cultural');
    Route::get('/historical', 'historical')->name('historical');
    Route::get('/religious', 'religious')->name('religious');
});

// This route for redirect to the places
Route::controller(PlacesController::class)->name('places.')->group(function () {
    // Ensure there are no conflicting routes here
    Route::get('/wadimujib', 'wadimujib')->name('wadimujib');
    Route::get('/ajlonforest', 'ajlonforest')->name('ajlonforest');
    Route::get('/danareserve', 'danareserve')->name('danareserve');
    Route::get('/dibeenforest', 'dibeenforest')->name('dibeenforest');
    // Beach
    Route::get('/aqaba', 'aqaba')->name('aqaba');
    Route::get('/deadsea', 'deadsea')->name('deadsea');
    // Cultural
    Route::get('/ajloncastle', 'ajloncastle')->name('ajloncastle');
    Route::get('/ammancitadel', 'ammancitadel')->name('ammancitadel');
    Route::get('/ovalplaza', 'ovalplaza')->name('ovalplaza');
    Route::get('/shobakcastle', 'shobakcastle')->name('shobakcastle');
    // Historical
    Route::get('/karakcastle', 'karakcastle')->name('karakcastle');
    Route::get('/petra', 'petra')->name('petra');
    Route::get('/qasramra', 'qasramra')->name('qasramra');
    Route::get('/ummqais', 'ummqais')->name('ummqais');
    // Religious
    Route::get('/almaghtas', 'almaghtas')->name('almaghtas');
    Route::get('/baptismsite', 'baptismsite')->name('baptismsite');
    Route::get('/mountnebo', 'mountnebo')->name('mountnebo');
    Route::get('/nabimusasite', 'nabimusasite')->name('nabimusasite');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
