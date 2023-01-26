<?php

namespace App\Http\Controllers\Statistic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic\ProductView;

class SiteViewsController extends Controller
{
    //
    public function plusProductView(Request $request) {
        $viewItem= ProductView::whereDate('created_at', date('Y-m-d'))->where('product_id', $request->productId)->firstOr(function () {
            return 0;
        });
        // return $viewItem;
        if($viewItem) {
            $viewItem->count = $viewItem->count + 1;
            $viewItem->save();
        }else {
            $newViewItem= new ProductView;
            $newViewItem->count= 1;
            $newViewItem->product_id= $request->productId;
            $newViewItem->save();
        }
        return response()->json([
            'done'=> true,
        ], 200);
    }

    public function getProductViewSummary(Request $request) {
        $today= ProductView::whereDate('created_at', date('Y-m-d'))->where('product_id', $request->productId)->sum('count');

        $thisWeek= ProductView::whereDate('created_at', '<=',date('Y-m-d'))
        ->whereDate('created_at', '>=', date("Y-m-d", strtotime('-7 days')))
        ->where('product_id', $request->productId)->sum('count');

        $thisMonth= ProductView::whereDate('created_at', '<=',date('Y-m-d'))
        ->whereDate('created_at', '>=', date("Y-m-d", strtotime("-1 month")))
        ->where('product_id', $request->productId)->sum('count');

        return response()->json([
            'today'=> $today,
            'thisWeek'=> $thisWeek,
            'thisMonth'=> $thisMonth,
        ]);
    }
}
