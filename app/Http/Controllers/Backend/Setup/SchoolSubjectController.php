<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\SchoolSubject;
use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    public function ViewSubject()
    {

        $data['allData'] = SchoolSubject::all();
        return view('backend.setup.school_subject.view_school_subject', $data);

    }


    public function SubjectAdd()
    {

        $data['allData'] = SchoolSubject::all();
        return view('backend.setup.school_subject.add_school_subject', $data);

    }

    public function SubjectStore(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|unique:school_subjects,name',
        ]);

        $data = new SchoolSubject();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'School Subject Successfully ',
            'alert-type' => 'success'

        );
        return redirect()->route('school.subject.view')->with($notification);

    }


    public function SubjectEdit($id)
    {

        $editData = SchoolSubject::find($id);
        return view('backend.setup.school_subject.edit_school_subject', compact('editData'));
    }


    public function SubjectUpdate(Request $request, $id)
    {
        $data = SchoolSubject::find($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:school_subjects,name,' . $data->id,

        ]);

        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'School Subject Updated Successfully ',
            'alert-type' => 'info'

        );
        return redirect()->route('school.subject.view')->with($notification);
    }


    public function SubjectDelete($id)
    {
        $user = SchoolSubject::find($id);
        $user->delete();

        $notification = array(
            'message' => 'School subject  Deleted Successfully ',
            'alert-type' => 'info'

        );
        return redirect()->route('school.subject.view')->with($notification);
    }
}