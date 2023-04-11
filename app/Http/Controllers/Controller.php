<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function getAllExponses()
    {
        $exponses = Exam::all();
        return view('expenses', compact('exponses'));
    }


    public function insert(Request $request){
        $exam = new Exam();
        $exam->itemName = $request->itemName;
        $exam->Amount = $request->Amount;
        $exam->Category = $request->Category;
        $exam->currency = $request->currency;
        $exam->ExpenseDate = $request->ExpenseDate;
        $exam->save();
        return redirect() -> back();
    }

    public function delete($id){
        // DB::table('tasks') -> where('id',$id)-> delete();
        $exam = Exam::find($id);
        $exam->delete();
        return redirect() -> back();
    }

    public function update($id,Request $request){
        $exam = Exam::find($id);
        $exam->itemName = $request->itemName;
        $exam->Amount = $request->Amount;
        $exam->Category = $request->Category;
        $exam->currency = $request->currency;
        $exam->ExpenseDate = $request->ExpenseDate;
        $exam->save();
        return redirect() -> back();
    }



    use AuthorizesRequests, ValidatesRequests;
}
