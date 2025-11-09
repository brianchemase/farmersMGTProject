<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\FarmerPaymentController;

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

Route::get('/', function () {
    return view('welcome');
});




Route::prefix('admins')->group(function () {
// main dashboard
Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::prefix('farmers')->group(function () {
    Route::get('records', [FarmerController::class, 'getAllFarmers'])->name('getAllFarmers');// all farmers
    Route::get('register', [FarmerController::class, 'farmersregister'])->name('registerfarmer');
    Route::post('savefarmer', [FarmerController::class, 'savefarmer'])->name('farmers.store');
    Route::get('/{id}/edit', [FarmerController::class, 'editfarmer'])->name('farmers.edit');
    Route::any('/{id}', [FarmerController::class, 'updatefarmer'])->name('farmers.update');
    Route::get('/{id}', [FarmerController::class, 'viewfarmer'])->name('farmers.show');


    Route::get('/farmer/{farmer}/payment/form', [FarmerPaymentController::class, 'paymentregistrationform'])->name('farmer.payment.form');

    Route::post('/farmer/payment/bank', [FarmerPaymentController::class, 'storePaymentDetails'])->name('farmer.payment.store');

    // Route::get('{id}', [FarmerController::class, 'show'])->name('showfarmer');
    // Route::get('search', [FarmerController::class, 'search'])->name('search.farmer');
    // Route::post('{id}/feedback', [FarmerController::class, 'submitFeedback'])->name('submitFeedback');
});


Route::prefix('seeds')->group(function () {
    Route::get('inventory', [SeedController::class, 'inventory']);
    Route::post('distribute', [SeedController::class, 'distribute']);
    Route::get('performance', [SeedController::class, 'trackPerformance']);
});

Route::prefix('cultivation')->group(function () {
    Route::post('planting', [CultivationController::class, 'recordPlanting']);
    Route::get('growth/{farmId}', [CultivationController::class, 'trackGrowth']);
    Route::post('input', [CultivationController::class, 'recordInput']);
    Route::post('visit', [FieldVisitController::class, 'logVisit']);
});

Route::prefix('harvest')->group(function () {
    Route::post('schedule', [HarvestController::class, 'schedule']);
    Route::post('collect', [HarvestController::class, 'collect']);
    Route::get('receipt/{batchId}', [HarvestController::class, 'generateReceipt']);
});

Route::prefix('processing')->group(function () {
    Route::post('drying', [ProcessingController::class, 'recordDrying']);
    Route::post('crushing', [ProcessingController::class, 'recordCrushing']);
    Route::get('inventory', [InventoryController::class, 'getInventory']);
});

Route::prefix('quality')->group(function () {
    Route::post('test', [QualityController::class, 'recordTest']);
    Route::get('trace/{batchId}', [QualityController::class, 'traceBatch']);
});

Route::prefix('finance')->group(function () {
    Route::post('pay', [PaymentController::class, 'processPayment']);
    Route::get('history/{farmerId}', [PaymentController::class, 'paymentHistory']);
    Route::get('analytics', [FinanceController::class, 'analytics']);
});

Route::prefix('export')->group(function () {
    Route::post('order', [ExportController::class, 'createOrder']);
    Route::get('documents/{orderId}', [ExportController::class, 'generateDocuments']);
    Route::get('logistics/{orderId}', [ExportController::class, 'trackLogistics']);
});

Route::prefix('reports')->group(function () {
    Route::get('dashboard', [ReportController::class, 'dashboard']);
    Route::get('custom', [ReportController::class, 'customReport']);
});

Route::prefix('training')->group(function () {
    Route::post('schedule', [TrainingController::class, 'scheduleSession']);
    Route::get('materials', [TrainingController::class, 'getMaterials']);
});

Route::prefix('equipment')->group(function () {
    Route::get('inventory', [EquipmentController::class, 'inventory']);
    Route::post('maintenance', [EquipmentController::class, 'logMaintenance']);
});

});