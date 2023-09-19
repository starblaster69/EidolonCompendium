<?php

namespace App\Http\Controllers;

use App\Models\Playbook;
use App\Models\DefaultStat;
use Illuminate\Support\Facades\Route;

class PlaybookController extends Controller {

    public function index() {
        $playbooks = Playbook::all();
        $defaultStats = [];

        foreach ($playbooks as $playbook) {
            $statSpread = DefaultStat::getStats('playbook_id', $playbook['playbook_id']);
            array_push($defaultStats, $statSpread);
        }

        return view('playbooks.index', compact('playbooks', 'defaultStats'));
    }

}
