<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
    public function new()
    {
        return new Response('<html><body>Hello World !</body></html>');
    }

    public function index()
    {
        return new Response('<html><body>Hello World !</body></html>');
    }
}