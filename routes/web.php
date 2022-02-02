<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// cmcm
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('paypal', 'Profile\PaymentController@payWithpaypal')->name('pay');

/* Home */
Route::get('/', 'HomeController@index')->name('home');

/* Design Route */
Route::get('/design-quote', 'Design\DesignController@create')->name('design.create');
Route::post('/design-quote', 'Design\DesignController@store')->name('design.store');
Route::get('/design-quote/{slug}', 'Design\DesignController@show_guest');

/* Connect Route */
Route::get('project-cost-estimates', 'Connect\ConnectController@create');
Route::post('project-cost-estimates', 'Connect\ConnectController@store')->name('connect.store');
Route::get('project-cost-estimates/{slug}', 'Connect\ConnectController@show_guest');
Route::get('connect-service', 'Connect\ConnectController@connect_service');
Route::get('apply-quick-register', 'Connect\ConnectController@doRedirect');

Route::post('connect-service', 'Connect\ConnectController@connect_service_store')->name('connect_service.store');

/* Other Pages */
Route::get('architectural-design-planning', 'OtherPages\OtherPagesController@architectural_design_planning');
Route::get('technical-design-construction', 'OtherPages\OtherPagesController@technical_design_construction');
Route::get('measured-surveys', 'OtherPages\OtherPagesController@measured_surveys');
Route::get('proposed-design', 'OtherPages\OtherPagesController@proposed_design');
Route::get('planning', 'OtherPages\OtherPagesController@planning');
Route::get('building-regulations', 'OtherPages\OtherPagesController@building_regulations');
Route::get('new-builds', 'OtherPages\OtherPagesController@new_builds');
Route::get('find-a-builder-for-your-project', 'OtherPages\OtherPagesController@find_a_builder_for_your_project');
Route::post('find-a-builder-for-your-project', 'OtherPages\OtherPagesController@QuickQuoteStore')->name('QuickQuote.Store');
Route::post('apply-quick-register', 'OtherPages\OtherPagesController@QuickRegisterStore')->name('QuickRegister.Store');
Route::get('find-a-structural-engineer-for-your-project', 'OtherPages\OtherPagesController@find_a_structural_engineer_for_your_project');
Route::get('find-a-cctv-drainage-surveyor-for-your-project', 'OtherPages\OtherPagesController@find_a_cctv_drainage_surveyor_for_your_project');
Route::get('find-a-party-wall-surveyor-for-your-project', 'OtherPages\OtherPagesController@find_a_party_wall_surveyor_for_your_project');
Route::get('find-an-approved-inspector-for-your-project', 'OtherPages\OtherPagesController@find_an_approved_inspector_for_your_project');
Route::get('terms-of-use', 'OtherPages\OtherPagesController@termsOfUse')->name('terms-of-use');
Route::get('privacy-policy', 'OtherPages\OtherPagesController@privacyPolicy')->name('privacy-policy');
Route::get('become-udex-tradesperson', 'OtherPages\OtherPagesController@becomeUdexTradesperson')->name('become-udex-tradesperson');
Route::post('become-udex-tradesperson', 'OtherPages\OtherPagesController@becomeUdexTradespersonStore')->name('becomeUdexTradesperson.Store');

