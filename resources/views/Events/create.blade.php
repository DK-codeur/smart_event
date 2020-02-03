@extends('layouts/master')

@section('content')
    <a href="{{ route('events.index') }}" class="btn btn-secondary btn-sm"> < Back</a>
    <h1 class="text-center text-muted">Create Event quickly</h1>

    <div class="form-create">
    
        <form action="{{route('events.store')}}" method="POST">
            {{ csrf_field() }}

            @include('Events/_form', ['submitButtonText' => 'Creer l\'evenement', 'submitButtonClass'=>'btn btn-success mt-3'])

        </form>
    </div>
@stop