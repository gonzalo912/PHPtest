<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(5);
        return view('clients-panel', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('edit-form', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id = (int) $id;
        $client = Client::find($id);
        if($client){
            $client->name = $request->input('user');
            $client->email = $request->input('email');
            $client->age = $request->input('age');
            $client->phone = $request->input('phone');
            $client->status = $request->input('status');
            $client->save();
        }

        return redirect(route('clients'))->with('success', 'Client updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        // Check if the client exists
        if ($client) {
            // Delete the client
        $client->delete();
        }
        return redirect(route('clients'))->with('success', 'Client deleted successfully.');
    }
}