/* Only User Logged In */
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'profile'], function () {
        Route::get('your-account', 'Profile\ProfileController@youraccount');

        /* Message */
        Route::get('messages', 'Profile\ProfileMessageController@messages');
        Route::post('messages-store', 'Profile\ProfileMessageController@store')->name('message.store');

        /* Architectionary */
        Route::get('architectionary', 'Profile\ProfileArchitectionaryController@show_list');

        /* Project */
        Route::get('project', 'Profile\ProfileProjectsController@show_list');
        Route::get('project/create', 'Profile\ProfileProjectsController@create');
        Route::post('project/store', 'Profile\ProfileProjectsController@store')->name('project.store');

        /* Design */
        Route::get('design', 'Design\DesignController@profile_design_list');
        Route::get('design/{id}', 'Design\DesignController@show');

        /* Connect */
        Route::get('connect', 'Connect\ConnectController@profile_connect_list');

        /* Connect */
        Route::get('payments', 'Profile\PaymentController@index');
        Route::get('payments/{id}', 'Profile\PaymentController@show')->name('details');
        Route::get('status', 'Profile\PaymentController@getPaymentStatus')->name('status');

        /* Payments */
        Route::get('payments', 'Profile\PaymentController@index');
        Route::get('payments/{id}', 'Profile\PaymentController@show')->name('details');
        Route::get('payments/transfer/{id}', 'Profile\PaymentController@ByTransfer')->name('ByTransfer');
        Route::post('payments/transfer/{id}', 'Profile\PaymentController@ByTransferSubmit')->name('ByTransfer.submit');
        Route::get('status', 'Profile\PaymentController@getPaymentStatus')->name('status');

        /* File Library */
        Route::get('file-library', 'Profile\FileLibraryController@index');
    });

    /* Dashboard */
    Route::group(['middleware' => ['can:isManager']], function () {
        /* Dashboard Route */
        Route::group(['prefix' => 'dashboard'], function () {
            /* Dashboard */
            Route::get('/', 'Dashboard\DashboardController@index');

            /* Projects Controller */
            Route::resource('projects', 'Dashboard\Projects\ProjectsController');
            Route::post('projects/destroy', 'Dashboard\Projects\ProjectsController@destroy')->name('projects.destroy');

            /* Users Controller */
            Route::resource('users', 'Dashboard\Users\UsersController');
            Route::post('users/destroy', 'Dashboard\Users\UsersController@destroy')->name('users.destroy');

            /* Tradeperson Controller */
            Route::resource('trade-person', 'Dashboard\TradePersonController');


            /* Architectionary */
            Route::resource('architectionary', 'Dashboard\Architectionary\ArchitectionaryController');
            Route::post('architectionary/destroy', 'Dashboard\Architectionary\ArchitectionaryController@destroy')->name('architectionary.destroy');

            /* Messages */
            Route::resource('messages', 'Dashboard\Messages\MessagesController');

            /* Design */
            Route::get('design', 'Design\DesignController@index');
            Route::get('design/edit/{id}', 'Design\DesignController@edit')->name('design.edit');
            Route::post('design/edit/{id}', 'Design\DesignController@edit')->name('design.update');
            Route::get('design-options', 'Design\DesignOptionsController@options')->name('DesignOptions');
            Route::post('design-options', 'Design\DesignOptionsController@options_update')->name('DesignOptions.update');

            /* Connect */
            Route::get('connect', 'Connect\ConnectController@index')->name('Connect');
            Route::get('connect/edit/{id}', 'Connect\ConnectController@edit')->name('ConnectEdit');
            Route::put('connect/update/{id}', 'Connect\ConnectController@update')->name('ConnectUpdate');
            Route::post('connect/destroy', 'Connect\ConnectController@destroy');
            Route::get('connect-options', 'Connect\ConnectController@options')->name('ConnectOptions');
            Route::post('connect-options', 'Connect\ConnectController@options_update')->name('ConnectOptions.update');

            /* Excel Importer */
            Route::post('design-excel-importer', 'Design\DesignOptionsController@DesignExcelUpdate')->name('DesignExcelUpload');
            Route::post('connect-excel-importer', 'Connect\ConnectController@ConnectExcelUpdate')->name('ConnectExcelUpload');

            /* Pages */
            Route::resource('pages', 'OtherPages\OtherPagesController');
            Route::post('pages/destroy', 'OtherPages\OtherPagesController@destroy')->name('page.destroy');

            /* Payments */
            Route::resource('payments', 'Dashboard\Payments\PaymentsController');
            Route::post('payments/destroy', 'Dashboard\Payments\PaymentsController@destroy')->name('payments.destroy');

            /* Whats News */
            Route::resource('whats-news', 'Dashboard\WhatsNews\WhatsNewsController');
            Route::post('whats-news/destroy', 'Dashboard\WhatsNews\WhatsNewsController@destroy')->name('WhatsNews.destroy');

            /* CKEditor Image Upload */
            Route::post('ckeditor/upload/{path}', 'Dashboard\CKEditorController@upload')->name('ckeditor.image-upload');
        });
    });
});

Auth::routes();

/* Clear Cache */
Route::get('/clear-cache', function () {
//    Artisan::call('migrate');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    return 'DONE';
});

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('{slug}', 'OtherPages\OtherPagesController@show');
