<?php

namespace App\Http\Controllers;

use App\Models\Productssss;
use Illuminate\Http\Request;

class ProductssssController extends Controller
{
    function index(){

        $data = '';
        foreach (Productssss::all() as $product){
            $data.=$product->name.'<br>';

        }

        return $data;

    }
}
