<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Service;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TransOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders = Order::with('customer')->get();
        $title = "Data Transactions";
        return view('order.index', compact('orders', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Order';
        $order = Order::get()->last();
        $id_order = $order->id ?? '';
        $id_order++;
        $order_code = 'L' . date('dmY') . sprintf('%03s', $id_order);
        $customers = Customer::get();
        $services = Service::get();
        return view('order.create', compact('title', 'order_code', 'customers', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        // Order::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        foreach ($request->id_paket as $key => $val) {
            OrderDetail::create([
                'id_order' => $order->id,
                'id_service' => $request->id_paket[$key],
                'price_service' => $request->price_service[$key],
                'qty' => $request->qty[$key],
                'subtotal' => $request->subtotal[$key]
            ]);
        };
        Alert::success('URRAAA', 'Data Berhasil Di tambah');
        return redirect()->to('trans_order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Order';
        $Order = Order::find($id);

        return view('order.edit', compact('title', 'Order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Order = Order::find($id);
        $Order->Order_name = $request->Order_name;
        $Order->phone = $request->phone;
        $Order->address = $request->address;
        $Order->save();

        Alert::success('URRAAA', 'Data Berhasil di Edit');
        return redirect()->to('Order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::find($id)->delete();
        Alert::success('URRAA', 'Data Sudah Dihapus');
        return redirect()->to('Order');
    }

    public function delete($id)
    {
        Order::find($id)->delete();
        return redirect()->to('Order');
    }
    public function getPaket($id_paket)
    {
        // UNTUK MENDAPATKAN PAKET PILIH SALAH SATU DARI KODINGAN DI ATAS
        // $paket = Service::where('id', $id_paket)->first();
        $paket = Service::find($id_paket);
        return response()->json($paket);
    }
}
