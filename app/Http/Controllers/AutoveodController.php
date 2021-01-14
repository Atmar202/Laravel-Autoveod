<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoveodController extends Controller
{
    public function index() // Index leht, mis näitab kõik veotellimused
    {
        return view('autoveod.index');
    }
    public function create() // Veotellimuse sisestamiseks (algus, otspunkt ja aeg)
    {
        return view('autoveod.create');
    }
    public function edit() // Veotellimuse muutmiseks (algus, otspunkt ja aeg)
    {
        return view('autoveod.edit');
    }
    public function show() // Veotellimuse näitamiseks (algus, otspunkt, aeg, nr, juht, olek)
    {
        return view('autoveod.show');
    }
    /*public function destroy()
    {
        //delete lisada
    }
    */

    // Vedusid millel on juht või autonumber määramata võiksid olla värvilised (punane).
    // Vedusid millel on juht või autonumber määramata ei saa määrata valmiks.
    // Veole saab määrata juhi või autonumbri indeksis
    // Eraldi paigutada veod lehele, mis pole veel valmiks määratud.
}
