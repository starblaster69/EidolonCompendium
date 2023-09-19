@extends('layout.web')

@section('pageTitle', 'Playbooks')

@section('content')
    <h1>Playbooks</h1>

    @foreach($playbooks as $playbook)
        <div>
            <h2>{{$playbook['playbook_name']}}</h2>
            <h4>{{$playbook['edition']}}st edition version</h4>
            <h3>{{$playbook['ability_phrase']}}</h3>
            <span>{{$playbook['default_stats']}}</span>

{{--            move this to specific playbook view, excess information here--}}
{{--            <div>--}}
{{--                <h3>Starter Move</h3>--}}
{{--                <ul>--}}
{{--                    @foreach($starter_moves as $starter_move)--}}
{{--                        <li>--}}
{{--                            <h4>{{$starter_move['move_name']}}</h4>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}

{{--                </ul>--}}
{{--            </div>--}}
        </div>
    @endforeach

@endsection
