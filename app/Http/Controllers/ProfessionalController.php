<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professionals = Professional::with('category')->orderBy('created_at', 'desc')->paginate(10);

        return view('professionals.index', [ "professionals" => $professionals ]);
    }
    public function show($id)
    {
        $professional = Professional::with('category')->findOrFail($id);

        return view('professionals.show', ["professional" => $professional]);
    }
    public function create()
    {
        $categories = Category::all();

        return view('professionals.create', ["categories" => $categories]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate ([
            "name"=> "required|string|max:255",
            "skill"=> "required|string|min:5|max:255",
            "bio"=> "required|string|min:20|max:1000",
            "category_id"=> "required|exists:categories,id"
        ]);

        Professional::create($validated);

        return redirect()->route('professionals.index');
    }
}
