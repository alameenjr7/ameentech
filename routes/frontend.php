<?php


use Illuminate\Support\Facades\Route;






// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\Frontend\IndexController::class,'index'])->name('acceuil');

Route::get('/apropos',[App\Http\Controllers\Frontend\AproposController::class,'index'])->name('apropos');

Route::get('/publication',[App\Http\Controllers\Frontend\PublicationController::class,'index'])->name('publication');
Route::get('publication-detail/{slug}/',[App\Http\Controllers\Frontend\PublicationController::class, 'publicationDetail'])->name('publications.detail');
Route::post('publication-filter',[App\Http\Controllers\Frontend\PublicationController::class, 'publicationFilter'])->name('publication.filter');
Route::get('auto-recherch',[App\Http\Controllers\Frontend\PublicationController::class, 'autoSearch'])->name('auto.pub.search');
Route::get('recherche',[App\Http\Controllers\Frontend\PublicationController::class, 'search'])->name('search');
Route::post('publication-review/{slug}/',[App\Http\Controllers\Backend\PublicationReviewController::class, 'publicationReview'])->name('publication.review');


Route::get('/realisation',[App\Http\Controllers\Frontend\RealisationController::class,'index'])->name('realisation');

Route::get('/contact',[App\Http\Controllers\Frontend\ContactController::class,'index'])->name('contact');
Route::post('/message-contact',[App\Http\Controllers\Frontend\ContactController::class,'contactSubmit'])->name('submit.contact');
Route::post('/mail-contact',[App\Http\Controllers\Frontend\ContactController::class,'mailing'])->name('mail.contact');

Route::get('/service',[App\Http\Controllers\Frontend\ServiceController::class,'index'])->name('service');


Route::post('/question-response',[App\Http\Controllers\Frontend\QuestionController::class,'questionSubmit'])->name('submit.question');

Route::post('/projet-response',[App\Http\Controllers\Frontend\ProjectController::class,'projectSubmit'])->name('submit.project');

