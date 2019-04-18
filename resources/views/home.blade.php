@extends('layouts.app')

@section('content')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">My home page</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection

<?php
fizzbuzz();

function fizzbuzz() {

    for ($i = 1; $i<=100; $i++) {
        $data = "";
        if ($i % 3 == 0) {
            $data .= "Fizz";
        }
        if ($i % 5 == 0) {
            $data .= "Buzz";
        }
        echo $data != "" ? $data.'<br>' : $i.'<br>';
    }
}
?>
