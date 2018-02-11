<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UsersController extends Controller
{
    public function getUser() {
        $client = new Client(['base_uri' => 'endpoint']);
        $token = getenv('TOKEN_MOODLEROOMS');
    
        $parameters = array('token'=>'token', 'method'=>'get_user', 'value'=>'carestrepo', 'field'=>'username');
        $response = $client->request('POST', 'endpoint', [
            'query' => $parameters
        ]);
    
        $code = $response->getStatusCode();
        //printf("code:%d\n", $code);
        $body = $response->getBody();

        //cargar el body respuesta del servidor en un objecto simplexml
        $xml_body = simplexml_load_string($body);
        $user_xml = $xml_body->get_user->user;

    	$json = json_encode($user_xml);
		$user_array = json_decode($json,TRUE);

		$username = $user_array['username'];
		$firstname = $user_array['firstname'];
		$lastname = $user_array['lastname'];
        $email = $user_array['email'];
        
        return view('user', ['username'=>$username, 'firstname'=>$firstname, 'lastname' => $lastname, 'email'=>$email]);
    }
}