<?php

use App\Http\Controllers\Banner;
use App\Http\Controllers\ChangeLog;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Social;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\Games;
use App\Http\Controllers\Gallery;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\Main;

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
Route::get('/', [Main::class, 'index'])->name('main');
Route::get('/about', [About::class, 'index'])->name('about_us');
Route::get('/games', [Games::class, 'index']);
Route::get('/gallery', [Gallery::class, 'index']);
Route::get('/contact', [Contacts::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});


Route::middleware(['auth','middleware' => 'is_admin'])->group(function () {

    // <--------------------MAIN-------------------->

    Route::get('/admin_main', [Main::class, 'admin_index'])->name('admin_main');
    Route::get('/admin_main_header/{id}', [Main::class, 'getHeaderById']);
    Route::patch('/admin_main_header_edit/{id}', [Main::class, 'editHeader']);

    Route::get('/admin_main_cards_1/{id}', [Main::class, 'getCards1ById']);
    Route::patch('/admin_main_cards_1_edit/{id}', [Main::class, 'editCards1']);

    Route::get('/admin_main_cards_2/{id}', [Main::class, 'getCards2ById']);
    Route::patch('/admin_main_cards_2_edit/{id}', [Main::class, 'editCards2']);
    ;
    // <--------------------CONTACT-------------------->

    Route::get('/admin_contact', [Contacts::class, 'admin_index'])->name('admin_contact');
    Route::get('/admin_contact_contacts/{id}', [Contacts::class, 'getContactsById']);
    Route::patch('/admin_contact_contacts_edit/{id}', [Contacts::class, 'editContacts']);

    // <--------------------EVENTS-------------------->

    Route::get('/admin_about', [About::class, 'admin_index'])->name('admin_about');
    Route::get('/admin_about_cards/{id}', [About::class, 'getCardsById']);
    Route::patch('/admin_about_cards_edit/{id}', [About::class, 'editCards']);
    Route::get('/admin_about_text/{id}', [About::class, 'getTextById']);
    Route::patch('/admin_about_text_edit/{id}', [About::class, 'editText']);

    // <--------------------GAMES-------------------->

    Route::get('/admin_games', [Games::class, 'admin_index'])->name('admin_games');
    Route::get('/admin_games_header/{id}', [Games::class, 'getHeaderById']);
    Route::patch('/admin_games_header_edit/{id}', [Games::class, 'editHeader']);
    Route::get('/admin_games_cards/{id}', [Games::class, 'getCardsById']);
    Route::patch('/admin_games_cards_edit/{id}', [Games::class, 'editCards']);
    Route::get('/admin_games_cards_create', [Games::class, 'createCardsView']);
    Route::post('/admin_games_cards_create', [Games::class, 'createCards']);
    Route::delete('/admin_games_cards_delete/{id}', [Games::class, 'deleteCards']);

    // <--------------------GALLERY-------------------->

    Route::get('/admin_gallery', [Gallery::class, 'admin_index'])->name('admin_gallery');
    Route::get('/admin_gallery_cards_1/{id}', [Gallery::class, 'getCards1ById']);
    Route::patch('/admin_gallery_cards_1_edit/{id}', [Gallery::class, 'editCards1']);

    Route::get('/admin_gallery_cards_2/{id}', [Gallery::class, 'getCards2ById']);
    Route::patch('/admin_gallery_cards_2_edit/{id}', [Gallery::class, 'editCards2']);

    // <--------------------BANNER-------------------->

    Route::get('/admin_banner', [Banner::class, 'admin_index'])->name('admin_banner');
    Route::get('/admin_banner/{id}', [Banner::class, 'getBannerById']);
    Route::patch('/admin_banner_edit/{id}', [Banner::class, 'editBanner']);

    // <--------------------SOCIAL-------------------->

    Route::get('/admin_socials', [Social::class, 'admin_index'])->name('admin_socials');
    Route::get('/admin_social/{id}', [Social::class, 'getSocialById']);
    Route::patch('/admin_social_edit/{id}', [Social::class, 'editSocial']);
    Route::get('/admin_social_create', [Social::class, 'createSocialView']);
    Route::post('/admin_social_create', [Social::class, 'createSocial']);
    Route::delete('/admin_social_delete/{id}', [Social::class, 'deleteSocial']);

    // <--------------------USERS-------------------->

    Route::get('/admin_users', [Users::class, 'admin_index'])->name('admin_users');
    Route::get('/admin_users/{id}', [Users::class, 'getUserById']);
    Route::patch('/admin_users_edit/{id}', [Users::class, 'editUser']);
    Route::delete('/admin_users_delete/{id}', [Users::class, 'deleteUser']);

    // <--------------------CHANGE LOG-------------------->

    Route::get('/change_log', [ChangeLog::class, 'admin_index'])->name('change_log');
});

require __DIR__.'/auth.php';
