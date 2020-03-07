<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PagesController extends Controller
{
    public function index() {
        //return 'Index page';
        $title = 'Welcome To Cat Facts!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    /*public function getfacts() {
        $title = 'Cat Facts';
        return view('pages.getfacts')->with('title', $title);
    }*/

    public function getfacts()
    {
        $title = 'Cat Facts';

        // Api Call
        $client = new Client();
        $response = $client->request('GET', 'https://catfact.ninja/facts?limit=5&max_length=140');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $body = json_decode($body);
        $facts_data = $body->data;

        $data = array(
            'title' => $title,
            'facts' => $facts_data
        );

        return view('pages.getfacts')->with($data);
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
}