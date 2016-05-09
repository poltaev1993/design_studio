<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use Agent;

class PageController extends Controller
{
    public function getIndex($slug)
    {
        //$category = $this->getCategoryBySlug($slug);

        $category = Category::where('url', $slug)
            ->with('greetings')
            ->with('slides')
            ->with('members')
            ->with('about')
            ->with('processes')
            ->with('projects')
            ->with('reviews')
            ->with('questions')
            ->with('partners')
            ->first();

        $view_path = Agent::isMobile() ? 'mobile.' : '';

        return view($view_path . 'pages.page', compact('category'));
    }

    public function postCallbackRequest(Request $request)
    {
        $slug = $request->input('slug');
        $category = $this->getCategoryBySlug($slug);

        $category->requests()->create($request->all());

        Mail::send('emails.callback', ['data' => (object) $request->all(), 'category' => $category], function($mail) {
            if (app()->environment() == 'production')
                $mail->to('ilyaskali@gmail.com')->subject('Новая заявка на звонок на сайте ilyaskali.com');

            $mail->to('zzmj95@gmail.com')->subject('Новая заявка на звонок на сайте ilyaskali.com');
        });

        echo '<h2>Спасибо, наши менеджеры перезвонят Вам в ближайшее время!</h2>';
    }
}
