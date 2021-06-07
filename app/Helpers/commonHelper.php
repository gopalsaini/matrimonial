<?php
namespace App\Helpers;
use Ixudra\Curl\Facades\Curl;
use Session;

class commonHelper{
	
    public static function callAPI($method, $url, $data){

        
      $url=env('BASE_URL').$url;

        if($method == 'GET'){

            return $response = Curl::to($url)
            ->get();

        }elseif($method == 'PUT'){

            return $response = Curl::to($url)

            ->withData(['title'=>'Test', 'body'=>'body goes here', 'userId'=>1])

            ->put();

        }elseif($method == 'DELETE'){

            return $response = Curl::to($url)

                ->delete();
        }elseif($method == 'patch'){

            return $response = Curl::to($url)

                ->withData(['title'=>'Test', 'body'=>'body goes here', 'userId'=>1])

                ->patch();
        }elseif($method == 'POST'){
            return $response = Curl::to($url)

                ->withData($data)
                ->post();
                
        }elseif($method == 'userTokenpost'){
            $user_token = Session::get('user_token');
            return $response = Curl::to($url)
                ->withData($data)
                ->withBearer($user_token)
                ->post();
                
        }elseif($method == 'userTokenget'){
            $user_token = Session::get('user_token');
            return $response = Curl::to($url)
            ->withBearer($user_token)
            ->get();

        }
        
    } 
}


?>