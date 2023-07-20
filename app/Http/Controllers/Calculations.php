<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class Calculations extends Controller
{

    protected $weight = [0.3, 0.2, 0.25, 0.15, 0.6];

    public function index(){
        $alternatives = Alternative::getAll();
        return view('calculation.calculate', ['alternatives' => $alternatives]);
    }

    public function calculate(Request $request){
        // $size = $request->input('size');
        $datas = [];
        $alternatives = $request->input('alt');
        // $ids = explode("|", $ids);

        for ($i=0; $i < count($alternatives); $i++) { 
            $datas[$i] = Alternative::getAll()->find($alternatives[$i]);
        }

        // dd($datas);
        //Transpose (Kolom jadi baris, baris jadi kolom) hasil dari databse
        $transposed = [];
        foreach ($datas as $key => $data) {
            $transposed[0][$key] = $data->criteria1;
            $transposed[1][$key] = $data->criteria2;
            $transposed[2][$key] = $data->criteria3;
            $transposed[3][$key] = $data->criteria4;
            $transposed[4][$key] = $data->criteria5;
        }
        
        // dd($transposed);

        $minmax = [];
        foreach ($transposed as $key => $n) {
            if($key == 0 || $key == 1){
                $minmax[$key] = min($n);
            }else {
                $minmax[$key] = max($n);
            }
        }

        // dd($minmax);

        $normalization = [];
        //normalisasi
        foreach ($datas as $key => $data){
            for ($i=0; $i < 5; $i++) { 
                if ($i == 0) {
                    $normalization[$key][$i] = $minmax[$i]/$transposed[$i][$key];
                }else {
                    $normalization[$key][$i] = $transposed[$i][$key]/$minmax[$i];
                }
            }
        }

        // dd($normalization);

        $result = [];
        foreach ($normalization as $key => $normal) {
            for ($i=0; $i < 5; $i++) { 
                $normal[$i] = $normal[$i] * $this->weight[$i];
            }
            $result[$key] = array_sum($normal);
        }

        // dd($result);

        $max = max($result);
        $first = $datas[array_search($max, $result)];
        // dd($first);

        return view('calculation.result', [
            'transposed' => $transposed,
            'normalzation' => $normalization,
            'result' => $result,
            'first' => $first
        ]);

    }
}
