<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

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
use TCG\Voyager\Models\Post;
Route::get('/', function () {
    $posts = Post::orderBy('created_at', 'desc')->take(3)->get();    ;
    return view('pages.welcome',compact('posts'));
})->name('home');

Route::get('/a-propos-de-nous', function () {
    return view('pages.about');
});

Route::get('/foire-aux-questions', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/ce-que-nous-faisons', function () {
    return view('pages.ce-que-nous-faisons');
})->name('ce-que-nous-faisons');

Route::get('/conciergerie-de-particulier', function () {
    return view('pages.conciergerie-de-particulier');
})->name('conciergerie-de-particulier');

Route::get('/services/{slug}', function ($slug) {
    $sujet="";
    switch ($slug) {
        case 'visa-d-etude':
            $sujet="Étudier au Canada";
            break;
        case 'visa-de-travail':
            $sujet="Travailler au Canada";
            break;
        case 'visa-tourisme':
            $sujet="Visiter le Canada";
            break;

        case 'immigration-pour-entreprise':
            $sujet="Assistance à L'immigration d'affaire";
            break;

        case 'service-de-Background-check':
            $sujet ="Service de vérification d'antécédants";
            break;

        case 'mission-economique':
            $sujet ="Organisation de mission économique";
            break;

        // case 'assistance':
        //     $sujet ="Assistance pour l'ouverture de comptes bancaires et la gestion financière lors de l'installation au Canada";
        //     break;

        case 'investissement-immobilier':
            $sujet ="Investissement immobilier";
            break;

        case 'organisation-de-mission-economique':
            $sujet ="Organisation de missions économiques";
            break;

        case 'assistance-création-d-entreprise':
            $sujet ="Assistance pour création d’entreprise";
            break;

        case 'service-assistance-installation':
            $sujet ="Service d’assistance & Installation";
            break;

        case 'service-tourisme-decouverte':
            $sujet ="Service de tourisme";
            break;

        default:
            # code...
            break;
    }
    return view('pages.services')->with('slug',$slug)->with('sujet',$sujet);
})->name('services');



Route::get('/nous-contacter', function () {
    return view('pages.contact-us');
});



Route::post('/contact',  [NotificationController::class, 'contact'])->name('contact');
Route::get('/nous-rejoindre/{id}',  [FormController::class, 'nousRejoindreDetails'])->name('nous-rejoindre-details');
Route::get('/nous-rejoindre',  [FormController::class, 'nousRejoindre'])->name('nous-rejoindre');
Route::get('/nous-rejoindre/{id}/formulaire',  [FormController::class, 'formulaireDePoste'])->name('formulaire');

// Route::get('/formulaire-poste',  [FormController::class, 'formSejour'])->name('formulaire');
Route::get('/formulaire-mission-economique',  [FormController::class, 'formMissionEconomique']);
Route::get('/formulaire-background-check',  [FormController::class, 'formBackgroundCheck']);

Route::get('/articles', function () {
    $posts = Post::orderBy('created_at','desc')->take(6)->paginate(6);
    return view('pages.articles')->with('posts',$posts);
})->name('articles');


Route::get('/articles/{id}', function ($id) {
    $post=Post::find($id);
    return view('pages.article')->with('post',$post);
})->name('article');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
