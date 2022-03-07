<?php


use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoryAddComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\livewire\Admin\AdminProductsComponent;
use App\Http\livewire\Admin\AdminDeashboardComponent;
use App\Http\livewire\Admin\AdminIndexComponent;
use App\Http\livewire\Admin\Products\ProductsAddComponent;
use App\Http\livewire\Admin\Products\ProductsEditComponent;
use App\Http\livewire\Admin\Sliders\AdminAddHomeSliderComponent;
use App\Http\livewire\Admin\Sliders\AdminHomeSlidersComponent;
use App\Http\livewire\Admin\Sliders\AdminEditSliderComponent;
use App\Http\livewire\Admin\User\AdminUserComponent;
use App\Http\livewire\Admin\User\AdminUserAddComponent;
use App\Http\livewire\Admin\User\AdminUserEditComponent;
use App\Http\livewire\Admin\User\AdminUserDetailsComponent;
use App\Http\livewire\Admin\SalePrice\SalePriceComponent;
use App\Http\livewire\Admin\SalePrice\SalePriceAddComponent;
use App\Http\livewire\Admin\SalePrice\SalePriceEditComponent;
use App\Http\livewire\Admin\AdminCouponsComponent;
use App\Http\livewire\Admin\AdminAddCouponsComponent;
use App\Http\livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\About\AdminAboutComponent;
use App\Http\Livewire\Admin\About\AdminAboutEditComponent;
use App\Http\Livewire\Admin\Contact\AdminContactComponent;
use App\Http\Livewire\Admin\Contact\AdminContactEditComponent;
use App\Http\Livewire\Admin\Settings\AdminSettingsComponent;





 use App\Http\livewire\Contact\ContactComponent;
 use App\Http\livewire\About\AboutComponent;
 use App\Htpp\Livewire\Adress\ShippingAdressComponent;


























use Illuminate\Support\Facades\Route;

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




Route::get('/' , HomeComponent::class);
Route::get('/shop' , ShopComponent::class);
Route::get('/cart' , CartComponent::class)->name('product.cart');
Route::get('/favoriler' , WishlistComponent::class)->name('product.wishlist');

Route::get('/product-category/{category_slug}' , CategoryComponent::class)->name('product.category');


Route::get('/product/{slug}' , DetailsComponent::class)->name('product.details');

Route::get('/checkout' , CheckoutComponent::class)->name('checkout');

Route::get('/thankyou' , ThankyouComponent::class)->name('thankyou');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
// })->name('dashboard');


//admin contact

Route::get('/iletisim' , ContactComponent::class)->name('contact');


//Hakkımızda

Route::get('/hakkimizda' , AboutComponent::class)->name('about');





// for user
Route::middleware(['auth:sanctum' , 'verified'])->group(function(){

    Route::get('/user/dashbord' , UserDashboardComponent::class)->name('user.dashboard');

});

// for Admin

Route::middleware(['auth:sanctum' , 'verified', 'authadmin'])->group(function(){

    Route::get('admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/category', AdminCategoryComponent::class)->name('admin.category');
   Route::get('admin/category-add', AdminCategoryAddComponent::class)->name('admin.category.add');
 //   Route::get('admin/category-delete', AdminCategoryDeleteComponent::class)->name('admin.category.delete');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.categoryedit');


    Route::get('/admin/categories' , AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/all-products' , AdminProductsComponent::class)->name('admin.products.all');
    Route::get('/admin/products' , AdminProductsComponent::class)->name('admin.products');


    Route::get('/admin/anasayfa' , AdminIndexComponent::class)->name('admin.index');


//admin products
Route::get('/admin/edit/products/{product_slug}' , ProductsEditComponent::class)->name('admin.products.edit');
Route::get('/admin/add/products' , ProductsAddComponent::class)->name('admin.products.add');


//Admin Kullanıcı İşlemleri

Route::get('/admin/user' , AdminUserComponent::class)->name('admin.user');
Route::get('/admin/user/add' , AdminUserAddComponent::class)->name('admin.user.add');
Route::get('/admin/user/edit/{user_id}' , AdminUserComponent::class)->name('admin.user.edit');
Route::get('/admin/user/details/{user_name}' , AdminUserDetailsComponent::class)->name('admin.user.details');


// Ürünlere İndirim Ekleme 


Route::get('admin/sale/price' , SalePriceComponent::class)->name('sale.price');
Route::get('admin/sale/price/add' , SalePriceAddComponent::class)->name('sale.price.add');
Route::get('admin/sale/price/edit' , SalePriceAddComponent::class)->name('sale.price.edit');


//Kuponlar 


Route::get('admin/kuponlar' , AdminCouponsComponent::class)->name('admin.coupons');
Route::get('admin/kuponlar/add' , AdminAddCouponsComponent::class)->name('admin.coupons.add');
Route::get('admin/coupon/edit/{coupon_id}' , AdminEditCouponComponent::class)->name('admin.coupons.edit');








// Dinamik Kategori




//Admin Mail Servis




//Admin Hakkımızda Sayfası


Route::get('/admin/about' , AdminAboutComponent::class) ->name('admin.about');
Route::get('/admin/about/edit/{id}' , AdminAboutEditComponent::class) ->name('admin.about.edit');

//admin iletişim sayfası 

Route::get('/admin/contact' , AdminContactComponent::class) ->name('admin.contact');
Route::get('/admin/contact/edit/{id}' , AdminContactEditComponent::class) ->name('admin.contact.edit');


//Admin Site İçi Arama




//Admin Detay Fotoğraf Ekleme



//Kargo Takip Sistemi 


// Site Ayarları

Route::get('/settings' , AdminSettingsComponent::class);





// Slider Yönetimi

Route::get('/admin/home/slider' , AdminHomeSlidersComponent::class) ->name('admin.home.sliders');
Route::get('/admin/home/add' , AdminAddHomeSliderComponent::class) ->name('admin.home.add');
Route::get('/admin/home/edit/{slider_link}' , AdminEditSliderComponent::class) ->name('admin.home.edit');





});
