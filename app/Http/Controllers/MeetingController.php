<?php
namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function renderIframe($link)
    {
        $teacher = Teacher::where('meeting_link', $link)->first();

        if (!$teacher) {
            abort(404);
        }

        return view('jitsi-iframe', [
            'startWithAudioMuted' => $teacher->start_with_audio_muted,
            'startWithVideoMuted' => $teacher->start_with_video_muted,
            'teacher' => $teacher,
            'meetingLink' => $link,
        ]);
    }
}
