@extends('layouts.app')
@section('title','invoice')
@section('content')
<style>
  
  body{
      color:rgb(248, 248, 248);
    }
  
</style>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
   <div class="col-sm-6">
    <div class="card " style="width: 35rem;" >
        <div class="card-body mx-4 text-dark">
          <div class="container">
            <p class="my-5 mx-5 text-danger text-center" style="font-size: 30px;">Thank for your purchase</p>
            <div class="row">
              <ul class="list-unstyled">
                <li class="text-black text-center">Name: {{$invoic->Name}}</li>
                <li class="text-muted mt-1 text-center"><span class="text-black ">Invoice</span> {{$invoic->Id}}</li>
                <li class="text-black mt-1 text-center">{{$invoic->BirthDate}}</li>
              </ul>
              <hr>
              <div class="col-xl-10 ">
                <p class="text-dark"> Package Name</p>
              </div>
              <div class="col-xl-2 ">
                <p class="float-end ">{{$invoic->ProductName}}
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p class="text-dark">Price with Tax</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end text-dark">{{$invoic->Total}} SAR
                </p>
              </div>
              <hr>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <p class="text-dark ">Tax</p>
              </div>
              <div class="col-xl-2">
                <p class="float-end text-dark">0.15
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="row text-black">
      
              <div class="col-xl-12">
                <p class="float-end fw-bold text-dark ">Total: {{$invoic->Total}} SAR
                </p>
              </div>
              <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
              <a><u class="text-info">View in browser</u></a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
      
          </div>
        </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
</div>



@endsection