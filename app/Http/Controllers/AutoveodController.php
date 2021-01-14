<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autoveod;
use App\Http\Requests\AutoveodCreateRequest;

class AutoveodController extends Controller
{
    public function index() // Index leht, mis näitab kõik veotellimused
    {
        $autoveods = Autoveod::orderBy('valmis')->get();
        return view('autoveod.index', compact('autoveods'));
    }
    public function create() // Veotellimuse sisestamiseks (algus, otspunkt ja aeg)
    {
        return view('autoveod.create');
    }
    public function store(AutoveodCreateRequest $request) // Veotellimuse lisamine
    {
        //$autoveod = auth()->user()->autoveods()->create($request->all());
        Autoveod::create($request->all());
        return redirect(route('autoveods.index'))->with('message', 'Tellimus lisatud');
    }
    public function edit(Autoveod $autoveod) // Veotellimuse muutmiseks (algus, otspunkt ja aeg)
    {
        return view('autoveod.edit', compact('autoveod'));
    }
    public function show(Autoveod $autoveod) // Veotellimuse näitamiseks (algus, otspunkt, aeg, nr, juht, olek)
    {
        return view('autoveod.show', compact('autoveod'));
    }
    public function update(AutoveodCreateRequest $request, Autoveod $autoveod)
    {
        $autoveod->update(['algus' => $request->algus]);
        $autoveod->update(['aeg' => $request->aeg]);
        $autoveod->update(['otspunkt' => $request->otspunkt]);
        return redirect(route('autoveods.index'))->with('message', 'Muudatused salvestati!');
    }
    public function tegemata(Autoveod $autoveod)
    {
        $autoveod->update(['valmis' => false]);
        return redirect()->back()->with('message', 'Veotellimus on märgitud tegemata.');
    }
    public function tehtud(Autoveod $autoveod)
    {
        $autoveod->update(['valmis' => true]);
        return redirect()->back()->with('message', 'Veotellimus on märgitud valmis.');
    }
    public function destroy(Autoveod $autoveod)
    {
        $autoveod->delete();
        return redirect()->back()->with('message', 'Veotellimus kustutatud!');
    }

    // Todo: Valmis teha show ja edit vaade kujundus

    // Vedusid millel on juht või autonumber määramata võiksid olla värvilised (punane).
    // Vedusid millel on juht või autonumber määramata ei saa määrata valmiks.
    // Veole saab määrata juhi või autonumbri indeksis
    // Show vaadel peaks olema eraldi nupp (nagu edit'il, create'il, jne)
    // Eraldi paigutada veod lehele, mis pole veel valmiks määratud.
}
