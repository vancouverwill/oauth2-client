<?php

namespace League\OAuth2\Client\Provider;

use League\OAuth2\Client\Entity\User;


class Jawbone extends AbstractProvider
{
    public $responseType = 'json';

    public function urlAuthorize()
    {
        return 'https://jawbone.com/auth/oauth2/auth';
    }

    public function urlAccessToken()
    {
        return 'https://jawbone.com/auth/oauth2/token';
    }


    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        // return 'https://www.strava.com/api/v3/athlete?access_token=' . $token;
        return 'https://jawbone.com/nudge/api/v.1.1/users/' . $token;
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        // This function is where we can add and modify user Details.
        return $response;
    }

}
