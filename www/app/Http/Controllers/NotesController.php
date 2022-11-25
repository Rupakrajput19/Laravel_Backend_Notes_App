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

class NotesController extends Controller
{

    // public function saveUser(Request $request)
    // {
    //     $user = new saveUser();
    //     $user->name = $request->get('name');
    //     $user->mobile = $request->get('mobile');
    //     $user->email = $request->get('email');
    //     $user->password = $request->get('password');
    //     $user->save();
    //     return response()->json([
    //         'status' => 'ok',
    //         'message' => 'User data saved succesfully!'
    //     ], 200);
        
    // }
    // public function loginUser(){
    //     $userData = DB::table('user_data')->get();
    //     return response()->json([
    //         'status' => 'ok',
    //         'userData' =>  $userData
    //     ], 200);
    // }
    public function saveNotes(Request $request)
    {
        $note = new Notes();
        $note->title = $request->get('title');
        $note->description = $request->get('description');
        // $note = Notes::create($request->all());
        $note->save();
        return response()->json([
            'status' => 'ok',
            'message' => 'Notes saved succesfully!'
        ], 200);
        
    }

    public function getNotes(){
        $notesData = DB::table('notes')->get();
        return response()->json([
            'status' => 'ok',
            'notesData' =>  $notesData
        ], 200);
    }

    public function deleteNotes(Request $request , $id){
        // $noteDelete = $request->id;
        $delete = Notes::findorfail($id);
        $delete->delete();
        return response()->json([
            'status' => 'ok',
            'message' => 'Notes Deleted!'
        ]);
    }

    public function updateNotes(Request $request , $id){
        $update = Notes::find($id);
        $update->update($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Notes updated!'
        ]);
    }
}