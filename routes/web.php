<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CashfreePaymentController;
use App\Http\Controllers\RatingController;

Route::get('/', [CashfreePaymentController::class, 'index'])->name('index');
Route::get('cashfree/payments/create', [CashfreePaymentController::class, 'create'])->name('callback');
Route::get('cashfree/payments/pay', [CashfreePaymentController::class, 'pay'])->name('pay');
Route::post('cashfree/payments/store', [CashfreePaymentController::class, 'store'])->name('store');
Route::any('cashfree/payments/success', [CashfreePaymentController::class, 'success'])->name('success');
Route::any('payment-success', [CashfreePaymentController::class, 'payment_success'])->name('payment-success');


Route::get('site/download/app', [CashfreePaymentController::class, 'download_app'])->name('download-app');
Route::get('site/download/color-pdf', [CashfreePaymentController::class, 'download_color_pdf'])->name('download-color-pdf');
Route::get('site/download/demo-ac-pdf', [CashfreePaymentController::class, 'download_demo_ac_pdf'])->name('download-demo-ac-pdf');
Route::get('site/download/gift-pdf', [CashfreePaymentController::class, 'download_gift_pdf'])->name('download-gift-pdf');


Route::get('terms-and-conditions', [CashfreePaymentController::class, 'terms_and_conditions'])->name('terms-and-conditions');

Route::get('get-current-ratings', [RatingController::class, 'get_current_ratings'])->name('get-current-ratings');


//============== Admin Routes =================================
use App\Http\Controllers\Admin\{
    AuthController,
    Dashboard,
    ShowPayments,
};

//====================== Admin Panel Routes =======================


//======================= Admin Login Routes =====================
Route::controller(AuthController::class)->group( function () {
    Route::get("/login","login")->name("login");
    Route::get("/register-user","register_user");
    Route::post("/changep","change_pass");
    Route::post("/checkuser","checkuser");
    Route::get("/logout","logout");
    Route::get("/changepass","change_password");
});


Route::middleware('auth')->group(function () {
    
    Route::prefix('admin')->group(function () {

        //======================= Admin Dashboard Routes ======================
        Route::get("/dashboard",[Dashboard::class,"dashboard"])->name('dashboard');

        Route::controller(ShowPayments::class)->group(function () {
            Route::prefix('payments')->group(function () {
                Route::get("/",'index')->name('payment.index');
                Route::get("requests-payments",'requests_payments')->name('payment.requests-payments');
                Route::get("/{id}/approve-payment",'approve_payment')->name('payment.approve-payment');
                Route::get("/{id}/delete-payment",'delete_payment')->name('payment.delete-payment');
            });
        });
    });
});


Route::any('khalo/digital/content/download', [ShowPayments::class, 'download_khalo_digital_content'])->name('download-khalo-digital-content');