<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventoController extends Controller
{
    public function index(){

        $events = Event::all();
        return view('welcome',['events' => $events]);
    }

    public function create(){
        return view('evento.criar');
    }

    public function store(Request $request){

        $event = new Event();

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');        
    }
}
