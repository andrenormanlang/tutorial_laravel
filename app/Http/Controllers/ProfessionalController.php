<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professionals = Professional::orderBy('created_at', 'desc')->get();

        return view('professionals.index', [ "professionals" => $professionals ]);
    }
    public function show($id)
    {
        $professional = Professional::findOrFail($id);

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
