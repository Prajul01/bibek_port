<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class UserDetails extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'DateOfBirth' => 'required',
            'degree' => 'required',
            'about_description' => 'required',
            'image_file'=>'required',
        ]);
        $file = $request->file('image_file');//image is checed if it exist or not
        if ($request->hasFile('image_file')) {//if it has image then the process to save it starts
            $fileName = uniqid("portfolio") . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/images/profile/'), $fileName);//image is saved inside the project
            $data['image'] = $fileName; // Add the image file name to the $data array so that image name will be saved in database
        }
//        dd($data);
        $about = Profile::create($data);
        return redirect()->route( 'user.index');
    }
    public function index(){
        $read=Profile::all();
        return view('users.about',compact('read'));
    }

    public function about($id)
    {
        $read = Profile::find($id);
        return view('users.about', compact('read'));
        // return view('users.about', ['read' => $read]);
    }
}
