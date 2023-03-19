<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //

     public function send(Request $request)
     {
        // --- Send Email --- //
        // --- Html Template for the email --- //
        $html = view('emails.receive-message', [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'subject' => $request->phone,
            'message' => $request->message
        ]);
        // --- ./ Html Template for the email --- //

        $fields = [
            'to' => [
                [
                    "email" => 'a.kucharski@posteo.de',
                    "name" => 'Testname'
                ]
            ],
            "sender" => [
                "name" => 'FirstBioDent',
                "email" => 'a.kucharski@posteo.de'
            ],
            "subject" => 'FirstBioDent Terminanfrage',
            "cc" => [
                [
                    "email" => 'a.kucharski@posteo.de',
                    "name" => 'User Name'
                ]
            ],
            "htmlContent" => "


<html>
 <head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  <title>Demystifying Email Design</title>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>

<body style='margin: 0; padding: 0;'>

 <table border='0' cellpadding='0' cellspacing='0' width='100%'>
  <tr>
    <td align='center' bgcolor='#ffffff' style='padding: 40px 0 30px 0;'>
     <img src='https://firstbiodentspa.de/images/firstbiodent-logo.svg' alt='FirstBioDent-Logo' width='300' height='auto' style='display: block;' />
    </td>
  </tr>
  <tr>
  <td align='center' bgcolor='#ffffff' style='padding: 20px 0 20px 0; font-size: 18px;'>
   Terminanfrage
  </td>
 </tr>
  <tr>
  <td bgcolor='#ffffff' style='padding: 20px 0 20px 0; font-size: 18px;'>
   Name: ".$request->name."
  </td>
 </tr>
 <tr>
  <td bgcolor='#ffffff' style='padding: 20px 0 20px 0; font-size: 18px;'>
   Betreff: ".$request->subject."
  </td>
</tr>
 <tr>
  <td bgcolor='#ffffff' style='padding: 20px 0 20px 0; font-size: 18px;'>
   Email: ".$request->email."
  </td>
</tr>
 <tr>
  <td bgcolor='#ffffff' style='padding: 20px 0 20px 0; font-size: 18px;'>
   Telefon: ".$request->phone."
  </td>
</tr>
 <tr>
  <td bgcolor='#ffffff' style='padding: 20px 0 20px 0; font-size: 18px;'>
   Mitteilung: ".$request->message."
  </td>
</tr>
 </table>
</body>
</html>
            ",
        ];

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.sendinblue.com/v3/smtp/email');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'accept: application/json',
            'api-key:' . env("SENDINBLUE_KEY") . '', 'content-type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);

        // --- ./ Send Email --- //

        /* --- Check if Mail Delivery was succesfull --- */
        if($response){
        $boolVal = true;
        }else{
        $boolVal = false;
        }
        /* --- ./ Check if Mail Delivery was succesfull --- */

        /* ---  Redirect To Reply Route --- */
        $title = "Mitteilungsstatus";
        $boolValue = $boolVal;
        if($boolValue == true){
            // Open View with Verificaton Email Sent Message to let it verify!
            $alertTitle = "Vielen Dank! Ihre Mitteilung wurde an uns erfolgreich versandt.";
            $alertMessage = "Wir werden uns um Ihre Anfrage kümmern, und werden diese in Kürze bearbeiten"; 
        }else{
            $alertTitle = "Es gab ein Hindernis beim Aufbau der Verbindung. Bitte kontaktieren Sie unseren Support.";
            $alertMessage = "Wir werden uns schnellstmöglich um Ihr Anliegen kümmern und bedanken uns für Ihre Geduld."; 
        }

        return view('layouts.app', [
            'page' => "pages.index",
            'title' => "Kontakt",
            'view' => "contact",
            'alertTitle' => $alertTitle,
            'alertMessage' => $alertMessage,
        ]);

        /* --- ./ Redirect To Reply Route --- */

     }

}
