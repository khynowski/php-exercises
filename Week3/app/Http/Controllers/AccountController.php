<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Account::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Dummy Implementation";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'balance' => 'required|integer|min:0',
            'currency' => 'required|in:PLN,USD,EUR'
        ]);
        $account = Account::create($validated);

        return response()->json($account, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //TODO
        return "Pokaż konto o ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Dummy Implementation";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'balance' => 'required|integer|min:0',
            'currency' => 'required|in:PLN,USD,EUR'
        ]);

        $account = Account::findOrFail($id);
        $account->update($request->validate());
        return response()->json($account, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $account = Account::findOrFail($id);
        $account->delete();

        return response()->json(null, 204);
        
    }
}
