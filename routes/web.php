<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Dashboard')->name('admin.dashboard');
        Route::get('/admin/messages', 'ContactMessage')->name('admin.message');
        Route::get('/admin/create-category', 'CreateCategory')->name('admin.createcategory');
        Route::get('/admin/edit-category/{id}', 'EditCategory')->name('admin.editcategory');
        Route::post('/admin/store-category', 'StoreCategory')->name('admin.storecategory');
        Route::post('/admin/update-category', 'UpdateCategory')->name('admin.updatecategory');
        Route::get('/admin/all-category', 'AllCategory')->name('admin.allcategory');
        Route::get('/admin/delete-category/{id}', 'DeleteCategory')->name('admin.deletecategory');
        Route::post('/admin/activate-category', 'ActivateCategory')->name('admin.activatecategory');
        /* ---> with Method GET
        Route::get('/admin/activate-category/{id}', 'ActivateCategory')->name('admin.activatecategory');
         */
        Route::post('/admin/deactivate-category', 'DeactivateCategory')->name('admin.deactivatecategory');
        /* ---> with Method GET
        Route::get('/admin/deactivate-category/{id}', 'DeactivateCategory')->name('admin.deactivatecategory');
         */
        Route::get('/admin/create-sub-category', 'CreateSubCategory')->name('admin.createsubcategory');
        Route::post('/admin/store-sub-category', 'StoreSubCategory')->name('admin.storesubcategory');
        Route::get('/admin/all-sub-category', 'AllSubCategory')->name('admin.allsubcategory');
        Route::get('/admin/edit-subcategory/{id}', 'EditSubCategory')->name('admin.editsubcategory');
        Route::post('/admin/update-subcategory', 'UpdateSubCategory')->name('admin.updatesubcategory');
        Route::get('/admin/delete-subcategory/{id}', 'DeleteSubCategory')->name('admin.deletesubcategory');
        Route::post('/admin/activate-subcategory', 'ActivateSubCategory')->name('admin.activatesubcategory');
        Route::post('/admin/deactivate-subcategory', 'DeactivateSubCategory')->name('admin.deactivatesubcategory');
        Route::get('/admin/create-brands', 'CreateBrands')->name('admin.createbrands');
        Route::post('/admin/store-brand', 'StoreBrand')->name('admin.storebrand');
        Route::get('/admin/edit-brand/{id}', 'EditBrand')->name('admin.editbrand');
        Route::post('/admin/update-brand', 'UpdateBrand')->name('admin.updatebrand');
        Route::get('/admin/delete-brand/{id}', 'DeleteBrand')->name('admin.deletebrand');
        Route::post('/admin/activate-brand', 'ActivateBrand')->name('admin.activatebrand');
        Route::post('/admin/deactivate-brand', 'DeactivateBrand')->name('admin.deactivatebrand');
        Route::get('/admin/all-brands', 'AllBrands')->name('admin.allbrands');
    });
    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/add-product', 'AddProduct')->name('admin.addproduct');
        Route::get('/admin/all-product', 'AllProducts')->name('admin.allproduct');
    });
});

require __DIR__ . '/auth.php';
