<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoftwareSkill;

class SoftwareSkillController extends Controller
{
    public function SoftwareSkill()
    {
        $data = SoftwareSkill::paginate(4);
        return view('admin.soft_skill.index', compact('data'));
    }
    public function SoftwareSkillPost(Request $request)
    {
        $request->validate([
            'soft_skill_name' => 'required',
            'soft_skill_percentage' => 'required',

        ]);
        SoftwareSkill::insert([
            'soft_skill_name' => $request->soft_skill_name,
            'soft_skill_percentage' => $request->soft_skill_percentage,
        ]);

        toasterSuccess('Data added successfully');
        return redirect()->back();
    }
    public function SoftwareSkillDelete($delete_id)
    {
        SoftwareSkill::find($delete_id)->delete();


        toasterSuccess('Data Deleted Successfully');
        return redirect()->back();
    }
    public function SoftwareSkillView($view_id)
    {
        $data = SoftwareSkill::find($view_id);
        return view('admin.soft_skill.edit', compact('data'));
    }
    public function SoftwareSkillUpdate(Request $request)
    {

        SoftwareSkill::find($request->soft_skill_id)->update([
            'soft_skill_name' => $request->soft_skill_name,
            'soft_skill_percentage' => $request->soft_skill_percentage,
        ]);
        toasterSuccess('Data updated successfully');
        return redirect()->back();
    }
}
