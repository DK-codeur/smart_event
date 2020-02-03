<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #17a2b8;">
    <a class="navbar-brand" href="{{ route('events.index') }}">Smart Events</a>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="btn btn-warning" href="{{route('events.create')}}">+ Creer un evenement</a>
            </li>
        </ul>
    </div>
</nav>