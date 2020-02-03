@extends('layouts/master')

@section('content') 
{{-- events.index --}}
    <a href="{{ route('home_path') }}" class="btn btn-secondary btn-sm mb-4"> < Back </a> 

    <h1> {{ $event->title }} </h1>
    <p> {{ $event->description }} </p>


    {{-- $event->id or $event --}}
    <a href="{{route('events.edit', $event)}}" class="btn btn-primary">Modifier</a>
    <form 
        action="{{route('events.destroy', $event)}}" 
        method="POST" 
        class="show-form" 
        onsubmit="return confirm('Etes vous sur de vouloir supprimer ?')"
    >

        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        
        <input type="submit" value="Supprimer" class="btn btn-danger">
    </form>

@stop