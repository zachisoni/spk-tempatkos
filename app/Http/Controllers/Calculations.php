<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Calculation;
use App\Models\History;
use Illuminate\Http\Request;

class Calculations extends Controller
{

    /**
     * array bobot dari masing-masing kriteria. Diawali dengan kriteria 1 
     */
    protected $weight = [0.3, 0.25, 0.20, 0.15, 0.1];

    public function index(){
        $alternatives = Alternative::getAll();
        return view('calculation.calculate', ['alternatives' => $alternatives]);
    }

    public function calculate(Request $request){
        $datas = [];
        $names = [];
        $alternatives = $request->input('alt');
        $ids = $request->input('ids');
        $ids_arrr = explode('|', $ids);

        for ($i=0; $i < count($ids_arrr) - 1; $i++) { 
            $datas[$i] = Alternative::getAll()->find($alternatives[$ids_arrr[$i]]);
        }

        // dd($datas);

        //Transpose (Kolom jadi baris, baris jadi kolom) hasil dari databse
        $transposed = [];
        foreach ($datas as $key => $data) {
            $transposed[0][$key] = $data->criteria1;
            $transposed[1][$key] = Alternative::changePrice($data->criteria2);
            $transposed[2][$key] = $data->criteria3;
            $transposed[3][$key] = $data->criteria4;
            $transposed[4][$key] = $data->criteria5;
            $names[$key] = $data->name;
        }

        $minmax = [];
        foreach ($transposed as $key => $n) {
            if($key == 0 || $key == 1){
                $minmax[$key] = min($n);
            }else {
                $minmax[$key] = max($n);
            }
        }

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

        foreach ($normalization as $key =>$normal) {
        }

        $results = [];
        foreach ($normalization as $key => $normal) {
            for ($i=0; $i < 5; $i++) { 
                $normal[$i] = $normal[$i] * $this->weight[$i];
            }
            $results[''.array_sum($normal).''] = $key;
        }

        $historiesModel = new History;
        $historiesModel->user_id = $datas[0]->user_id;
        $historiesModel->save();
        $history_id = $historiesModel->id;
        // dd($historiesModel);

        krsort($results);
        $rank = 1;
        foreach ($results as $key => $result) {
            $calculationModel = new Calculation;
            $calculationModel->alternative_id = $datas[$result]->id;
            $calculationModel->history_id = $history_id;
            $calculationModel->value = $key;
            $calculationModel->ranking = $rank;
            $calculationModel->n1 = $normalization[$result][0];
            $calculationModel->n2 = $normalization[$result][1];
            $calculationModel->n3 = $normalization[$result][2];
            $calculationModel->n4 = $normalization[$result][3];
            $calculationModel->n5 = $normalization[$result][4];
            $rank++;
            $calculationModel->save();
        }

        // return view('result', [
        //     'names' => $names,
        //     'transposed' => $transposed,
        //     'normalization' => $normalization,
        //     'results' => $results
        // ]);
        return redirect()->to("/history/$history_id");
    }
}
