<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
           'firstname' => 'required',
           'lastname' => 'required'
        ]);
        $fullName = $request->input('firstname').' '.$request->input('lastname');
        $post = [
            'fullname' => $fullName
        ];
        // return view('nameentry-form')->with('post', json_encode($post));
        return redirect('/nameentry')->with('post', json_encode($post));

    }   
}
