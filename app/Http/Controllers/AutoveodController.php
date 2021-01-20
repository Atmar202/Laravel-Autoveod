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
        $autoveod->update(['nr' => $request->nr]);
        $autoveod->update(['juht' => $request->juht]);
        return redirect(route('autoveods.index'))->with('message', 'Muudatused salvestati!');
    }
    public function updateNumber(AutoveodCreateRequest $request, Autoveod $autoveod)
    {
        $autoveod->update(['nr' => $request->nr]);
        return redirect(route('autoveods.index'))->with('message', 'Auto number salvestati!');
    }
    public function updateDriver(AutoveodCreateRequest $request, Autoveod $autoveod)
    {
        $autoveod->update(['juht' => $request->juht]);
        return redirect(route('autoveods.index'))->with('message', 'Juht salvestati!');
    }
    public function tegemata(Autoveod $autoveod)
    {
        $autoveod->update(['valmis' => false]);
        return redirect()->back()->with('error', 'Veotellimus on märgitud tegemata.');
    }
    public function probleem(Autoveod $autoveod)
    {
        $autoveod->update(['valmis' => false]);
        return redirect()->back()->with('error', 'Veotellimust ei saa märkida valmis, sest sellel puudub auto number või juht.');
    }
    public function tehtud(Autoveod $autoveod)
    {
        $autoveod->update(['valmis' => true]);
        return redirect()->back()->with('message', 'Veotellimus on märgitud valmis.');
    }
    public function destroy(Autoveod $autoveod)
    {
        $autoveod->delete();
        return redirect()->back()->with('error', 'Veotellimus kustutatud!');
    }
    public function editNumber(Autoveod $autoveod) // Auto numbri muutmiseks
    {
        return view('autoveod.editNumber', compact('autoveod'));
    }
    public function editDriver(Autoveod $autoveod) // Juhi muutmiseks
    {
        return view('autoveod.editDriver', compact('autoveod'));
    }

    // Vedusid millel on juht või autonumber määramata võiksid olla värvilised (punane).
    // Vedusid millel on juht või autonumber määramata ei saa määrata valmiks.
    // Veole saab määrata juhi või autonumbri indeksis
    // Show vaadel peaks olema eraldi nupp (nagu edit'il, create'il, jne)
    // Eraldi paigutada veod lehele, mis pole veel valmis määratud.

    /*
Andmetabel veod: (id, algus, ots, aeg, autonr, juht, valmis)

* Koosta tabel. Loo SQL-laused tellimuse sisestamiseks (algus, ots, aeg), 
tellimusele autonumbri määramiseks, tellimusele juhi nime määramiseks.

* Koosta leht veotellimuse sisestamiseks (algus- ja otspunkt, soovitav aeg). 
Koosta leht tellitud, kuid ilma juhita vedude nägemiseks. Võimalda veole määrata juht.

* Näita lehel vedusid, mille juht või autonumber määramata. Võimalda neid määrata. 
Juhi ja autonumbriga vedude puhul näita eraldi need veod, mis pole veel valmiks määratud, 
võimalda tehtuks määrata.
    */
}
