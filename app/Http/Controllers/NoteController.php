<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::where('day', 'Senin')->get();
        return response()->json(['notes' => $notes]);
    }
    public function selasa()
    {
        $notes = Note::where('day', 'selasa')->get();
        return response()->json(['notes' => $notes]);
    }
    public function rabu()
    {
        $notes = Note::where('day', 'rabu')->get();
        return response()->json(['notes' => $notes]);
    }
    public function kamis()
    {
        $notes = Note::where('day', 'kamis')->get();
        return response()->json(['notes' => $notes]);
    }
    public function jumat()
    {
        $notes = Note::where('day', 'jumat')->get();
        return response()->json(['notes' => $notes]);
    }
    public function sabtu()
    {
        $notes = Note::where('day', 'sabtu')->get();
        return response()->json(['notes' => $notes]);
    }
    public function minggu()
    {
        $notes = Note::where('day', 'minggu')->get();
        return response()->json(['notes' => $notes]);
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
        $this->validate($request, [
            'day'=>'required',
            'name'=>'required',
            'description'=>'required',
        ]);
        Note::create([
            'day'=>$request->day,
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return response()->json(['message' => 'Berhasil di simpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return back()->with('success' , 'Data berhasil di hapus');

    }
}
