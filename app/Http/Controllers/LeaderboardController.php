<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{

    public function index(Request $request)
    {

        $orderScore = Participant::orderBy('score', 'DESC')->get();

        collect($orderScore)->filter(function ($item, $key) {
            $item->rank = $key + 1;
            $item->save();
        });

        $participants = Participant::orderBy('score', 'DESC')->filter(request(['search', 'program']))->paginate(10);

        $programs = Program::all();

        return view('pages.leaderboard', [
            'participants' => $participants,
            'programs' => $programs,
        ]);
    }
}
