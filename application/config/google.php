<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '902891957174-54ng6ubdmu98ikvhseprls2b7snke447.apps.googleusercontent.com';
$config['google']['client_secret']    = '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';
$config['google']['redirect_uri']     = 'http://localhost/greenlight/Register/login';
$config['google']['application_name'] = 'GREENLIGHT';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();