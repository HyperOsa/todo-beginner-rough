<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        $items = [
            'todos' => $todos,
        ];
        return view('index', $items);
    }

    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }

    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->input('id'))->update($form);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->input('id'))->delete();
        return redirect('/');
    }
}
