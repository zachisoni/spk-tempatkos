<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Calculation;
use App\Models\History;
use Illuminate\Http\Request;

class HistoriesController extends Controller
{
    public function index(){
        $histories = History::with('calculation')->latest()->get();
        return view('history', ['histories' => $histories]);
    }

    public function detail(int $id){
        $datas = Calculation::with('alternative')->where('history_id', $id)->get();
        
        $names = [];
        $values = [];
        $normalization = [];
        $results = [];
        foreach ($datas as $key => $data) {
            $results[''.$data->value.''] = $key;
            $values[$key] = Alternative::getAll()->find($data->alternative_id);
            $names[$key] = $values[$key]->name;
            $normalization[$key][0] = $data->n1;
            $normalization[$key][1] = $data->n2;
            $normalization[$key][2] = $data->n3;
            $normalization[$key][3] = $data->n4;
            $normalization[$key][4] = $data->n5;
        }

        krsort($results);
        // dd($results);

        $transpose = [];
        foreach ($values as $key => $value) {
            $transpose[0][$key] = $value->criteria1;
            $transpose[1][$key] = Alternative::changePrice($value->criteria2);
            $transpose[2][$key] = $value->criteria3;
            $transpose[3][$key] = $value->criteria4;
            $transpose[4][$key] = $value->criteria5;
        }


        return view('result', [
            'names' => $names,
            'transposed' => $transpose,
            'normalization' => $normalization,
            'results' => $results
        ]);
    }
}
