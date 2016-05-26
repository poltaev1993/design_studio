<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Larabros\Elogram\Client;

use Mail;
use Agent;
use Cache;

class PageController extends Controller
{
    public function getIndex($slug)
    {
        $hours_cached = 6;

        $category = Cache::remember('category.' . $slug, $hours_cached * 60, function() use ($slug) {
            return Category::where('url', $slug)
                ->with('greetings')
                ->with('slides')
                ->with('members')
                ->with('about')
                ->with('processes')
                ->with('projects')
                ->with('reviews')
                ->with('questions')
                ->with('blogs')
                ->with('partners')
                ->first();
        });

        $instagram_blogs = Blog::getInstagramAvailableSections();
        $is_instagram_available = in_array($slug, $instagram_blogs);

        $is_instagram_enabled = $instagram_data = false;
        if ($is_instagram_available) {
            $is_instagram_enabled = $category->is_instagram_enabled;
            if ($is_instagram_enabled) {
                $data = Blog::getInstagramData();

                $instagram = new Client(
                    $data[$slug]['client_id'], $data[$slug]['client_secret'],
                    $data[$slug]['access_token'], $data[$slug]['redirect_url']
                );

                $instagram_data = Cache::remember('instagram.' . $slug, null, function() use ($instagram) {
                    return $instagram->users()->getMedia();
                });
            }
        }

        $view_path = Agent::isMobile() ? 'mobile.' : '';

        return view($view_path . 'pages.page',
            compact(
                'category', 'is_instagram_enabled', 'instagram_data'
            )
        );
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
