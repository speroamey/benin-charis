<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

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

    public function nousRejoindre()
    {
        $offers = Offer::latest('id')->take(10)->get();
        return view('pages.nous-rejoindre', compact('offers'));
    }
    public function nousRejoindreDetails($id){
        $offer= Offer::find($id);
        return view('pages.services', compact('offer'));
    }

    public function formMissionEconomique()
    {
        return view('pages.form-mission-economique');
    }

    public function formBackgroundCheck()
    {
        return view('pages.form-background-check');
    }

    public function formulaireDePoste($id)
    {
        if($id =="candidature-spontanee"){
            $offer = array('id'=>$id, 'title'=>'Candidature spontanée');
            return view('pages.form-poste', compact('offer'));
        }
        $offer = Offer::find($id);
        return view('pages.form-poste', compact('offer'));
    }

}
