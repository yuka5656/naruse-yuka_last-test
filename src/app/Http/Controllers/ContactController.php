<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell-1', 'tell-2', 'tell-3', 'address', 'building',  'category_id', 'detail']);

        $category = $request->only(['content']);
        // $categories = Category::all();

        // return $category;
        return view('confirm', compact('contact', 'category'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell-1', 'tell-2', 'tell-3', 'address', 'building', 'category_id', 'detail']);

        // $category = $request->only(['content']);

        Contact::create($contact);
        // Category::create($category);
        // return $contact;
        return view('thanks');
    }

}
