<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Psy\VersionUpdater\SelfUpdate;

class HomeController extends Controller
{

    public function getProgramPart($id)
    {
        return Participant::where('program_id', $id)->orderBy('score', 'DESC')->get();
    }

    public function getCollectProgram($program)
    {
        collect($program)->filter(function ($item, $key) {
            $item->rank = $key + 1;
            $item->save();
            ($key == 0) ? $item->rank = 2 : false;
            ($key == 1) ? $item->rank = 1 : false;
            $item->save();
        });
    }

    public function getProgramPartRanking($id)
    {
        return Participant::where('program_id', $id)->orderBy('rank', 'ASC')->filter(request(['search', 'program']))->paginate(3);
    }

    public function index()
    {

        $web = $this->getProgramPart(1);
        $flutter = $this->getProgramPart(2);
        $ui = $this->getProgramPart(3);
        $kotlin = $this->getProgramPart(4);
        $english = $this->getProgramPart(5);

        $this->getCollectProgram($web);
        $this->getCollectProgram($flutter);
        $this->getCollectProgram($ui);
        $this->getCollectProgram($kotlin);
        $this->getCollectProgram($english);

        $webParticipants = $this->getProgramPartRanking(1);
        $flutterParticipants = $this->getProgramPartRanking(2);
        $uiParticipants = $this->getProgramPartRanking(3);
        $kotlinParticipants = $this->getProgramPartRanking(4);
        $englishParticipants = $this->getProgramPartRanking(5);

        return view('welcome', [
            'webParticipants' => $webParticipants,
            'flutterParticipants' => $flutterParticipants,
            'uiParticipants' => $uiParticipants,
            'kotlinParticipants' => $kotlinParticipants,
            'englishParticipants' => $englishParticipants,
        ]);
    }
}
