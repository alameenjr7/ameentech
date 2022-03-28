<?php


use Illuminate\Support\Facades\Route;

// Admin Dashboard

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Banner section
    Route::resource('/banniere',App\Http\Controllers\Backend\BannerController::class);
    Route::post('banniere_status',[App\Http\Controllers\Backend\BannerController::class, 'bannerStatus'])->name('banner.status');


    //Language section
    Route::resource('/langage',App\Http\Controllers\Backend\LanguageController::class);
    Route::post('langage_status',[App\Http\Controllers\Backend\LanguageController::class, 'langageStatus'])->name('langage.status');
    Route::post('langage/{id}/child',[App\Http\Controllers\Backend\LanguageController::class, 'getChildByFrameworkID']);

    //A Propos section
    Route::resource('/apropos',App\Http\Controllers\Backend\AboutController::class);
    Route::post('apropos_status',[App\Http\Controllers\Backend\AboutController::class, 'aproposStatus'])->name('apropos.status');

    //Client section
    Route::resource('/client',App\Http\Controllers\Backend\ClientController::class);
    Route::post('client_status',[App\Http\Controllers\Backend\ClientController::class, 'clientStatus'])->name('client.status');

    //Service section
    Route::resource('/service',App\Http\Controllers\Backend\ServiceController::class);
    Route::post('service_status',[App\Http\Controllers\Backend\ServiceController::class, 'serviceStatus'])->name('service.status');

    //Categorie section
    Route::resource('/categorie',App\Http\Controllers\Backend\CategoryController::class);
    Route::post('categorie_status',[App\Http\Controllers\Backend\CategoryController::class, 'realisationStatus'])->name('categorie.status');
    Route::post('categorie/{id}/child',[App\Http\Controllers\Backend\CategoryController::class, 'getChildByParentID']);

    //Realisation section
    Route::resource('/realisation',App\Http\Controllers\Backend\RealisationController::class);
    Route::post('realisation_status',[App\Http\Controllers\Backend\RealisationController::class, 'realisationStatus'])->name('realisation.status');
    Route::get('realisation-detail/{slug}/',[App\Http\Controllers\Backend\RealisationController::class, 'realisationDetail'])->name('realisation.detail');

    //Rea Review
    Route::get('rea-commentaires',[App\Http\Controllers\Backend\RealisationReviewController::class, 'index'])->name('rea.commentaires.index');
    Route::post('rea-review-status',[App\Http\Controllers\Backend\RealisationReviewController::class, 'reaReviewStatus'])->name('rea.review.status');

    //Publication section
    Route::resource('/publication',App\Http\Controllers\Backend\PublicationController::class);
    Route::post('publication_status',[App\Http\Controllers\Backend\PublicationController::class, 'publicationStatus'])->name('publication.status');
    Route::get('publication-detail/{slug}/',[App\Http\Controllers\Backend\PublicationController::class, 'publicationDetail'])->name('publication.detail');

    //Pub Review
    Route::get('pub-commentaires',[App\Http\Controllers\Backend\PublicationReviewController::class, 'index'])->name('pub.commentaires.index');
    Route::post('pub-review-status',[App\Http\Controllers\Backend\PublicationReviewController::class, 'pubReviewStatus'])->name('pub.review.status');

    //Setting section
    Route::get('parametre',[App\Http\Controllers\SettingController::class, 'index'])->name('parametre');
    Route::put('parametre',[App\Http\Controllers\SettingController::class, 'settingsUpdate'])->name('parametre.update');
});
