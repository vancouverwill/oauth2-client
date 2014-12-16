<?php

namespace League\OAuth2\Client\Provider;


class Nike extends IdentityProvider {

    public $responseType = 'json';

    public function urlAuthorize()
    {
        return 'https://api.nike.com/oauth/2.0/authorize';
    }

    public function urlAccessToken()
    {
        return 'https://api.nike.com/oauth/2.0/token';
    }


    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        return "nike has no user details API call";
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        // This function is where we can add and modify user Details.
//        return $response;
        return "userDetails";
    }

    public function userUid($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
//        return $response->id;
        return "userUid";
    }

    public function userEmail($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
//        return isset($response->email) && $response->email ? $response->email : null;
        return null;
    }

    public function userScreenName($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return "userScreenName";
    }
} 