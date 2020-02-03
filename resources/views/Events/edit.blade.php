@extends('layouts/master')

@section('content')
    <a href="{{ route('events.index') }}" class="btn btn-secondary btn-sm"> < Back</a>

    <h1 class="text-center text-muted"> Modifier l'evenement #{{$event->id}} "{{ $event->title }}" </h1>
    <br>

    <div class="form-edit">
    
        <form action="{{route('events.update', $event)}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            {{-- <input type="hidden" name="_method" value="PUT"> --}}

            @include('Events/_form', ['submitButtonText' => 'Modifier', 'submitButtonClass'=>'btn btn-primary btn-block mt-3'])

        </form>

    </div>
@stop