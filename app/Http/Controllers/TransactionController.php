<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\Recipe;
use App\Models\RecipeItem;
use App\Models\Medicine;
use App\Models\Signa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$transactions = Transaction::with('createdBy')->paginate(20);
		return view('transactions.index', ['transactions' => $transactions]);
    }

	public function bigstore(Request $request)
	{
		$output = [
			'status' => false,
			'message' => '',
			'data' => ''
		];
		try {
			DB::beginTransaction();
			$obj = json_decode($request->data, true);
			$transaction = new Transaction;
			$transaction->save();
			foreach($obj as $tItem){
				$transactionitem = new TransactionItem;
				$transactionitem->transaction_id = $transaction->id;
				if(isset($tItem['medicine'])){
					$transactionitem->is_recipe = false;
					$transactionitem->medicine_id = $tItem['medicine']['id'];
					$transactionitem->recipe_id = null;
					$transactionitem->amount = $tItem['amount'];
					$transactionitem->signa_id = $tItem['signa']['id'];
					$transactionitem->save();
					$medicine = Medicine::find($tItem['medicine']['id']);
					$newamount = $medicine->stock - $tItem['amount'];
					if($newamount >= 0) $medicine->stock = $newamount; 
					else throw new \Exception('Out of stock:'.$newamount);
					$medicine->save();
				}
				else {
					$transactionitem->is_recipe = true;
					$transactionitem->medicine_id = null;
					$transactionitem->amount = 0;
					$transactionitem->signa_id = $tItem['signa']['id'];
					$recipe = new Recipe;
					$recipe->name = $tItem['name'];
					$recipe->save();
					foreach($tItem['recipe'] as $rItem){
						$recipeitem = new RecipeItem;
						$recipeitem->recipe_id = $recipe->id;
						$recipeitem->medicine_id = $rItem['medicine']['id'];
						$recipeitem->amount = $rItem['amount'];
						$recipeitem->save();
						$medicine = Medicine::find($rItem['medicine']['id']);
						$newamount = $medicine->stock - $rItem['amount'];
						if($newamount >= 0) $medicine->stock = $newamount; 
						else throw new \Exception('Out of stock:'.$newamount);
						$medicine->save();
					}
					$transactionitem->recipe_id = $recipe->id;
					$transactionitem->save();
				}
			}
			$output['status'] = true;
			DB::commit();
		} catch (\Throwable $e) {
			$output['message'] = $e->getMessage();
			DB::rollback();
		}
		return response()->json($output);

		//$transactions = Transaction::with('createdBy')->paginate(20);
		//return view('transactions.index', ['transactions' => $transactions]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('transactions.form');
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

		$db = Transaction::create($request->all());
		Session::flash("status", [
			"level"=>"success",
			"message"=>"Saved successfully"
		]);

		return redirect()->route('transactions.index');
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
		$data = Transaction::find($id);

		return view('transactions.form')->with(compact('data'));
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

		$db = Transaction::find($id);
		$db->update($request->all());
		Session::flash("status", [
			"level"=>"success",
			"message"=>"Saved successfully"
		]);

		return redirect()->route('transactions.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Transaction::find($id)->delete();
		return redirect()->route('transactions.index');
	}
}
