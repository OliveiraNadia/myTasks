<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glogin extends CI_Controller
{
    public function index()
    {
        $this->verificaSessao();
        require_once base_url('assets/vendor/autoload.php');
        
        $client_id      = '756248637018-l205at60umigee3ctivv5qf338u268rn.apps.googleusercontent.com';
        $client_secret  = '-YBmSBP5oVApYmBrwELd8Hfz';
        $redirect_uri   = 'http://localhost/myTasks/';
        
        $client = new Google_Client();
        $client->setApplicationName( 'login' );
        $client->setClientId( $client_id );
        $client->setClientSecret( $client_secret );
        $client->setRedirectUri( $redirect_uri );
        $client->addScope( 'https://www.googleapis.com/auth/userinfo.email' );
        
        $objOAuthService = new Google_Service_Oauth2( $client );
      
        if( isset( $_REQUEST[ 'logout' ] ) )
        {
            $client->revokeToken( $_SESSION[ 'access_token' ] );
            unset( $_SESSION[ 'access_token' ] );
            header( 'Location: '.filter_var( $redirect_uri, FILTER_SANITIZE_URL ) );
        }
    
        if( isset( $_GET[ 'code' ] ) )
        {
          $client->authenticate( $_GET[ 'code' ] );
          $_SESSION[ 'access_token' ] = $client->getAccessToken();
          header( 'Location: '.filter_var( $redirect_uri, FILTER_SANITIZE_URL ) );
        }
        
        if( isset( $_SESSION[ 'access_token' ] ) && $_SESSION[ 'access_token' ] )
        {
            $client->setAccessToken( $_SESSION[ 'access_token' ] );
        }

        $userData = array();
        $authUrl  = '';
       
        if( $client->getAccessToken() )
        {
            $userData = $objOAuthService->userinfo->get();
        
            $_SESSION['access_token'] = $client->getAccessToken();
        }
        else
        {
            $authUrl = $client->createAuthUrl();
        }

        $this->load->view('login', array( 'userData'=>$userData, 'authUrl'=>$authUrl ) );
    }
     public function verificaSessao()
    {
		if( $this->session->$userData( 'logout' )==false )
        {
			redirect( 'login' );
		}
	}
}
