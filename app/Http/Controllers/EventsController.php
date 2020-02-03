<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventFormRequest;
use MercurySeries\Flashy\Flashy as FlashyFlashy;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(12);

        return view('Events/index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //nex event nvel instance de notre model dc access virtuel aux propriete title, descrip...
        $event = new Event;
        return view('Events/create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {
        Event::create(['title' => $request->title, 'description' => $request->description]);

        FlashyFlashy::success('Evenement crée avec succèss !');
        return redirect()->route('home_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Model Event et $event : parametre de URI: php artisant route:list
    public function show(Event $event) 
    {
        //find select event where id...or fail
        return view('Events/show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('Events/edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, Event $event)
    {
        $event->update([
            'title' => $request->title, 
            'description' => $request->description
        ]);

        // flash(sprintf('Evenement #%s modifié avec succes !!!', $event->id), 'info');
        FlashyFlashy::info(sprintf('Evenement #%s modifié avec succes !!!', $event->id));

        return redirect()->route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        FlashyFlashy::muted(sprintf('Evenement #%s supprimé avec succes !', $event->id));
        return redirect()->route('events.index');
    }
}
