<?php

namespace App\Http\Controllers;

use App\Models\Playbook;
use App\Models\DefaultStat;
use Illuminate\Http\Request;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stats = ["pow", "ele", "gen", "glam", "biz"];
        return view('playbooks.create', compact('stats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Playbook $playbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playbook $playbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playbook $playbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Playbook $playbook)
    {
        //
    }

}
