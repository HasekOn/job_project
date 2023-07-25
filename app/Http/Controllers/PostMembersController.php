<?php

namespace App\Http\Controllers;




use App\Models\Member;
use Illuminate\Http\Request;

class PostMembersController extends Controller
{
        public function createMember(Request $request){
            $inputFields = $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required',
                'birthDate' => 'required',
                'playerNumber' => 'required'
            ]);

            $inputFields['name'] = strip_tags($inputFields['name']);
            $inputFields['surname'] = strip_tags($inputFields['surname']);
            $inputFields['email'] = strip_tags($inputFields['email']);
            $inputFields['birthDate'] = strip_tags($inputFields['birthDate']);
            $inputFields['playerNumber'] = strip_tags($inputFields['playerNumber']);


            Member::create($inputFields);
            return redirect('/');
        }
}
