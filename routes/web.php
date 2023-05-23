<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/a-propos-de-nous', function () {
    return view('pages.about');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/conciergerie-d-entreprise', function () {
    return view('pages.conciergerie-d-entreprise');
});
Route::get('/conciergerie-de-particulier', function () {
    return view('pages.conciergerie-de-particulier');
});
Route::get('/services/{slug}', function ($slug) {
    $sujet="";
    switch ($slug) {
        case 'visa-d-etude':
            $sujet="Aide pour l’obtention du visa d’étude";
            break;
        case 'visa-de-travail':
            $sujet="Aide pour l’obtention du visa de travail";
            break;
        case 'visa-tourisme':
            $sujet="Aide pour l’obtention du visa touriste";
            break;

        case 'immigration-pour-entreprise':
            $sujet="Immigration pour entreprise";
            break;

        case 'service-de-Background-check':
            $sujet ="Service de Back Ground Check";
            break;

        case 'mission-economique':
            $sujet ="Mission économique";
            break;

        case 'assistance':
            $sujet ="Assistance pour l'ouverture de comptes bancaires et la gestion financière lors de l'installation au Canada";
            break;

        case 'investissement-immobilier':
            $sujet ="Accompagnement dans l’investissement immobilier au Canada";
            break;

        case 'organisation-de-mission-economique':
            $sujet ="Organisation de missions économiques pour les entreprises désireuses d’explorer les opportunités commerciales en Côte d’Ivoire";
            break;

        case 'assistance-création-d-entreprise':
            $sujet ="Assistance pour la création d’entreprise en Côte d’Ivoire, y compris les formalités administratives et juridiques.";
            break;

        case 'service-assistance-installation':
            $sujet ="Service d’assistance à l’installation, y compris l’aide à la recherche d’un logement et à la mise en place des services de base.";
            break;

        case 'service-tourisme-decouverte':
            $sujet ="Service de tourisme et de découverte du pays, y compris l’organisation de circuits touristiques personnalisés et l’assistance dans les réservations de voyages et d’hébergement";
            break;

        default:
            # code...
            break;
    }
    return view('pages.services')->with('slug',$slug)->with('sujet',$sujet);
})->name('services');

// Route::get('/secteurs/{slug}', function ($slug) {
//     $sujet="";
//     switch ($slug) {
//         case 'agency-banking-solution-pour-une-inclusion-financière':
//             $sujet="Agency Banking solution pour une inclusion  financière";
//             break;
//         case 'Telecommunication':
//             $sujet="Télécommunication";
//             break;
//         case 'energie-ressource-produits-industriels':
//             $sujet="Énergie, ressources & produits industriels ";
//             break;

//         case 'Batiments-et-travaux-publique':
//             $sujet="Bâtiments et Travaux Publique BTP";
//             break;
//         case 'immobilier':
//             $sujet ="Immobilier";
//             break;

//         default:
//             # code...
//             break;
//     }
//     return view('pages.secteurs')->with('slug',$slug)->with('sujet',$sujet);
// })->name('secteurs');

Route::get('/nous-contacter', function () {
    return view('pages.contact-us');
});

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
