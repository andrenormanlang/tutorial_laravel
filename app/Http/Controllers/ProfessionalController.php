<?php

namespace App\Http\Controllers;

use App\Models\Professional;
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
        return view('professionals.create');
    }
    public function store(Request $request)
    {
        return redirect('/professionals');
    }
}
