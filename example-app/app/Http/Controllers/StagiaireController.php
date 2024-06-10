<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStagiaireRequest;
use App\Http\Requests\UpdateStagiaireRequest;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('index', compact('stagiaires'));
    }

    public function create()
    {
        return view('create');
    }

 public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Create a new Stagiaire instance with the validated data
        Stagiaire::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('index')->with('success', 'Nouveau stagiaire ajouté.');
    }

    public function edit(Stagiaire $stagiaire)
    {
        return view('edit', compact('stagiaire'));
    }

    // Handle the form submission and update the stagiaire
    public function update(Request $request, Stagiaire $stagiaire)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Update the stagiaire with the validated data
        $stagiaire->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('index')->with('success', 'Stagiaire mis à jour.');
    }
    public function destroy(Stagiaire $stagiaire)
    {
        $stagiaire->delete();
        return redirect()->route('index')->with('success', 'Stagiaire supprimé   .');
    }

    

    public function search(Request $request)
    {
        $search = $request->input('search');

        if (!empty($search)) {
            $stagiaires = Stagiaire::where('nom', 'like', '%' . $search . '%')->get();
        } else {
            $stagiaires = Stagiaire::all();
        }

        return view('index', compact('stagiaires'));
    }
    //Tous les stagiaires supprimés
    public function delete()
    {
        Stagiaire::truncate();
        return redirect()->route('index')->with('success', 'Tous les stagiaires ont été supprimés .');
    }
}
