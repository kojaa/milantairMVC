<?php

    use App\Core\Route;

    return [
        Route::get('|^category/([0-9]+)/?$|', 'Category', 'show'),
        Route::get('|^category/([0-9]+)/delete/?$|', 'Category', 'delete'),
        Route::get('|^auction/([0-9]+)/?$|', 'Auction', 'show'),

        #api routes
        Route::get('|^api/auction/([0-9]+)/?$|', 'ApiAuction', 'show'),

        Route::any('|^.*$|', 'Main', 'home')
    ];