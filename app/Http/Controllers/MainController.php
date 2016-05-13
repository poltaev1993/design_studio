<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use Illuminate\Http\Request;

use App\Comment;
use App\Callback;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Larabros\Elogram\Client;
use Vinkla\Instagram\Facades\Instagram;

class MainController extends Controller
{
    public function getIndex()
    {
        $categories = Category::sorted()->get();

        return view('pages.index', compact('categories'));
    }

    public function getAbout()
    {
        $abouts = About::latest()->get();

        return view('pages.about', [
            'active' => 'about',
            'abouts' => $abouts
        ]);
    }

    public function getInstagram()
    {
        //$code = '542820637.5bcb025.22cf88619e4a478c8ff7c55c0c648ddd';
        //Instagram::getAccessToken($code);
        $instagram = new Client('5bcb0257f77743348293fadbe9c586bc', '87f4c38001ab4660bbdc97d4029794d5',
            '{ "access_token": "2955795164.5bcb025.167ab063428d42dba45c5c355006a044"}', 'http://ilyaskali.dev/instagram-code');

        $response = $instagram->users()->getMedia();

        $image = $response->get()->first()['images']['low_resolution']['url'];

        echo '<img src="' . $image . '">';
        die;
    }

    public function getInstagramCode(Request $request)
    {
        $code = $request->input('access_token');
        echo '<pre>', var_dump($code), '</pre>'; die;
    }
}
