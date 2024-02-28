<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected OrderService $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index()
    {
        return $this->orderService->getAll();
    }

    public function show($id)
    {
        return $this->orderService->getById($id);
    }

    public function store(OrderRequest $request)
    {
        return $this->orderService->create($request->validated());
    }

    public function update(OrderRequest $request, $id)
    {
        $order = $this->orderService->getById($id);
        return $this->orderService->update($order, $request->validated());
    }

    public function destroy($id)
    {
        $order = $this->orderService->getById($id);
        return $this->orderService->delete($order);
    }
}