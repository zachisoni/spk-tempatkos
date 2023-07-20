<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    public function index(){
        $alternatives = Alternative::getAll();
        return view('alternative.list', ['alternatives' => $alternatives]);
    }

    public function addAlternative(){
        return view('alternative.add', []);
    }
}
