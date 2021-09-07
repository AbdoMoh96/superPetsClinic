<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\OrderInterface;
use App\Models\Order;

class OrderRepository implements OrderInterface
{
    public function all()
    {
        return Order::orderBy('orders.created_at' , 'desc')->with('user' , 'products' , 'address')->paginate(10);
    }

    public function findById($id)
    {
        $order =  Order::find($id);
        $order->load('user' , 'products' , 'address');
        return $order;
    }

    public function update($data)
    {
        $order = Order::find($data['id']);
        $order['confirmed'] = $data['confirmed'];
        $order->update();
    }

    public function delete($id){
       $order = Order::find($id);
       $order->delete();
    }
}
