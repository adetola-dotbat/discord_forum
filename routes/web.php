<?php

use App\Http\Controllers\{AdminController, AnswerController, ArticleController, HomeController, PostController, ProfileController, ProvisionServer, QuestionController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/questions', [HomeController::class, 'questions'])->name('questions');
// Route::get('/questions/{tag}', [HomeController::class, 'questionTag'])->name('questions.tag');
// Route::get('{tag}', [HomeController::class, 'questionTag'])->name('questions.tag');



Route::get('/question/details/{question}', [QuestionController::class, 'questionDetails'])->name('question.details');
Route::get('/question/search', [QuestionController::class, 'search'])->name('search.question');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/ask', [HomeController::class, 'ask'])->name('ask');
    Route::post('/question', [QuestionController::class, 'question'])->name('question');
    Route::get('/question/edit/{question}', [QuestionController::class, 'editQuestion'])->name('edit.question');
    Route::post('/question/update/{question}', [QuestionController::class, 'updateQuestion'])->name('update.question');
    Route::get('/questions/mq', [QuestionController::class, 'myQuestions'])->name('view.questions');
    Route::post('/answer', [AnswerController::class, 'answer'])->name('store.answer');
    Route::get('/communities', [HomeController::class, 'communities'])->name('communities');
    Route::post('/join-community', [HomeController::class, 'joinCommunity'])->name('join.community');



    Route::group(['middleware' => ['is_admin']], function () {
        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::get('/list-users', [AdminController::class, 'users']);
        Route::get('/community', [AdminController::class, 'community'])->name('dashboard.community');
        Route::post('/community', [AdminController::class, 'storeCommunity'])->name('store.community');
        Route::get('/community/{id}', [AdminController::class, 'deleteCommunity'])->name('delete.community');

        Route::get('/article', [ArticleController::class, 'index'])->name('article');
        Route::post('/article', [ArticleController::class, 'storeArticle'])->name('store.article');
        Route::get('/article/{id}', [ArticleController::class, 'deleteArticle'])->name('delete.article');
    });
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
