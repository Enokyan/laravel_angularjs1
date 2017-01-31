<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mychat;

class ChatController extends Controller
{
    public function getChat(){
        return view('myauth/mychat');
    }

    public function sendMessage(Request $request){
        $message = $request->all();
        $to_id = $message['id'];
        $msg = $message['msg'];
        $msg = Mychat::create([
            'from_user'=> Auth::id(),
            'to_user'=> $to_id,
            'msg'=>  $msg,
            'status'=>  0
        ]);
        $auth = Auth::user()->name;
        return [$msg,$auth];
    }

    public function SelectMessages(Request $request){
        $message = $request->all();
        $to_user = $message['to_user'];


        Mychat::where('from_user', $to_user)
            ->where('to_user',Auth::id())
            ->where('status',0)
        ->update(['status' => 1]);

        $Messages = Mychat::select('*')
            ->leftJoin('users', function ($join) use($to_user) {
                $join->on('mychats.from_user', '=', 'users.id');
            })
            ->where('mychats.to_user','=',$to_user)
            ->where('mychats.from_user','=',Auth::id())
            ->orWhere('mychats.to_user','=',Auth::id())
            ->where('mychats.from_user', '=', $to_user)
            ->orderBy('mychats.created_at', 'asc')
            ->get();

            return $Messages;
    }

    public function SelectNewMessage(Request $request){
        $from_user = Auth::id();
        $to_user  = $request->to_user;
        $newmessages = Mychat::select('*')
            ->leftJoin('users', 'users.id', '=', 'mychats.from_user')
            ->where('from_user', $to_user)
            ->where('to_user', $from_user)
            ->where('status', 0)
            ->get();
        if (isset($newmessages)) {
            foreach ($newmessages as $value) {
                Mychat::where('chat_id', $value->chat_id)
                    ->update(['status' => 1]);
            }
        }
        return $newmessages;

    }
}
