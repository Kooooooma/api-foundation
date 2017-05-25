<?php

namespace ApiFoundation;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class Controller
{
    public function __construct()
    {
    }

    /**
     * @param $code
     * @param array $message
     * @param array $headers
     */
    public function responseJson($code, $message, $headers = array())
    {
        $jsonResponse = new JsonResponse();

        $jsonResponse->setStatusCode($code);
        $jsonResponse->setData($message);
        $jsonResponse->headers->add($headers);

        $jsonResponse->prepare(new Request());
        $jsonResponse->send();
    }

    /**
     * @param $code
     * @param string $message
     * @param array $headers
     */
    public function response($code, $message, $headers = array())
    {
        $response = new Response();

        $response->setStatusCode($code);
        $response->setContent($message);
        $response->setCharset('UTF-8');

        if ( !empty($headers) ) {
            $response->headers->add($headers);
        }

        $response->prepare(new Request());
        $response->send();
    }

    public function getDoctrine()
    {
        return ApiFoundation::$container->get('doctrine');
    }
}