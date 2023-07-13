<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

// use Swift_Message;
// use Swift_SmtpTransport;

class FormController extends Controller
{
    public function contact(Request $request)
    {
        $unserializeData = [];
        parse_str($request->data, $unserializeData);
        $fullname = $unserializeData['fullname'] ?? null;
        $email = $unserializeData['email'] ?? null;
        $object = $unserializeData['object'] ?? null;
        $phone = $unserializeData['phone'] ?? null;
        $message = $unserializeData['message'] ?? null;
        $id = $unserializeData['id'] ?? null;
        $details = [];

        $details = [
            'id' => $id,
            'email' => $email,
            'fullname' => $fullname,
            'object' => $object,
            'phone' => $phone,
            'message' => $message
        ];
        $template = $details['id'] == "newsletter" ? 'email.newsletter' : 'email.contact';

        try {
            $mail =  $this->SendEmail($details, $template);
            $msg = "le message a été bien envoyé";
            return response()->json([
                'code' => 'success',
                'msg' => $msg,
            ]);
        } catch (\Throwable $th) {
            //  dd($th);
            $msg = "Erreur lors de l'envoie du message, veuillez vérifier les champs de saisie et/ou réessayer ultérieurement";
            return response()->json([
                'code' => 'error',
                'msg' => $msg,
            ]);
        }



        // if ($mail) {

        // } else {
        //     //   echo "false";

        // }
    }

    public function formPreliminaire()
    {
        return view('pages.form-preliminaire');
    }

    public function formMissionEconomique()
    {
        return view('pages.form-mission-economique');
    }

    public function formBackgroundCheck()
    {
        return view('pages.form-background-check');
    }

    public function formSejour()
    {
        $criteria = [
            "Tout-Inclus",
            "Croisière",
            "Luxe",
            "Plage",
            "Aventure",
            "Activités culturelles et musées",
            "Découvertes urbaines",
            "Architectures locales",
            "Folklore et tradition",
            " Fiesta et vie nocturne",
            "Activités humanitaires",
            " Gastronomie et découverte culinaire",
            "Activités sportives"
        ];

        $inclusions = [
            "Tout-Inclus",
            "Excursions",
            "Wifi illimité",
            "Restaurants à la carte",
            "Sélection de vins et spiritueux",
            "Sports nautiques et terrestres",
            "Service de conciergerie",
            "Service de majordome",
            " Service aux chambres",
            "Spa",
            " Salle de sport",
            "Croisière"
        ];
        $climate = [
            "Tropical",
            "Tempéré",
            "Aride",
            "Froid",
        ];
        $accomodation = [
            "Hôtel de luxe",
            "Hôtel standard",
            "Appartement",
            "Maison"
        ];

        $stayDuration = [
            "5 jours",
            "7 jours",
            "14 jours",
            "1 mois et plus",
            "Autre"
        ];

        return view('pages.form-sejour', compact('criteria', 'inclusions', 'climate', "accomodation", "stayDuration"));
    }

    // private  function  SendEmail(array $details, $template)
    // {
    //     // dd(env('APP_EMAIL'));
    //     $transport = (new Swift_SmtpTransport(env('MAIL_HOST'), env('MAIL_PORT'), 'tls'))
    //         ->setUsername(env('MAIL_USERNAME'))
    //         ->setPassword(env('MAIL_PASSWORD'));

    //     $mailer = new Swift_Mailer($transport);
    //     $message = (new Swift_Message("Mail LaJoy"))
    //         ->setSubject($details['object'])
    //         ->setFrom([$details['email'] => env("APP_EMAIL")])
    //         ->setTo([env("APP_EMAIL") =>  $details['email']])
    //         ->setBody(view($template, compact("details"))->render(), 'text/html');

    //     $result = $mailer->send($message);
    //     return $result;
    // }
}
