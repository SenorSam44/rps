<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View\
     */

    public function create()
    {
        return view('create-result');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $result = Result::updateOrcreate([
            'id'=> $request->id
        ],
        [
            'roll'=> $request->roll,
            'name'=> $request->name,
            'sub1'=> $request->sub1,
            'sub2'=> $request->sub2,
            'sub3'=> $request->sub3,
            'sub4'=> $request->sub4,
            'sub5'=> $request->sub5,
            'sub6'=> $request->sub6,

        ]);

        return redirect()->back()->with('status', $result? 'Result added successfully': 'add Failed');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('create-result', [
            'result' => Result::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id)->delete();
        return redirect()->back()->with('status', $result? 'Result added successfully': 'add Failed');
    }
}
