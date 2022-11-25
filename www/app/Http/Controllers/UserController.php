<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Role;
use Auth;
use Mail;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Password;
use App\Refuser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\Notes;


class UserController extends Controller
{
    
    public function saveUser(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->mobile = $request->get('mobile');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();
        return response()->json([
            'status' => 'ok',
            'message' => 'User data saved succesfully!'
        ], 200);
        
    }
    public function loginUser(){
        $userData = DB::table('users')->get();
        return response()->json([
            'status' => 'ok',
            'userData' =>  $userData
        ], 200);
    }

    // public function saveNotes(Request $request)
    // {
    //     $note = new Notes();
    //     $note->title = $request->get('title');
    //     $note->description = $request->get('description');
    //     $note->save();
    //     return response()->json([
    //         'status' => 'ok',
    //         'message' => 'Notes saved succesfully!'
    //     ], 200);
        
    // }

    // public function getNotes(){
    //     $notesData = DB::table('notes_data')->get();
    //     return response()->json([
    //         'status' => 'ok',
    //         'notesData' =>  $notesData
    //     ], 200);
    // }

    // public function deleteNotes(Request $request){
    //     $noteDelete = $request->id;
    //     $delete = Notes::findorfail($noteDelete);
    //     $delete->delete();
    //     return response()->json([
    //         'status' => 'ok',
    //         'message' => 'Notes Deleted!'
    //     ]);
    // }

    // public function updateNotes(Request $request){
    //     $noteupdate = $request->id;
    //     $update = Notes::findorfail($noteupdate);
    //     $update->update();
    //     return response()->json([
    //         'status' => 'ok',
    //         'message' => 'Notes updated!'
    //     ]);
    // }
}