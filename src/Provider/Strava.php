<?php

namespace League\OAuth2\Client\Provider;

class Strava extends IdentityProvider
{
    public $responseType = 'json';

    public function urlAuthorize()
    {
        return 'https://www.strava.com/oauth/authorize';
    }

    public function urlAccessToken()
    {
        return 'https://www.strava.com/oauth/token';
    }


    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        return 'https://www.strava.com/api/v3/athlete?access_token='.$token;
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        // This function is where we can add and modify user Details.
        return $response;
    }

    public function userUid($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return $response->id;
    }

    public function userEmail($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return isset($response->email) && $response->email ? $response->email : null;
    }

    public function userScreenName($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return $response->name;
    }

}
