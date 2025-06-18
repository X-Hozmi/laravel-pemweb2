<?php

namespace App\Http\Controllers\Latihan\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Student::all();

        return view('students.new.index', ['mahasiswas' => $mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.new.form-pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'npm' => 'required|size:8|unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'major' => 'required',
            'address' => '',
        ]);
        $validateData['birth_date'] = Carbon::now();
        Student::create($validateData);
        $request->session()->flash('pesan', "Penambahan data{$validateData['name']} berhasil");

        return redirect()->route('mahasiswas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Student::findOrFail($id);

        return view('students.new.show', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Student::findOrFail($id);

        return view('students.new.edit', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'npm' => 'required|size:8|unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:P,L',
            'major' => 'required',
            'address' => '',
        ]);
        // $validateData['birth_date'] = Carbon::now();
        $mahasiswa = Student::findOrFail($id);
        Student::where('id', $mahasiswa->id)->update($validateData);

        return redirect()->route('mahasiswas.show', ['mahasiswa' => $mahasiswa->id])->with('pesan', "Update data {$validateData['name']} berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Student::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('pesan', "Hapus data $mahasiswa->name berhasil");
    }
}
