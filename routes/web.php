
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\RoleController;
use App\Http\Controllers\Admin\Notify\SMSController;
use App\Http\Controllers\Admin\Content\FAQController;
use App\Http\Controllers\Admin\Content\MenuController;
use App\Http\Controllers\Admin\Content\PageController;
use App\Http\Controllers\Admin\Content\PostController;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\Market\StoreController;
use App\Http\Controllers\Admin\Notify\EmailController;
use App\Http\Controllers\Admin\Ticket\TicketController;
use App\Http\Controllers\Admin\User\CustomerController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\GalleryController;
use App\Http\Controllers\Admin\Market\PaymentController;
use App\Http\Controllers\Admin\Market\ProductController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\DiscountController;
use App\Http\Controllers\Admin\Market\PropertyController;
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\User\PermissionController;
use App\Http\Controllers\Admin\Content\CommentController as ContentCommentController;
use App\Http\Controllers\Admin\Content\CategoryController as ContentCategoryController;


Route::prefix('admin')->group(function () {

    /**
     * مسیر اصلی داشبورد مدیریت
     */
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');

    /**
     * گروه مسیرهای ماژول Market (بخش فروش)
     */
    Route::prefix('market')->group(function () {

        /**
         * مدیریت دسته بندی محصولات
         */
        Route::prefix('category')->group(function () {

            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.market.category.delete');
        });

      
        /**
         * مدیریت برندها
         */
        Route::prefix('brand')->group(function () {

            Route::get('/', [BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/create', [BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}', [BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::delete('/delete/{id}', [BrandController::class, 'delete'])->name('admin.market.brand.delete');
        });

        /**
         * مدیریت نظرات محصولات
         */
        Route::prefix('comment')->group(function () {

            Route::get('/', [CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/show', [CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::post('/store', [CommentController::class, 'store'])->name('admin.market.comment.store');
            Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('admin.market.comment.edit');
            Route::put('/update/{id}', [CommentController::class, 'update'])->name('admin.market.comment.update');
            Route::delete('/delete/{id}', [CommentController::class, 'delete'])->name('admin.market.comment.delete');
        });

        /**
         * مدیریت روش های ارسال
         */
        Route::prefix('delivery')->group(function () {

            Route::get('/', [DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/create', [DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store', [DeliveryController::class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}', [DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update/{id}', [DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/delete/{id}', [DeliveryController::class, 'delete'])->name('admin.market.delivery.delete');
        });

        /**
         * مدیریت تخفیف ها و پیشنهادها
         */
        Route::prefix('discount')->group(function () {

            Route::get('/copan', [DiscountController::class, 'copan'])->name('admin.market.discount.copan');
            Route::get('/create', [DiscountController::class, 'copanCreate'])->name('admin.market.discount.create');
            Route::get('/common-discount', [DiscountController::class, 'commonDiscount'])->name('admin.market.discount.commonDiscount');
            Route::get('/common-discount/create', [DiscountController::class, 'commonDiscountCreate'])->name('admin.market.discount.commonDiscountCreate');
            Route::get('/amazingsale', [DiscountController::class, 'amazingSale'])->name('admin.market.discount.amazingsale');
            Route::get('/amazingsale/create', [DiscountController::class, 'amazingsaleCreate'])->name('admin.market.discount.amazingsaleCreate');
        });

        /**
         * مدیریت سفارشات
         */
        Route::prefix('order')->group(function () {

            Route::get('/', [OrderController::class, 'index'])->name('admin.market.order.index');
            Route::get('/new-order', [OrderController::class, 'newOrder'])->name('admin.market.order.newOrder');
            Route::get('/sending', [OrderController::class, 'sending'])->name('admin.market.order.sending');
            Route::get('/unpaid', [OrderController::class, 'unpaid'])->name('admin.market.order.unpaid');
            Route::get('/canceled', [OrderController::class, 'canceled'])->name('admin.market.order.canceled');
            Route::get('/returned', [OrderController::class, 'returned'])->name('admin.market.order.returned');
            Route::get('/show', [OrderController::class, 'show'])->name('admin.market.order.show');
            Route::get('/change-send-status', [OrderController::class, 'changeSendStatus'])->name('admin.market.order.changeSendStatus');
            Route::get('/change-order-status
            ', [OrderController::class, 'changeOrderStatus'])->name('admin.market.order.changeOrderStatus');
            Route::get('/cancel-order', [OrderController::class, 'cancelOrder'])->name('admin.market.order.cancelOrder');
        });

        /**
         * مدیریت پرداخت ها
         */
        Route::prefix('payment')->group(function () {

            Route::get('/', [PaymentController::class, 'index'])->name('admin.market.payment.index');
            Route::get('/online', [PaymentController::class, 'online'])->name('admin.market.payment.online');
            Route::get('/offline', [PaymentController::class, 'offline'])->name('admin.market.payment.offline');
            Route::get('/attendance', [PaymentController::class, 'attendance'])->name('admin.market.payment.attendance');
            Route::get('/confirm', [PaymentController::class, 'confirm'])->name('admin.market.payment.confirm');
        });

        /**
         * مدیریت محصولات
         */
        Route::prefix('product')->group(function () {

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

        /**
         * مدیریت ویژگی های محصول
         */
        Route::prefix('property')->group(function () {

            Route::get('/', [PropertyController::class, 'index'])->name('admin.market.property.index');
            Route::get('/create', [PropertyController::class, 'create'])->name('admin.market.property.create');
            Route::post('/store', [PropertyController::class, 'store'])->name('admin.market.property.store');
            Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('admin.market.property.edit');
            Route::put('/update/{id}', [PropertyController::class, 'update'])->name('admin.market.property.update');
            Route::delete('/delete/{id}', [PropertyController::class, 'delete'])->name('admin.market.property.delete');
        });


        /**
         * مدیریت انبار
         */
        Route::prefix('store')->group(function () {

            Route::get('/', [StoreController::class, 'index'])->name('admin.market.store.index');
            Route::get('/add-to-store', [StoreController::class, 'addToStore'])->name('admin.market.store.add-to-store');
            Route::post('/store', [StoreController::class, 'store'])->name('admin.market.store.store');
            Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('admin.market.store.edit');
            Route::put('/update/{id}', [StoreController::class, 'update'])->name('admin.market.store.update');
            Route::delete('/delete/{id}', [StoreController::class, 'delete'])->name('admin.market.store.delete');
        });
    });

    /**
     * گروه مسیرهای ماژول Content (بخش محتوا)
     */
    Route::prefix('content')->group(function () {

        /**
         * مدیریت دسته بندی مطالب
         */
      
        Route::prefix('category')->name('admin.content.category.')->group(function () {
            Route::resource('', ContentCategoryController::class)
                ->parameters(['' => 'PostCategory'])
                ->except(['show']);
        
            Route::get('/status/{PostCategory}', [ContentCategoryController::class, 'status'])
                ->name('status');
        });



        /**
         * مدیریت نظرات مطالب
         */
        Route::prefix('comment')->name('admin.content.comment.')->group(function () {
            Route::resource('', ContentCommentController::class)
                ->parameters(['' => 'comment'])
                ->except(['create', 'store', 'edit', 'update']);
            
            Route::get('approved/{comment}', [ContentCommentController::class, 'approved'])->name('approved');
            Route::get('status/{comment}', [ContentCommentController::class, 'status'])->name('status');
            Route::post('answer/{comment}', [ContentCommentController::class, 'answer'])->name('answer');
        });

        /**
         * مدیریت سوالات متداول (FAQ)
         */
      
         Route::prefix('faq')->name('admin.content.faq.')->group(function () {
            Route::resource('', FAQController::class)
                ->parameters(['' => 'faq'])
                ->except(['show']);
            
            Route::get('{faq}/status', [FAQController::class, 'status'])->name('status');
        });

        /**
         * مدیریت منوها
         */
        Route::prefix('menu')->name('admin.content.menu.')->group(function () {
            Route::resource('', MenuController::class)
                ->parameters(['' => 'menu'])
                ->except(['show']);
            
            Route::get('status/{menu}', [MenuController::class, 'status'])->name('status');
        });

        /**
         * مدیریت صفحات ثابت
         */
        Route::prefix('page')->name('admin.content.page.')->group(function () {
            Route::resource('', PageController::class)
                ->parameters(['' => 'page'])
                ->except(['show']);
            
            Route::get('status/{page}', [PageController::class, 'status'])->name('status');
        });
        /**
         * مدیریت مقالات و پست ها
         */
        Route::prefix('post')->name('admin.content.post.')->group(function () {
            Route::resource('', PostController::class)
                ->parameters(['' => 'post'])
                ->except(['show']);
            
            Route::get('status/{post}', [PostController::class, 'status'])->name('status');
            Route::get('commentable/{post}', [PostController::class, 'commentable'])->name('commentable');
        });
    });

    /**
     * گروه مسیرهای ماژول User (کاربران)
     */
    Route::prefix('user')->group(function () {

        /**
         * مدیریت ادمین ها
         */
        Route::prefix('admin-user')->group(function () {
            Route::get('/', [AdminUserController::class, 'index'])->name('admin.user.admin-user.index');
            Route::get('/create', [AdminUserController::class, 'create'])->name('admin.user.admin-user.create');
            Route::post('/store', [AdminUserController::class, 'store'])->name('admin.user.admin-user.store');
            Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.admin-user.edit');
            Route::put('/update/{id}', [AdminUserController::class, 'update'])->name('admin.user.admin-user.update');
            Route::delete('/delete/{id}', [AdminUserController::class, 'delete'])->name('admin.user.admin-user.delete');
        });

        /**
         * مدیریت مشتریان
         */
        Route::prefix('customer')->group(function () {
            Route::get('/', [CustomerController::class, 'index'])->name('admin.user.customer.index');
            Route::get('/create', [CustomerController::class, 'create'])->name('admin.user.customer.create');
            Route::post('/store', [CustomerController::class, 'store'])->name('admin.user.customer.store');
            Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('admin.user.customer.edit');
            Route::put('/update/{id}', [CustomerController::class, 'update'])->name('admin.user.customer.update');
            Route::delete('/delete/{id}', [CustomerController::class, 'delete'])->name('admin.user.customer.delete');
        });

        /**
         * مدیریت نقش ها
         */
        Route::prefix('role')->group(function () {
            Route::get('/', [RoleController::class, 'index'])->name('admin.user.role.index');
            Route::get('/create', [RoleController::class, 'create'])->name('admin.user.role.create');
            Route::post('/store', [RoleController::class, 'store'])->name('admin.user.role.store');
            Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.user.role.edit');
            Route::put('/update/{id}', [RoleController::class, 'update'])->name('admin.user.role.update');
            Route::delete('/delete/{id}', [RoleController::class, 'delete'])->name('admin.user.role.delete');
        });

        /**
         * مدیریت دسترسی ها
         */
        Route::prefix('permission')->group(function () {
            Route::get('/', [PermissionController::class, 'index'])->name('admin.user.permission.index');
            Route::get('/create', [PermissionController::class, 'create'])->name('admin.user.permission.create');
            Route::post('/store', [PermissionController::class, 'store'])->name('admin.user.permission.store');
            Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('admin.user.permission.edit');
            Route::put('/update/{id}', [PermissionController::class, 'update'])->name('admin.user.permission.update');
            Route::delete('/delete/{id}', [PermissionController::class, 'delete'])->name('admin.user.permission.delete');
        });
    });

    /**
     * گروه مسیرهای ماژول Notify (اعلان ها)
     */
    Route::prefix('notify')->group(function () {

        /**
         * مدیریت ایمیل ها
         */
        Route::prefix('email')->group(function () {
            Route::get('/', [EmailController::class, 'index'])->name('admin.notify.email.index');
            Route::get('/create', [EmailController::class, 'create'])->name('admin.notify.email.create');
            Route::post('/store', [EmailController::class, 'store'])->name('admin.notify.email.store');
            Route::get('/edit/{id}', [EmailController::class, 'edit'])->name('admin.notify.email.edit');
            Route::put('/update/{id}', [EmailController::class, 'update'])->name('admin.notify.email.update');
            Route::delete('/delete/{id}', [EmailController::class, 'delete'])->name('admin.notify.email.delete');
        });
        /**
         * مدیریت پیامک ها
         */
        Route::prefix('sms')->group(function () {
            Route::get('/', [SMSController::class, 'index'])->name('admin.notify.sms.index');
            Route::get('/create', [SMSController::class, 'create'])->name('admin.notify.sms.create');
            Route::post('/store', [SMSController::class, 'store'])->name('admin.notify.sms.store');
            Route::get('/edit/{id}', [SMSController::class, 'edit'])->name('admin.notify.sms.edit');
            Route::put('/update/{id}', [SMSController::class, 'update'])->name('admin.notify.sms.update');
            Route::delete('/delete/{id}', [SMSController::class, 'delete'])->name('admin.notify.sms.delete');
        });
    });

    /**
     * گروه مسیرهای ماژول Ticket (تیکت ها)
     */
    Route::prefix('ticket')->namespace('Ticket')->group(function () {

        Route::get('/new-tickets', [TicketController::class, 'newTickets'])->name('admin.ticket.newTickets');
        Route::get('/open-tickets', [TicketController::class, 'openTickets'])->name('admin.ticket.openTickets');
        Route::get('/close-tickets', [TicketController::class, 'closeTickets'])->name('admin.ticket.closeTickets');
        Route::get('/', [TicketController::class, 'index'])->name('admin.ticket.index');
        Route::get('/show', [TicketController::class, 'show'])->name('admin.ticket.show');
        Route::get('/create', [TicketController::class, 'create'])->name('admin.ticket.create');
        Route::post('/store', [TicketController::class, 'store'])->name('admin.ticket.store');
        Route::get('/edit/{id}', [TicketController::class, 'edit'])->name('admin.ticket.edit');
        Route::put('/update/{id}', [TicketController::class, 'update'])->name('admin.ticket.update');
        Route::delete('/delete/{id}', [TicketController::class, 'delete'])->name('admin.ticket.delete');
    });

    /**
     * گروه مسیرهای ماژول Setting (تنظیمات)
     */
    Route::prefix('setting')->namespace('Setting')->group(function () {

        Route::get('/', [SettingController::class, 'index'])->name('admin.setting.index');
        Route::get('/create', [SettingController::class, 'create'])->name('admin.setting.create');
        Route::post('/store', [SettingController::class, 'store'])->name('admin.setting.store');
        Route::get('/edit/{id}', [SettingController::class, 'edit'])->name('admin.setting.edit');
        Route::put('/update/{id}', [SettingController::class, 'update'])->name('admin.setting.update');
        Route::delete('/delete/{id}', [SettingController::class, 'delete'])->name('admin.setting.delete');
    });
});
