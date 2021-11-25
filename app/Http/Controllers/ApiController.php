<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllStudents() {
        $students = Student::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200);
    }

    //index function
    public function index() {        
        $students = Student::all();        
        return view('students.index', compact('students'));    
    }

    //store function
    //public function store(Request $request)    {        $request->validate([            'first_name'=>'required',            'last_name'=>'required',            'email'=>'required'        ]);        $contact = new Contact([            'first_name' => $request->get('first_name'),            'last_name' => $request->get('last_name'),            'email' => $request->get('email'),            'job_title' => $request->get('job_title'),            'city' => $request->get('city'),            'country' => $request->get('country')        ]);        $contact->save();        return redirect('/contacts')->with('success', 'Contact saved!');    }

    //create function
    //public function create() { return view('contacts.create'); }

    //edit function
    //public function edit($id)    {        $contact = Contact::find($id);        return view('contacts.edit', compact('contact'));            }

    //update function
    //public function update(Request $request, $id)    {        $request->validate([            'first_name'=>'required',            'last_name'=>'required',            'email'=>'required'        ]);        $contact = Contact::find($id);        $contact->first_name =  $request->get('first_name');        $contact->last_name = $request->get('last_name');        $contact->email = $request->get('email');        $contact->job_title = $request->get('job_title');        $contact->city = $request->get('city');        $contact->country = $request->get('country');        $contact->save();        return redirect('/contacts')->with('success', 'Contact updated!');    }

    //destroy function
    //public function destroy($id)    {        $contact = Contact::find($id);        $contact->delete();        return redirect('/contacts')->with('success', 'Contact deleted!');    }

    public function create(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();

        /* return response()->json([
            "message" => "student record created"
        ], 201); */
        return redirect('/students')->with('success', 'Student saved!');
    }

    public function getStudent($id) {
        if(Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            //$student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            //return response($student, 200);
            return view('students.single', compact('student'));
        } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
        }
    }

    public function show($id) {
        if(Student::where('id', $id)->exists()) {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }
}

    public function update(Request $request, $id) {
        if(Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->name = is_null($request->name) ?  $student->name : $request->name;
            $student->course = is_null($request->course) ? $student->course : $request->course;
            $student->save();

            /* return response()->json([
                "message" => "Records updated successfully"
            ], 200); */
            return redirect('/students')->with('success', 'Student updated!');
        } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
        }
    }

    public function deleteStudent($id) {
        if(Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->delete();

            /* return response()->json([
                "message" => "Records deleted"
            ], 202); */
            return redirect('/students')->with('success', 'Student deleted!');
        } else {
            return response->json([
                "message" => "Student not found"
            ], 404);
        }
    }
}
