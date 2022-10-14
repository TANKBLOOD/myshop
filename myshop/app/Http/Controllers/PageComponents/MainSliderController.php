<?php

namespace App\Http\Controllers\PageComponents;

use App\Http\Controllers\Controller;
use App\Models\PageComponents\MainSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MainSliderController extends Controller
{
    public function index()
    {
        $sliders = MainSlider::all();

        return response()->json([
            'sliders' => $sliders,
        ]);
    }
    public function create(Request $request)
    {
        $order = DB::table('main_slider')->max('order');
        if ($order == null) {
            $order = 1;
        }

        $newSlider = new MainSlider();
        $newSlider->title = $request->title;
        $newSlider->redirect_url = $request->redirect_url;
        $newSlider->interval = $request->interval;
        $newSlider->order = $order;

        $name = $newSlider->title . "-slider_image" . uniqid() . "." . $request->image->clientExtension();
        $path = $request->image->storeAs('public/images/slider/', $name);
        $newSlider->image = $name;

        $newSlider->save();

        return response()->json([
            'created' => true,
            'id' => $newSlider->id,
        ]);
    }

    public function update(Request $request)
    {

        $slider = MainSlider::findOrFail($request->id);

        $slider->title = $request->title;
        $slider->redirect_url = $request->redirect_url;
        $slider->interval = $request->interval;


        if (isset($request->image) && Storage::exists('/public/images/slider/' . $slider->image)) {
            Storage::delete('/public/images/slider/' . $slider->image);
        }
        if (isset($request->image)) {
            $name = $slider->title . "-slider_image" . uniqid() . "." . $request->image->clientExtension();
            $path = $request->image->storeAs('public/images/slider/', $name);
            $slider->image = $name;
        }

        $slider->save();

        return response()->json([
            'updated' => true,
            'id' => $slider->id,
        ]);
    }

    public function getImage($name)
    {
        $pathToFile = 'app/public/images/slider/' . $name;
        return response()->file(storage_path($pathToFile));
    }

    public function mainList()
    {
        //set some conditions for showing and change the table
        $sliders = MainSlider::all();

        return response()->json([
            'sliders' => $sliders,
        ]);
    }
}
