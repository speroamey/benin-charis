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

Route::get('/', function () {
    $agencies = array(
        ['id'=>'1','name'=>'Cocody','latitude'=>'','longitude'=>''],
        ['id'=>'1','name'=>'Cocody','latitude'=>'','longitude'=>''],
        ['id'=>'1','name'=>'Cocody','latitude'=>'','longitude'=>''],
        ['id'=>'1','name'=>'Cocody','latitude'=>'','longitude'=>''],
);
    return view('pages.welcome',compact('agencies'));
})->name('home');
Route::get('/a-propos-de-nous', function () {
    return view('pages.about');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/conciergerie-d-entreprise', function () {
    return view('pages.conciergerie-d-entreprise');
})->name('conciergerie-d-entreprise');
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
            $sujet="Immigration d'affaire";
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

// Route::get('/mail', function () {
//     $details=array(
//         'fullname'=>'test',
//         'phone'=>'61 72 51 34'

// );
//     return view('email.sejour', compact('details'));
// });

Route::post('/contact',  [NotificationController::class, 'contact'])->name('contact');

Route::get('/formulaire-preliminaire',  [FormController::class, 'formPreliminaire']);
Route::get('/formulaire-sejour',  [FormController::class, 'formSejour']);
Route::get('/formulaire-mission-economique',  [FormController::class, 'formMissionEconomique']);
Route::get('/formulaire-background-check',  [FormController::class, 'formBackgroundCheck']);

Route::get('/blog/{title}', function ($title) {
    $sujet="";
    switch ($title) {
        case 'marketing-par-les-donnees':
            $sujet="Le marketing par les données";
            break;
        case 'le-marketing-de-donnees':
            $sujet="Le marketing de données";
            break;
        case 'le-marketing-et-la-communication':
            $sujet="Le marketing et la communication";
            break;
        case 'la-transformation-digitale-gestion-du-changement':
            $sujet="la transformation digitale-gestion du changement";
            break;
        case 'femmes-leaders-dans-l-economie-ivoirienne':
            $sujet ="Femmes leaders dans l'économie ivoirienne";
            break;
        case 'l-innovation-disruptive':
            $sujet = "L'innovation disruptive";
            break;
        default:
            # code...
            break;
    }
    return view('pages.blog')->with('title',$title)->with('sujet',$sujet);
})->name('blog');
