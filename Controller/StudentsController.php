<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

const STUDENTS = '/students';

class StudentsController extends Controller
{
     
     // Display a listing of the record.
     
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    
    // Form for creating a new record.

    public function create()
    {
        return view('students.create');
    }

    
     // Store new record in database.
    
    public function store(Request $request)
    {
        $request->validate([
            'matric_no' => 'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'offence'=>'required',
            'price'=>'required' 
        ]);
        $students = new Students([
            'matric_no' => $request->get('matric_no'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'offence' => $request->get('offence'),
            'price' => $request->get('price')
        ]);
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Details Saved!');
    }
   
     // Form to edit student record
    
    public function edit($id)
    {
        $students = Students::find($id);
        return view('students.edit', compact('students'));  
    }

    // Form to update record
     
    public function update(Request $request, $id)
    {
        $request->validate([
            'matric_no' => 'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'offence'=>'required',
            'price'=>'required' 
        ]);
        $students = Students::find($id);
        $students->matric_no =  $request->get('matric_no');
        $students->first_name =  $request->get('first_name');
        $students->last_name = $request->get('last_name');
        $students->offence =  $request->get('offence');
        $students->price = $request->get('price');
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Updated!');
    }

    //Form to remove record and delete from database
     
    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect(STUDENTS)->with('success', 'Student Deleted!');
    }
}
