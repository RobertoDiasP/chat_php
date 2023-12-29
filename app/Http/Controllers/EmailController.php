<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Gmail;

class EmailController extends Controller
{
    //
    public function verificarEmails() {
        // Autenticar-se com as credenciais da API
        $filePath = base_path('resources/views/client_secret_1057298932332-6mtnlotcv5drmfsnok9vatmmb69rgng5.apps.googleusercontent.com.json');
        $client = new Google_Client();
        $client->setAuthConfig($filePath);
        $client->setScopes([
            'https://www.googleapis.com/auth/gmail.readonly',
        ]);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
    
        // Verificar e-mails
        $service = new Google_Service_Gmail($client);
        $results = $service->users_messages->listUsersMessages('me');
        
        $emails = $results->getMessages();
        // Processar os resultados
        // ...
    
        return view('emails', ['emails' => $emails]);
    }
}
