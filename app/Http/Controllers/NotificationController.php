<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use stdClass;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

// use Swift_Message;
// use Swift_SmtpTransport;

class NotificationController extends Controller
{
    public  function uploadFile(Request $request)
    {
        $filesPath = [];
        foreach ($request->file() as $key => $value) {
            $filePath = $value->store('public/temp');
            $filePath=storage_path('app/'.$filePath);
            array_push($filesPath,  $filePath);
        }
        return $filesPath;
    }

    public  function removeFileFromDirectory($filesPath)
    {
        foreach ($filesPath as $key => $filePath) {
            $file = explode('/', $filePath);
            $filename = end($file);
            $filePath = 'public/temp/'.$filename;
            if(Storage::exists($filePath)){
                Storage::delete($filePath);
            }
        }
    }

    public function suitTemplate($context)
    {
        $email_template = "";
        switch ($context) {
            case 'form-sejour':
                $email_template = 'email.sejour';
                break;
            case 'form-preliminaire':
                $email_template = 'email.preliminaire';
                break;
            case 'form-background-check':
                $email_template = 'email.background-check';
                break;
            case 'form-mission-economique':
                $email_template = 'email.mission-economique';
                break;
            case 'contact':
                $email_template = 'email.contact';
                break;
            case 'newsletter':
                # code...
                $email_template = 'email.newsletter';
            default:
                # code...
                break;
        }
        return $email_template;
    }

    public function contact(Request $request)
    {
        $data = $request->all();
        $unserializeData = [];
        $details = [];
        parse_str($data['form'], $unserializeData);
        foreach ($unserializeData as $key => $value) {
            $details[$key] = $value;
        }
        $filesPath = $this->uploadFile($request, $details);
        $details['filesPath'] = $filesPath;
        $template = $this->suitTemplate($details['id']);
        $details['template'] = $template;
        try {
            $mail =  $this->SendEmail($details);
            $msg = "le message a été bien envoyé";
            $this->removeFileFromDirectory($details['filesPath']);
            return response()->json([
                'code' => 'success',
                'msg' => $msg,
            ]);
        } catch (\Throwable $th) {
            // dd($th);
            $msg = "Erreur lors de l'envoie du message, veuillez vérifier les champs de saisie et/ou réessayer ultérieurement";
            return response()->json([
                'code' => 'error',
                'msg' => $msg,
            ]);
        }
    }

    private  function  SendEmail(array $details)
    {
        try {
            $result = Mail::to('info@dgainternational.ca')
                ->send(new Contact($details));
            return $result;
        } catch (\Throwable $th) {
            dump($th);
        }
        // return $result;
    }
}
