<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher; 
class JitsiController extends Controller
{
    public function showConfigForm()
    {
        return view('jitsi-config');
    }

    public function startMeeting(Request $request)
    {
        $startWithAudioMuted = $request->input('startWithAudioMuted', false);
        $startWithVideoMuted = $request->input('startWithVideoMuted', false);
    
        $meetingLink = uniqid(); 

       
        $user = Auth::user();
        $teacherName = $user->name;
    
      
       
$teacher = new Teacher([
    'name' => $teacherName,
    'meeting_link' => $meetingLink,
    'start_with_audio_muted' => boolval($startWithAudioMuted), // Converte para booleano
    'start_with_video_muted' => boolval($startWithVideoMuted), // Converte para booleano
]);
$teacher->save();

        
        return redirect()->route('teachers.index', [
            'link' => $meetingLink,
            'startWithAudioMuted' => $startWithAudioMuted ? 'true' : 'false',
            'startWithVideoMuted' => $startWithVideoMuted ? 'true' : 'false',
        ]);
    }

    public function renderIframe($link)
    {
      
        $startWithAudioMuted = request()->query('startWithAudioMuted', false);
        $startWithVideoMuted = request()->query('startWithVideoMuted', false);

        
        $teacher = Teacher::where('meeting_link', $link)->first();

        if (!$teacher) {
            abort(404);
        }

        return view('jitsi-iframe', [
            'meetingLink' => $link,
            'startWithAudioMuted' => $startWithAudioMuted,
            'startWithVideoMuted' => $startWithVideoMuted,
            'teacher' => $teacher,
        ]);
    }
    
}
