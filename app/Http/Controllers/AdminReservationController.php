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
        return view('reservationIndex',['reservations'=>$reservations]);
    }

    public function show(int $id)
    {
        $reservationShow = Reservation::find($id);

        return view('reservationShow',[
            'reservationShow' => $reservationShow
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
}
