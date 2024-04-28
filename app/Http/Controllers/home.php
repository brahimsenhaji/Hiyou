<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use App\Models\contact;
use App\Models\chat;

class home extends Controller
{
    function index(Request $request){

        $user = Auth::user();
        $email = $user->email;
        $username = $user->name;
    
        $requistUser = $request->route('username');

       

        $contact = Contact::distinct()->where('userId', $user->id)->get();
        $contactUser = $contact->pluck('username')->unique();

        $ContacteduserId = Contact::where('username', $requistUser)->first();
    
        if ($ContacteduserId) {
            $userId = $ContacteduserId->contactId;
            $userEmail = User::where('id', $userId)->pluck('email')->first();
        } else {
            $userEmail = null;
        }
    

        $messages = Chat::where(function($query) use ($username, $requistUser) {
            $query->where('contactUser', $username)
                ->where('receierUser', $requistUser);
        })
        ->orWhere(function($query) use ($username, $requistUser) {
            $query->where('contactUser', $requistUser)
                ->where('receierUser', $username);
        })
        ->get();
    

        return view('home', compact('email', 'username', 'contactUser', 'userEmail', 'requistUser','messages'));
    }
    
    function search($keyword){
        $user = Auth::user();

        $users = User::where('name', 'like', '%' . $keyword . '%')
        ->where('id', '!=', $user->id)
        ->get();

        // Return the search results as JSON
        return response()->json($users);
    }
    public function inviteUser(Request $request)
    {
        $user = Auth::user();
        $id = $user->id;

        $username = $request->input('username');
        $contactId = $request->input('id');
        
        contact::create([
            'username' => $username,
            'userId' => $id,
            'contactId' => $contactId
        ]);

        return response()->json(['message' => 'User invited successfully', 'username' => $username]);
    }
    public function sendMessage(Request $request){
         $request->validate([
            'message' => 'required|string',
        ]);

        $user = Auth::user();
        $contactUser = $request->route('username');

        $chat = Chat::create([
            'contactUser' => $user->name,
            'receierUser' => $contactUser,
            'message' => $request->message,
        ]);
        

        return response()->json(['message' => 'Message sent successfully'], 200);
    }
    public function displayMessages(Request $request){
        
        $user = Auth::user();
        $username = $user->name;
    
        $requistUser = $request->route('username');

        $messages = Chat::where(function($query) use ($username, $requistUser) {
            $query->where('contactUser', $username)
                ->where('receierUser', $requistUser);
        })
        ->orWhere(function($query) use ($username, $requistUser) {
            $query->where('contactUser', $requistUser)
                ->where('receierUser', $username);
        })
        ->get();

        return response()->json(['messages' => $messages]);
    }
 
    public function notifications(Request $request)
    {
    $user = Auth::user();
    $username = $user->name;
    
    $requistUser = $request->route('username');

    // Get the last notification check time from the session
    $lastNotificationCheck = $request->session()->get('last_notification_check_' . $user->id);

    // If the last notification check time is not set, use a default value
    if (!$lastNotificationCheck) {
        $lastNotificationCheck = now()->subDay(); // Default to 24 hours ago
    }

    $messages = Chat::where(function($query) use ($username, $requistUser) {
            $query->where('contactUser', $username)
                  ->where('receierUser', $requistUser);
        })
        ->orWhere(function($query) use ($username, $requistUser) {
            $query->where('contactUser', $requistUser)
                  ->where('receierUser', $username);
        })
        ->get();

        $messageCount = $messages->count();
        
        // Get new messages added since the last check
        $newMessages = Chat::where('created_at', '>', $lastNotificationCheck)->get();

        // Update the last notification check time in the session
        $request->session()->put('last_notification_check_' . $user->id, now());

        return response()->json([
            'message_count' => $messageCount,
            'new_messages' => $newMessages
        ]);
    }


}
