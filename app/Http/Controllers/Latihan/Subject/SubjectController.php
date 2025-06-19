<?php

namespace App\Http\Controllers\Latihan\Subject;

use App\Http\Controllers\Controller;
use App\Http\Requests\Latihan\Subject\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('subjects.index', ['subjects' => $subjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.form-pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        $validateData = $request->validated();

        Subject::create($validateData);
        $request->session()->flash('pesan', "Penambahan data{$validateData['subject_name']} berhasil");

        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.show', ['subject' => $subject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.edit', ['subject' => $subject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectRequest $request, string $id)
    {
        $validateData = $request->validated();

        // $validateData['birth_date'] = Carbon::now();
        $subject = Subject::findOrFail($id);
        Subject::where('id', $subject->id)->update($validateData);

        return redirect()->route('subjects.show', ['subject' => $subject->id])->with('pesan', "Update data {$validateData['subject_name']} berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')->with('pesan', "Hapus data $subject->subject_name berhasil");
    }
}
