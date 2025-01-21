<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\Market\StoreController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Content\CommentController as ContentCommentController;
use App\Http\Controllers\Admin\Market\GalleryController;
use App\Http\Controllers\Admin\Market\PaymentController;
use App\Http\Controllers\Admin\Market\ProductController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Content\CategoryController as ContentCategoryController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\DiscountController;
use App\Http\Controllers\Admin\Market\PropertyController;


Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');

    // Showcase -> Category

    Route::prefix('market')->namespace('Market')->group(function(){


        Route::prefix('category')->group(function(){
            
            Route::get('/',[CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/create',[CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store',[CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}',[CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/delete/{id}',[CategoryController::class, 'delete'])->name('admin.market.category.delete');

        });



        Route::prefix('brand')->group(function(){

            Route::get('/',[BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/create',[BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store',[BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}',[BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}',[BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::delete('/delete/{id}',[BrandController::class, 'delete'])->name('admin.market.brand.delete');


        });


        Route::prefix('comment')->group(function(){

            Route::get('/', [CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/show',[CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::post('/store',[CommentController::class, 'store'])->name('admin.market.comment.store');
            Route::get('/edit/{id}',[CommentController::class, 'edit'])->name('admin.market.comment.edit');
            Route::put('/update/{id}',[CommentController::class, 'update'])->name('admin.market.comment.update');
            Route::delete('/delete/{id}',[CommentController::class, 'delete'])->name('admin.market.comment.delete');
        
        });

        Route::prefix('delivery')->group(function(){

            Route::get('/', [DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/create',[DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store',[DeliveryController::class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}',[DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update/{id}',[DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/delete/{id}',[DeliveryController::class, 'delete'])->name('admin.market.delivery.delete');
        

        });


        Route::prefix('discount')->group(function(){

            Route::get('/copan', [DiscountController::class, 'copan'])->name('admin.market.discount.copan');
            Route::get('/create',[DiscountController::class, 'copanCreate'])->name('admin.market.discount.create');
            Route::get('/common-discount',[DiscountController::class, 'commonDiscount'])->name('admin.market.discount.commonDiscount');
            Route::get('/common-discount/create',[DiscountController::class, 'commonDiscountCreate'])->name('admin.market.discount.commonDiscountCreate');
            Route::get('/amazingsale',[DiscountController::class, 'amazingSale'])->name('admin.market.discount.amazingsale');
            Route::get('/amazingsale/create',[DiscountController::class, 'amazingsaleCreate'])->name('admin.market.discount.amazingsaleCreate');
        

        });


        Route::prefix('order')->group(function(){

            Route::get('/', [OrderController::class, 'index'])->name('admin.market.order.index');
            Route::get('/new-order',[OrderController::class, 'newOrder'])->name('admin.market.order.newOrder');
            Route::get('/sending',[OrderController::class, 'sending'])->name('admin.market.order.sending');
            Route::get('/unpaid',[OrderController::class, 'unpaid'])->name('admin.market.order.unpaid');
            Route::get('/canceled',[OrderController::class, 'canceled'])->name('admin.market.order.canceled');
            Route::get('/returned',[OrderController::class, 'returned'])->name('admin.market.order.returned');
            Route::get('/show',[OrderController::class, 'show'])->name('admin.market.order.show');
            Route::get('/change-send-status',[OrderController::class, 'changeSendStatus'])->name('admin.market.order.changeSendStatus');
            Route::get('/change-order-status
            ',[OrderController::class, 'changeOrderStatus'])->name('admin.market.order.changeOrderStatus');
            Route::get('/cancel-order',[OrderController::class, 'cancelOrder'])->name('admin.market.order.cancelOrder');

        });

        
        Route::prefix('payment')->group(function(){

            Route::get('/', [PaymentController::class, 'index'])->name('admin.market.payment.index');
            Route::get('/online', [PaymentController::class, 'online'])->name('admin.market.payment.online');
            Route::get('/offline', [PaymentController::class, 'offline'])->name('admin.market.payment.offline');
            Route::get('/attendance', [PaymentController::class, 'attendance'])->name('admin.market.payment.attendance');
            Route::get('/confirm', [PaymentController::class, 'confirm'])->name('admin.market.payment.confirm');


        });

        Route::prefix('product')->group(function(){

            Route::get('/', [ProductController::class, 'index'])->name('admin.market.product.index');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.market.product.create');
            
            Route::post('/store', [ProductController::class, 'store'])->name('admin.market.product.store');
            
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.market.product.edit');
            
            Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.market.product.update');
            Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.market.product.destroy');
            Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.market.gallery.index');
            Route::post('/gallery/store', [GalleryController::class, 'store'])->name('admin.market.gallery.index');
            Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'destroy'])->name('admin.market.gallery.index');
            

        });


        Route::prefix('property')->group(function(){
            
            Route::get('/', [PropertyController::class, 'index'])->name('admin.market.property.index');
            Route::get('/create',[PropertyController::class, 'create'])->name('admin.market.property.create');
            Route::post('/store',[PropertyController::class, 'store'])->name('admin.market.property.store');
            Route::get('/edit/{id}',[PropertyController::class, 'edit'])->name('admin.market.property.edit');
            Route::put('/update/{id}',[PropertyController::class, 'update'])->name('admin.market.property.update');
            Route::delete('/delete/{id}',[PropertyController::class, 'delete'])->name('admin.market.property.delete');

        });


        Route::prefix('store')->group(function(){

            Route::get('/', [StoreController::class, 'index'])->name('admin.market.store.index');
            Route::get('/add-to-store', [StoreController::class, 'addToStore'])->name('admin.market.store.add-to-store');
            Route::post('/store', [StoreController::class, 'store'])->name('admin.market.store.store');
            Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('admin.market.store.edit');
            Route::put('/update/{id}', [StoreController::class, 'update'])->name('admin.market.store.update');
            Route::delete('/delete/{id}', [StoreController::class, 'delete'])->name('admin.market.store.delete');

        });


    });


    Route::prefix('content')->namespace('Content')->group(function(){


        Route::prefix('category')->group(function(){
            Route::get('/', [ContentCategoryController::class, 'index'])->name('admin.content.category.index');
            Route::get('/craete', [ContentCategoryController::class, 'create'])->name('admin.content.category.create');
            Route::post('/store', [ContentCategoryController::class, 'store'])->name('admin.content.category.store');
            Route::get('/edit/{id}', [ContentCategoryController::class, 'edit'])->name('admin.content.category.edit');
            Route::put('/update/{id}', [ContentCategoryController::class, 'update'])->name('admin.content.category.update');
            Route::delete('/delete/{id}', [ContentCategoryController::class, 'delete'])->name('admin.content.category.delete');
        });

        Route::prefix('comment')->group(function(){
            Route::get('/', [ContentCommentController::class, 'index'])->name('admin.content.comment.index');
            Route::get('/show', [ContentCommentController::class, 'show'])->name('admin.content.comment.show');
            Route::post('/store', [ContentCommentController::class, 'store'])->name('admin.content.comment.store');
            Route::get('/edit/{id}', [ContentCommentController::class, 'edit'])->name('admin.content.comment.edit');
            Route::put('/update/{id}', [ContentCommentController::class, 'update'])->name('admin.content.comment.update');
            Route::delete('/delete/{id}', [ContentCommentController::class, 'delete'])->name('admin.content.comment.delete');
        });

    });

});