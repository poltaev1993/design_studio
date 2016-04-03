<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class PageController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        return view('pages.page', compact('category'));
    }

    public function postCallbackRequest(Request $request)
    {
        $slug = $request->input('slug');
        $category = $this->getCategoryBySlug($slug);

        $category->requests()->create($request->all());

        Mail::send('emails.callback', ['data' => (object) $request->all(), 'category' => $category], function($mail) {
            $mail->to('ilyaskali@gmail.com')->subject('Новая заявка на звонок на сайте ilyaskali.com');
        });

        echo '<h2>Спасибо, наши менеджеры перезвонят Вам в ближайшее время!</h2>';
    }
}
