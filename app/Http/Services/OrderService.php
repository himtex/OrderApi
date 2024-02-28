<?php

namespace App\Services;

use App\Models\Oorder;

class OrderService
{
    public function getAll()
    {
        return Order::all();
    }

    public function getById($id)
    {
        return Order::findOrFail($id);
    }

    public function create($data)
    {
        return Order::create($data);
    }

    public function update(Order $order, $data)
    {
        $order->update($data);
        return $order;
    }

    public function delete(Order $order)
    {
        $order->delete();
        return $order;
    }
}