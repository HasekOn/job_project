<?php

namespace App\Http\Controllers;




use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller {

        //Function for creating members
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

    //Function for show 'change window'
    public function showEditScreen(Member $member){
        return view('edit-member', ['member' => $member]);
    }

    //Function for save changes of member
    public function saveEditedMember(Member $member, Request $request){
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


        $member->update($inputFields);
        return redirect('/');
    }

    //function for deleting members
    public function showDeleteScreen(Member $member){
        return view('delete-member', ['member' => $member]);
    }
    public function deleteMember(Member $member){
        $member->delete();
        return redirect('/');
    }

    public function notDeleteMember(Member $member){
        return redirect('/');
    }
}
