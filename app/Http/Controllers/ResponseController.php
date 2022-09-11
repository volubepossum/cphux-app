<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        $responses = [];

        if (($open = fopen("../resources\Salary Survey (Responses).csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $responses[] = $data;
            }

            fclose($open);
        }
        return view('livewire.table', ['headers' => array_shift($responses), 'rows' => $responses]);
    }
}
