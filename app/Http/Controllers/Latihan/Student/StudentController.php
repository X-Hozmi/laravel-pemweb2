<?php

namespace App\Http\Controllers\Latihan\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = DB::select('SELECT * FROM students');

        dump($result);
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
    public function store(Request $request, string $method)
    {
        $result = match (true) {
            $method === 'sql' => DB::insert("INSERT INTO students(npm, name, birth_date, gpa) VALUES('19003036', 'Sari Citra Lestari', '2001-12-31', 3.5)"),
            $method === 'timestamp' => DB::insert("INSERT INTO students(npm, name, birth_date, gpa, created_at, updated_at) VALUES('19002032', 'Rina Kumala Sari', '2000-06-28', 3.4, now(), now())"),
            $method === 'prepared' => DB::insert('INSERT INTO students(npm, name, birth_date, gpa, created_at, updated_at) VALUES(?,?,?,?,?,?)', ['18012012', 'James Situmorang', '1999-04-02', 2.7, now(), now()]),
            $method === 'binding' => DB::insert('INSERT INTO students(npm, name, birth_date, gpa, created_at, updated_at) VALUES(:npm,:nama,:tgl,:ipk,:created,:updated)', [
                'npm' => '19005011',
                'nama' => 'Riana Putria',
                'tgl' => '2000-11-23',
                'ipk' => 2.7,
                'created' => now(),
                'updated' => now(),
            ]),
            default => throw new \Exception('Invalid method'),
        };

        dump($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $result = DB::update(
            'UPDATE students SET created_at = now(), updated_at = now()
            WHERE npm = ?',
            ['19003036']
        );

        dump($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $result = DB::delete(
            'DELETE FROM students WHERE name = ?',
            ['James Situmorang']
        );

        dump($result);
    }
}
