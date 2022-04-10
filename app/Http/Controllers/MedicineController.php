<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\Session;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		if($request->input('q')=="vue"){
			$medicines = Medicine::where('is_active',1)->get(['id','codename','name','stock']);
			foreach($medicines AS $row){
			    $row['label'] = $row['codename'].' : '.$row['name'];
			}
			return $medicines;
		}
		$medicines = Medicine::with('createdBy')->paginate(20);
		return view('medicines.index', ['medicines' => $medicines]);
    }

    public function rawIndex()
    {
		$medicines = Medicine::all();
		return $medicines;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('medicines.form');
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
			'stock' => 'required|numeric'
		]);

		$db = Medicine::create($request->all());
		Session::flash("status", [
			"level"=>"success",
			"message"=>"Saved Successfully"
		]);

		return redirect()->route('medicines.index');
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
		$data = Medicine::find($id);

		return view('medicines.form')->with(compact('data'));
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
			'stock' => 'required|numeric'
		]);

		$db = Medicine::find($id);
		$db->update($request->all());
		Session::flash("status", [
			"level"=>"success",
			"message"=>"Saved Successfully"
		]);

		return redirect()->route('medicines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		Medicine::find($id)->delete();
		return redirect()->route('medicines.index');
    }
}
