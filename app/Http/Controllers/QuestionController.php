<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\Http;
use Illuminate\Http\Client\Response;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function getQuestion(){
        $url = "https://chinaonlinebd-code-interview.vercel.app/api/v1/";


        $accessTokenResponse = Http::withHeaders([
            'Email' => 'adnankarimctg@gmail.com'
        ])->post("{$url}get-access-token");


        if ($accessTokenResponse['status'] == 2000) {


            $grantTokenResponse = Http::withHeaders([
                'token' => $accessTokenResponse['accessToken']
            ])->post("{$url}grant-token");



            if ($grantTokenResponse['status'] == 2000) {


                $quetions = Http::withHeaders([
                    'token' => $accessTokenResponse['accessToken'],
                    'grant' => $grantTokenResponse['grantToken']
                ])->post("{$url}get-the-question");

                return $quetions;


                // 
            }



            // 
        }








    //     $savedAccessToken = session('accessToken');
    //     if (!$savedAccessToken){
    //         $url = "https://chinaonlinebd-code-interview.vercel.app/api/v1/get-access-token";

    //     $accessTokenResponse = Http::withHeaders([
    //         'Email' => 'adnankarimctg@gmail.com'
    //     ])->post($url);

    //     }
        
    //     return 'jsdsjcb';


        
    //     return $accessTokenResponse;

    //     if($accessTokenResponse['status']==2000){
    //         session(['accessToken' => $accessTokenResponse['accessToken'] ]);

    //         $grantTokenResponse = Http::withHeaders([
    //             'token' => 'adnankarimctg@gmail.com'
    //         ])->post($url);
    //         return $grantTokenResponse;
    //     }

        
    //     // return view('getQuestion');
    // }
}
}
