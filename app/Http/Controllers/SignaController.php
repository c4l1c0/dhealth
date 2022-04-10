<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signa;
use Illuminate\Support\Facades\Session;

class SignaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		if($request->input('q')=="vue"){
			$signa = Signa::where('is_active',1)->get(['id','codename','name']);
			foreach($signa AS $row){
			    $row['label'] = $row['codename'].' : '.$row['name'];
			}
			return $signa;
		}
		$signas = Signa::with('createdBy')->paginate(20);
		return view('signas.index', ['signas' => $signas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('signas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate($request, [
			'codename' => 'required',
			'name' => 'required',
		]);

		$db = Signa::create($request->all());
		Session::flash("status", [
			"level"=>"success",
			"message"=>"Saved successfully"
		]);

		return redirect()->route('signas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$data = Signa::find($id);

		return view('signas.form')->with(compact('data'));
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
		$this->validate($request, [
			'codename' => 'required',
			'name' => 'required',
		]);

		$db = Signa::find($id);
		$db->update($request->all());
		Session::flash("status", [
			"level"=>"success",
			"message"=>"Saved successfully"
		]);

		return redirect()->route('signas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Signa::find($id)->delete();
		return redirect()->route('signas.index');
    }
}
