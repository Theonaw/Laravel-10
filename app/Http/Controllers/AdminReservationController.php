<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
    private $heures =[
        // Créneaux du midi
        '12:00',
        '12:30',
        '13:00',
        '13:30',
        // Créneaux du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    ];

    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index',[
            'reservations'=>$reservations
        ]);
    }

    public function show(int $id)
    {
        $reservationShow = Reservation::find($id);

        return view('admin.reservation.show',[
            'reservationShow' => $reservationShow,
        ]);
    }
    
    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('admin.reservation.edit',[
            'reservation' => $reservation,
            'heures'=>$this->heures,
        ]);
    }

    public function update(Request $request, $id)
    {
        $heures=implode(',',$this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couvert' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required|min:10|max:10',
            'commentaire' => 'nullable|min:10|max:1000',
        ]);

        $reservation = Reservation::find($id);
        $reservation->nom = $validated['nom'];
        $reservation->couvert = $validated['couvert'];
        $reservation->heure = $validated['heure'];
        $reservation->jour = $validated['jour'];
        $reservation->telephone = $validated['telephone'];
        $reservation->commentaire = $validated['commentaire'];

        $reservation->save();

        return redirect()->route('admin.reservation.show',[
            'id' => $reservation->id,
        ]);
    }

    public function delete($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('admin.reservation.index');
    }

    public function create()
    {
        return view('admin.reservation.create', ['heures' => $this->heures]);
    }

    public function store(Request $request)
    {
        $heures=implode(',',$this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couvert' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required|min:10|max:10',
            'commentaire' => 'nullable|min:10|max:1000',
        ]);

        $reservation = new Reservation();
        $reservation->nom = $validated['nom'];
        $reservation->couvert = $validated['couvert'];
        $reservation->heure = $validated['heure'];
        $reservation->jour = $validated['jour'];
        $reservation->telephone = $validated['telephone'];
        $reservation->commentaire = $validated['commentaire'];

        $reservation->save();

        return redirect()->route('admin.reservation.show',['id' => $reservation->id]);
    }
}
