<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\OrderInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderRepo;

    public function __construct(OrderInterface $repo)
    {
        $this->orderRepo = $repo;
    }

    public function index(){
        $orders = $this->orderRepo->all();
        return view('dashboard.order.index' ,  compact('orders'));
    }

    public function show($order){
        $order = $this->orderRepo->findById($order);
        return view('dashboard.order.show' , compact('order'));
    }

    public function printOrder($order){
        $order = $this->orderRepo->findById($order);
        return view('dashboard.order.print' , compact('order'));
    }

    public function update(Request $request){
        $this->orderRepo->update($request);
        return redirect()->route('admin.order.index')->with('success' , 'Order Status Updated Successfully');
    }


    public function destroy($id){
        $this->orderRepo->delete($id);
    }

}
