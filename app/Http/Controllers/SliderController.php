<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //

    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', ['sliders' => $sliders]);
    }

    public function create()
    {
        return view('admin.sliders.create');
    }
    public function store(SliderRequest $request)
    {
        if ($request->file('image')) {
            $slider = Slider::create($request->validated());
            $slider->addMediaFromRequest('image')->usingName($slider->name)->toMediaCollection();
        }
        return redirect(route('sliders.index'));
    }
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', [ 'slider' => $slider]);
    }
    public function update(SliderRequest $request, Slider $slider)
    {
        $slider->update($request->validated());
        if ($request->file('image')) {
            $slider->clearMediaCollection();
            $slider->addMediaFromRequest('image')->usingName($slider->name)->toMediaCollection();
        }
        return redirect(route('sliders.index'));
    }
    public function destroy(Slider $slider)
    {
        $slider->clearMediaCollection();
        Slider::deleted($slider->id);
        return redirect(route('sliders.index'));
    }
}
