<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalSkill;
class PersonalSkillController extends Controller
{
    public function PersonalSkill()
    {
        $data = PersonalSkill::paginate(4);
        return view('admin.per_skill.index', compact('data'));
    }
    public function PersonalSkillPost(Request $request)
    {
        $request->validate([
            'per_skill_name' => 'required',
            'per_skill_percentage' => 'required',

        ]);
        PersonalSkill::insert([
            'per_skill_name' => $request->per_skill_name,
            'per_skill_percentage' => $request->per_skill_percentage,
        ]);

        toasterSuccess('Data added successfully');
        return redirect()->back();
    }
    public function PersonalSkillDelete($delete_id)
    {
        PersonalSkill::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
    }
    public function PersonalSkillView($view_id)
    {
        $data = PersonalSkill::find($view_id);
        return view('admin.per_skill.edit', compact('data'));
    }
    public function PersonalSkillUpdate(Request $request)
    {

        PersonalSkill::find($request->per_skill_id)->update([
            'per_skill_name' => $request->per_skill_name,
            'per_skill_percentage' => $request->per_skill_percentage,
        ]);
        toasterSuccess('Data updated successfully');
        return redirect()->back();
    }
}
