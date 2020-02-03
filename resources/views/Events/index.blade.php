@extends('layouts/master')

@section('content')
    <h1>A venir - {{$events->count()}} {{ str_plural('evenement', $events->count()) }}  </h1>

    {{-- count($events), $events->count() --}}
    @if(! $events->isEmpty())
        <ul>
            @foreach($events as $event)
            <li>  <a href=" {{route('events.show', $event) }}"> {{ $event->title }} </a> </li>
            @endforeach
        </ul>

        {{ $events->links() }}

    @else
        <a href="{{ route('events.index') }}" class="btn btn-secondary btn-sm"> < Back</a>
        <p>Aucun Evenements pour le moment</p>
    @endif

@endsection