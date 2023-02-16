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
    return view('pages.welcome');
});
Route::get('/a-propos-de-nous', function () {
    return view('pages.about');
});
Route::get('/services/{slug}', function ($slug) {
    $sujet="";
    switch ($slug) {
        case 'Conseil-sur-l-analyse-marketing':
            $sujet="Conseil sur l'analyse marketing";
            break;
        case 'Conseil-pour-optimiser-l-experience':
            $sujet="Conseil pour-optimiser l'expérience client";
            break;
        case 'Conseil-en-analyses-des-donnees':
            $sujet="Conseil en analyses des donnees";
            break;
        case 'Conseil-pour-la-transformation-numérique-d-une-entreprise':
            $sujet="Conseil pour la transformation numérique-d'une entreprise";
            break;
        case 'Conseil-pour-la-mise-en-place-de-la-stratégie-de-déploiement-commercial':
            $sujet ="Conseil pour la mise en place de la stratégie de déploiement commercial";
            break;

        // second section
        case 'Conseil-en-stratégie-d-entreprise-et-de-croissance':
            $sujet = "Conseil en stratégie d’entreprise et de croissance";
            break;
        case 'Conseil-en-stratégie-de-restructuration':
            $sujet="Conseil en stratégie de restructuration";
            break;
        
        //THIRD SECTION
        case 'conseil-en-gestion-et-expérience-du-changement':
            $sujet = "Conseil en gestion et expérience du changement";
            break;
        case 'Conseil-sur-la-gestion-de-l-impact-des-transformations-organisationnelles-sur-les-rh':
            $sujet = "Conseil sur la gestion de l’impact des
            transformations organisationnelles sur les RH";
            break;
        case 'Conseil-pour-la-mise-en-place-de-programmes-de-reconnaissance-et-de-récompenses':
            $sujet= "Conseil pour la mise en place de programmes
            de reconnaissance et de récompenses";
            break;

        // 4th section
        case 'Conseil-en-fusion-et-acquisitions':
            $sujet ="Conseil en fusion et acquisitions";
            break;
        case 'Conseil-en-financement':
            $sujet = "Conseil en financement";
            break;
        default:
            # code...
            break;
    }
    return view('pages.services')->with('slug',$slug)->with('sujet',$sujet);
})->name('services');

Route::get('/secteurs/{slug}', function ($slug) {
    $sujet="";
    switch ($slug) {
        case 'agency-banking-solution-pour-une-inclusion-financière':
            $sujet="Agency Banking solution pour une inclusion  financière";
            break;
        case 'Telecommunication':
            $sujet="Télécommunication";
            break;
        case 'energie-ressource-produits-industriels':
            $sujet="Énergie, ressources & produits industriels ";
            break;

        case 'Batiments-et-travaux-publique':
            $sujet="Bâtiments et Travaux Publique BTP";
            break;
        case 'immobilier':
            $sujet ="Immobilier";
            break;

        default:
            # code...
            break;
    }
    return view('pages.secteurs')->with('slug',$slug)->with('sujet',$sujet);
})->name('secteurs');

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
