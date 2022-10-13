<?php

namespace App\Http\Controllers\PageComponents;

use App\Http\Controllers\Controller;
use App\Models\PageComponents\MainSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainSliderController extends Controller
{
    public function create(Request $request) {
        $order= DB::table('main_slider')->max('order');
        if($order == null) {
            $order= 1;
        }

        $newSlider= new MainSlider();
        $newSlider->title= $request->title;
        $newSlider->redirect_url= $request->redirect_url;
        $newSlider->interval= $request->interval;
        $newSlider->image= $request->image;
        $newSlider->order= $order;

        $name = $newSlider->title. "-slider_image" . uniqid().".".$request->image->clientExtension();
        $path = $request->image->storeAs('public/images/slider/', $name);
        $newSlider->image = $name;

        $newSlider->save();

        return response()->json([
            'created'=> true,
            'id'=> $newSlider->id,
        ]);
    }

    public function getImage($name) {
        $pathToFile = 'app/public/images/slider/'.$name;
        return response()->file(storage_path($pathToFile));
    }
}
