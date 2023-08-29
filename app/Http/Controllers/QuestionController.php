<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Http;
use Illuminate\Http\Client\Response;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getQuestion(){
        $savedAccessToken = session('accessToken');
        if ($savedAccessToken){
            return 'joy vai';
        }
        

        return 'jsdsjcb';


        $url = "https://chinaonlinebd-code-interview.vercel.app/api/v1/get-access-token";

        $accessTokenResponse = Http::withHeaders([
            'Email' => 'adnankarimctg@gmail.com'
        ])->post($url);
        return $accessTokenResponse;

        if($accessTokenResponse['status']==2000){
            session(['accessToken' => $accessTokenResponse['accessToken'] ]);

            $grantTokenResponse = Http::withHeaders([
                'token' => 'adnankarimctg@gmail.com'
            ])->post($url);
            return $grantTokenResponse;
        }

        
        // return view('getQuestion');
    }
}
