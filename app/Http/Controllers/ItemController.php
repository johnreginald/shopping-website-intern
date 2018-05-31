<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('items')->get();
        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('items.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item_id = DB::table('items')->insertGetId([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        foreach($request->category_id as $category_id) {
            DB::table('category_item')->insert([
                'category_id' => $category_id,
                'item_id' => $item_id
            ]);
        }

        return redirect('items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = DB::table('items')->where('id', $id)->first();

        $categories = DB::table('items')
                ->join('category_item', 'category_item.item_id', '=', 'items.id')
                ->join('categories', 'category_item.category_id', '=', 'categories.id')
                ->select("categories.*")
                ->where('items.id', $id)
                ->get();

        return view('items.show', ['item' => $item, 'categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DB::table('items')->where('id', $id)->first();
        $categories = DB::table('categories')->get();
        $selected_categories = DB::table('category_item')->where('item_id', $id)->pluck('category_id')->toArray();

        return view('items.edit', [
            'item' => $item, 
            'categories' => $categories,
            'selected_categories' => $selected_categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('items')->where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price
        ]);

        DB::table('category_item')->where('item_id', $id)->delete();

        foreach($request->category_id as $category_id) {
            DB::table('category_item')->insert([
                'category_id' => $category_id,
                'item_id' => $id
            ]);
        }

        return redirect('items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('items')->where('id', $id)->delete();
        DB::table('category_item')->where('item_id', $id)->delete();
        return redirect('items');
    }
}
