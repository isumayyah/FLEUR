@extends('layouts.app')
@section('title','checkout')
@section('content')


<div class="container">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$phone->Name}}</h6>
              <small class="text-muted">Brief description</small>
             
            </div>
            <span class="text-muted">{{$phone->Price}}</span>
          </li>
        
          <li class="list-group-item d-flex justify-content-between">
            <span>Total with Tax (RSA)</span>
            <strong>{{$phone->Total}}</strong>
          </li>
        </ul>
  
        
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="alert alert-success mb-3 text-dark">{{$phone->Name}}</h4>
       
        <div class="container">
          <form action="{{route('invoic')}}" method="POST">
            @csrf
            <input type="hidden" id="ProductName"name="ProductName" value={{$phone->Name}}>
            <input type="hidden" id="Total"name="Total" value={{$phone->Total}}>
            <div class="row">
              <div class="col">
               <label class="text-dark p-2  " for="fullname"> Full Name</label>
               <input type="text" id="fullname" name="fullname" required>
              </div>
              <div class="col">
               <label for="City" class="text-dark p-2"> Choose City </label>
               <select id="City" name="City" class="form-control">
                <option> </option>
                 <option>Riyadh</option>
                 <option>Jeddah</option>
                 <option>Makkah </option>
                 <option>Dammam</option>
               </select>
              </div>
              <div class="col">
               <label class="text-dark " for="d"> Date of Buy</label>
               <p></p>
               <input type="date" id="d" name="d" class="form-contol" required>
              </div>
            </div>
            <div class="row">
             <div class="col">
               <label class="text-dark p-2  " for="phone">Phone Number  </label>
               <input type="phone" id="phone" name="phone" required>
              </div>
              <div class="col">
               <label class="text-dark p-2  " for="phone">Email   </label>
               <input type="email" id="email" name="email" required>
              </div>
              <div class="col">
               <label class="text-dark p-2  " for="address">Address  </label>
               <input type="address" id="address" name="address">
              </div>
            </div>
            <div class="row  m-5 text-center">
              <div class="col">
                <button type="submit" class="btn btn-success">إتمام عملية الشراء</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
        

 @endsection
