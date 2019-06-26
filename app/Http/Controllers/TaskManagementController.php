<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManagementController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function add(Request $request)
    {
        $name = $request->enterName;
        $phone = $request->enterPhone;
        $email = $request->enterEmail;
        return view('add', compact('name', 'phone', 'email'));
    }

    public function show($id)
    {
        return view('show', compact('id'));
    }

    public function edit($id)
    {
        return view('edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $name = $request->enterName;
        $phone = $request->entrPhone;
        $email = $request->enterEmail;
        return view('update', compact('id', 'name', 'email', 'phone'));
    }

    public function delete($id)
    {
        return view('delete', compact('id'));
    }

    public function destroy($id)
    {
        return view('destroy', compact('id'));
    }
}
