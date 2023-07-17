<?php

namespace App\Http\Controllers\Produits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitsController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function listing()
    {
        return view('produits.listing', ['produits' => Produit::all()]);
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('produits.form');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'eau'       => ['required', 'string', 'max:255'],
            'glucides'  => ['required', 'string', 'max:255'],
            'fibres'    => ['required', 'string', 'max:255'],
            'lipides'   => ['required', 'string', 'max:255'],
            'proteines' => ['required', 'string', 'max:255'],
        ]);

        $produit = Produit::create([
            'name'      => $request->name,
            'eau'       => $request->eau,
            'glucides'  => $request->glucides,
            'fibres'    => $request->fibres,
            'lipides'   => $request->lipides,
            'proteines' => $request->proteines,
            'ident'     => uniqid(),
            'user'      => $request->session()->get('user_ident'),
        ]);

        return redirect("/produit/form");
    }
}
