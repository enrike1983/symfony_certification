<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\BrowserKit;
use Symfony\Component\BrowserKit\Client as BaseClient;
use Symfony\Component\BrowserKit\Response;

class Client extends BaseClient
{
    protected function doRequest($request)
    {
        // ... convert request into a response

        return new Response($content, $status, $headers);
    }
}

$client = new Client();
$crawler = $client->request('GET', 'http://symfony.com');