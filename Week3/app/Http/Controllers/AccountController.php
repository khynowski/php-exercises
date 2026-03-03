<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TODO
        return "Tu będzie lista kont";
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
        return "Dummy Implementation";
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
        return "Dummy Implementation";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Usuwanie konta " . $id;
    }
}
