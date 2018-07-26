<?php

    use App\Core\Route;

    return [
        Route::get('|^category/([0-9]+)/?$|', 'Category', 'show'),
        Route::get('|^category/([0-9]+)/delete/?$|', 'Category', 'delete'),
        Route::get('|^auction/([0-9]+)/?$|', 'Auction', 'show'),
        
        #api routes
        Route::get('|^api/auction/([0-9]+)/?$|', 'ApiAuction', 'show'),
        Route::get('|^api/bookmarks/?$|', 'ApiBookmark', 'getBookmarks'),
        Route::get('|^api/bookmarks/add/([0-9]+)/?$|', 'ApiBookmark', 'addBookmark'),
        Route::get('|^api/bookmarks/clear/?$|', 'ApiBookmark', 'clear'),
        
        Route::any('|^.*$|', 'Main', 'home')
    ];