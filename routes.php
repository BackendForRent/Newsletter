<?php
use Goosy\Newsletter\Http\Controllers\NewsletterController ;

Route::group(['prefix' => 'api/v1/newsletter'],function() {
    Route::post('email', [NewsletterController::class,'insert']);
});