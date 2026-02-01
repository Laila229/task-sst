<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function create()
{

    $topGovs = ['عمان', 'إربد', 'الزرقاء'];

    $otherGovs = \App\Models\Order::select('governorate')
                                  ->distinct()
                                  ->whereNotIn('governorate', $topGovs)
                                  ->pluck('governorate');

    return view('create', compact('topGovs', 'otherGovs'));
}
public function store(Request $request){
$request->validate([
    'phone' => 'required',
    'governorate'=>'required',
    'address' => 'required',
    'product' => 'required',
    'warranty_period' => 'required',
]);
    Order::create($request->all());

    return redirect()->back()->with('success', 'تم الحفظ بنجاح');
}

// printlist in print 0
public function printList()
{
    $orders = Order::where('printed', 0)->get();
    return view('print', compact('orders'));
}

// printlist in print 1
public function printSelected(Request $request)
{
    if (!$request->has('orders') || count($request->orders) == 0) {
        return redirect()->back()->with('error', 'يجب تحديد طلب واحد على الأقل للطباعة');
    }

    $orders = Order::whereIn('id', $request->orders)->get();

    Order::whereIn('id', $request->orders)
        ->update(['printed' => 1]);

    return view('invoice', compact('orders'));
}
}
