<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlternativesController extends Controller
{
    public function index(){
        $alternatives = Alternative::getAll();
        return view('alternative.list', ['alternatives' => $alternatives]);
    }

    public function addAlternative(){
        // dd(Auth::user()->id);
        return view('alternative.add');
    }

    public function store(Request $request){
        $alternativeModel = new Alternative;
        $alternativeModel->name = $request->input('name');
        $alternativeModel->user_id = $request->input(Auth::user()->id);
        $alternativeModel->criteria1 = $request->input('location');
        $alternativeModel->criteria2 = $request->input('price');
        $alternativeModel->criteria3 = $request->input('facility');
        $alternativeModel->criteria4 = $request->input('access');
        $alternativeModel->criteria5 = $request->input('security');
        $alternativeModel->save();

        return redirect()->to('/alternatives');
    }

    public function delete(int $id){
        Alternative::destroy($id);
        return redirect()->to('/alternatives');
    }

    public function edit(int $id){
        $alternative = Alternative::find($id);
        return view('alternative.add', ['alternative' => $alternative]);
    }

    public function update(Request $request, int $id){
        $alternativeModel = Alternative::find($id);
        $alternativeModel->name = $request->input('name');
        $alternativeModel->user_id = $request->input(Auth::user()->id);
        $alternativeModel->criteria1 = $request->input('location');
        $alternativeModel->criteria2 = $request->input('price');
        $alternativeModel->criteria3 = $request->input('facility');
        $alternativeModel->criteria4 = $request->input('access');
        $alternativeModel->criteria5 = $request->input('security');
        $alternativeModel->save();
        return redirect()->to('/alternatives');
    }
}
