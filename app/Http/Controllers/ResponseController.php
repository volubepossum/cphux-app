<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ResponseController extends Controller
{
    public function index(Request $request)
    {
        $responses = [];

        if (($open = fopen("../resources\Salary Survey (Responses).csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $responses[] = $data;
            }

            fclose($open);
        }
        $years = array_unique(array_column($responses, 6));
        sort($years);
        unset($years[sizeof($years)-1]);
        Session::put('years_of_experience', implode(', ', $years));
        return view('responses', ['headers' => array_shift($responses), 'rows' => $responses]);
    }

    //shows data for a single response
    public function show($id)
    {
        $responses = [];

        if (($open = fopen("../resources\Salary Survey (Responses).csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $responses[] = $data;
            }

            fclose($open);
        }
        return view('livewire.table', ['headers' => array_shift($responses), 'rows' => [$responses[$id]]]);
    }
}
