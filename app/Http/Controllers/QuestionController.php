<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function getIndex($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $questions = $category->questions()->sorted()->paginate(12);

        $active = 'questions';
        $sub_active = 'all';

        return view('admin.questions.index', compact('category', 'questions', 'active', 'sub_active'));
    }

    public function getAdd($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $active = 'questions';
        $sub_active = 'add';

        return view('admin.questions.add', compact('category', 'active', 'sub_active'));
    }

    public function postAdd($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $question = $category->questions()->create($request->all());

        $order = $category->orders()->question();

        if (is_array($order))
        {
            array_unshift($order, $question->id);
        }
        else
        {
            $order = [$question->id];
        }

        $category->orders()->where('type', 'question')->update(['positions' => json_encode($order)]);

        return $question ? redirect()->to('admin/control/' . $slug . '/questions') : redirect()->back()->withInput();
    }

    public function getEdit($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $question = $category->questions()->find($id);

        $active = 'questions';
        $sub_active = '';

        return view('admin.questions.edit', compact('question', 'category', 'active', 'sub_active'));
    }

    public function postEdit($slug, $id, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $question = $category->questions()->find($id)->update($request->all());

        return $question ? redirect()->to('admin/control/' . $slug . '/questions') : redirect()->back()->withInput();
    }

    public function getDelete($slug, $id)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = Order::question();
        unset($order[array_search($id, $order)]);

        Order::where('type', 'question')->update(['positions' => json_encode(array_values($order))]);

        $category->questions()->find($id)->delete();

        return redirect()->back();
    }

    public function getSort($slug)
    {
        $category = $this->getCategoryBySlug($slug);

        $questions = $category->questions()->sorted()->get();

        $active = 'questions';
        $sub_active = 'sort';

        return view('admin.questions.sort', compact('category', 'questions', 'active', 'sub_active'));
    }

    public function getSortNew($slug, Request $request)
    {
        $category = $this->getCategoryBySlug($slug);

        $order = explode(',', $request->input('sort'));

        $jsonOrder = json_encode($order);

        $category->orders()->where('type', 'question')->update(['positions' => $jsonOrder]);

        echo $slug;
    }
}
