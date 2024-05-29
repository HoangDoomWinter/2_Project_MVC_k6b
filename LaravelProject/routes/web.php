<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/home',
    function () {
        $html = "<h1>Welcome to my world</h1>";
        return $html;
    }
);

Route::get('/greeting', function() {
    return view('greeding', ['name' => 'TiNo']);
});

Route::get('/customer', function() {
    return view('customer');
} 
);

// Cách khác
// Route::get('/customer',
//     'App\Http\Controllers\CustomerController@index'
// );

// Route::get('/getProduct', function() {
//     return view('getProducts');
// });

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'product'], function() {
        Route::get('/getProduct',
            'App\Http\Controllers\ProductController@getProduct'
        );
        Route::get('/insertProduct',
            'App\Http\Controllers\ProductController@forminsertProduct'
        );
        Route::get('/deleteProduct/{pid}',
            'App\Http\Controllers\ProductController@deleteProduct'
        );
        # luu cdsl va day thong bao "da them thanh cong"
        Route::post('/insertProduct',
            'App\Http\Controllers\ProductController@insertProduct'
        );

        Route::get('/getProductsByBand',
        'App\Http\Controllers\ProductController@getProductsByBand'
        ) ->name('admin.product.getProductsByBand');
        
               Route::get('/getProductbyYear',
            'App\Http\Controllers\ProductController@getProductbyYear'
        ) -> name('admin.product.getProductbyYear');

        Route::get('/insertProduct',
            'App\Http\Controllers\ProductController@insertProduct'
        ) -> name('admin.product.insertProduct');

        Route::get('/deleteProduct',
            'App\Http\Controllers\ProductController@deleteProduct'
        ) -> name('admin.product.deleteProduct');

        Route::get('/updateProduct',
            'App\Http\Controllers\ProductController@updateProduct'
        ) -> name('admin.product.updateProduct');
    });

    Route::group(['prefix' => 'customer'], function() {
        Route::get('/getCustomer',
            'App\Http\Controllers\CustomerController@getCustomer'
        );
    });

    Route::group(['prefix' => 'order'], function() {
        Route::get('/getCustomer',
            'App\Http\Controllers\OrderController@getOrder'
        );
    });

    Route::group(['prefix' => 'orderdetail'], function() {

    });
});