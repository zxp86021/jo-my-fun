<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Store;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the store list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();

        return view('stores.index',[
            'stores' => $stores
        ]);
    }

    /**
     * Show the store creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Create new store.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'address' => 'required|max:191',
            'phone' => 'required|max:191'
        ]);

        $store = new Store();

        $store->name = $request->name;

        $store->address = $request->address;

        $store->phone = $request->phone;

        $store->latitude = '';

        $store->longitude = '';

        if ($store->save()) {
            return redirect('/stores')->with('status', '201');
        } else {
            return redirect('/stores');
        }
    }

    /**
     * Show the store detail page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the store edit form.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update store data.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * delete store.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
