<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipi;
use Illuminate\Http\Request;
use App\Http\Requests\RecipiRequest;

class RecipiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipis = Recipi::all();

        return view('recipis.index', compact('recipis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('recipis.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecipiRequest $request)
    {
        $recipi = new Recipi;

        $recipi->name = $request->name;
        $recipi->category_id = $request->category_id;
        $recipi->meterial = $request->meterial;
        $recipi->seasoning = $request->seasoning;
        $recipi->recipi = $request->recipi;
        $recipi->img_path = $request->img_path;
        $recipi->comment = $request->comment;

        $recipi->save();

        return redirect()->route('recipis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipi = Recipi::find($id);

        return view('recipis.show', compact('recipi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipi = Recipi::find($id);
        $categories = Category::all();

        return view('recipis.edit', compact('recipi', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RecipiRequest $request, $id)
    {
        $recipi = Recipi::find($id);

        $recipi->name = $request->name;
        $recipi->category_id = $request->category_id;
        $recipi->meterial = $request->meterial;
        $recipi->seasoning = $request->seasoning;
        $recipi->recipi = $request->recipi;
        $recipi->img_path = $request->img_path;
        $recipi->comment = $request->comment;

        $recipi->save();

        return redirect('/recipis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipi = Recipi::find($id);
        $recipi->delete();

        return redirect('/recipis');
    }
}
