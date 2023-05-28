@extends('layouts.app')
@section('title','FLEUR')
@section('content')



    
<div class="container">
    <div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
    @foreach ($phone as $item)
    <div class="card mt-2"> 
        <div class="card-header" style="background:#c797c7">
            <h1 style="color:#835e8c"> {{$item->Name}} </h1>
        </div>
        <div class="card-body border-1">
            <div class="row">
                <div class="col sm-2">
                    <img src='img/{{$item->Img}}' class="rounded" height="230">
                </div>
                <div class="col sm-8">
                    <h3 style="color:#835e8c"> <span class="badge" style="background-color:#b1d4e8">{{$item->Name}}</span></h3>
                    <small style="color:#669ccb">
                       <ul>
                        <li>
                           {{$item->Display}}
                        </li>
                       </ul>  
                    </small>
                </div>
                <div class="col sm-2">
                    <h4 class="text-danger">{{$item->Price}} SAR</h4>
                    <hr>
                    <br>
                    <a class="btn text-white" style="background-color:#6d957a" href="checkout/{{$item->id}}">Buy Now</a>
                    
                </div>
            </div>
        </div>
    </div>
 <div class="col-sm-2"></div>
   
@endforeach
</div>
</div>
    @endsection

