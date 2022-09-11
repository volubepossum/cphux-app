@extends('layouts.app')
@section('content')
    <div class="relative justify-center">
        <div class="flex flex-wrap -left-1/3 fixed  w-full z-50 justify-center">
            @livewire('dropdown', ['title' => 'Years of experience', 'options' => explode(', ', Session::get('years_of_experience'))])
        </div>
        <div class="absolute top-11 w-screen justify-center">
            @livewire('table', ['headers' => $headers, 'rows' => $rows], key('responses-table'))
        </div>
    </div>
@endsection
