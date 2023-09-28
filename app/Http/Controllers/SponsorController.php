<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Requests\SponsorRequest;

class SponsorController extends Controller
{
    //
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('admin.sponsors.index', compact('sponsors'));//burda kaldık index sayfası oluşturulacak
    }
    public function create()
    {
        return view('admin.sponsors.create');
    }
    public function store(SponsorRequest $request){
        if ($request->file('image')) {
            $sponsor = Sponsor::create($request->validated());
            $sponsor->addMediaFromRequest('image')->usingName($sponsor->title)->toMediaCollection();
        }
        return redirect(route('sponsors.index'));
    }

    public function edit(Sponsor $sponsor)
    {
        return view('admin.sponsors.edit', compact('sponsor'));
    }

    public function update(SponsorRequest $request ,Sponsor $sponsor){
        $sponsor->update($request->validated());
        if ($request->file('image')) {
            $sponsor->clearMediaCollection();
            $sponsor->addMediaFromRequest('image')->usingName($sponsor->title)->toMediaCollection();
        }
        return redirect(route('sponsors.index'));
    }

    public function destroy(Sponsor $sponsor)
    {
        $sponsor->clearMediaCollection();
        Sponsor::deleted($sponsor->id);
        return redirect(route('sponsors.index'));
    }
}
