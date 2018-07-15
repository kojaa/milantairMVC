<?php

    return [
        App\Core\Route::get('|^category/([0-9]+)/?$|', 'Category', 'show'),
        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];