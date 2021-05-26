@extends('layouts.main')

@section('content')
<h3>Create a New Order</h1>
<form method="" action="POST" enctype="multipart/form-data">
<div class="form-group row">
  <div class="form-group col-sm-6 mb-3 mb-sm-0">
      <label for="customerName">Customer name</label>
      <input type="text" name="cname" class="form-control" id="customerName" placeholder="KP Oli">
    </div>
    <div class="form-group col-sm-6 ">
      <label for="customerPhone">Customer Phone</label>
      <input type="text" name="phone" class="form-control" id="customerPhone" placeholder="9845111111">
    </div>
</div>
  <div class="form-group row">
    <div class="form-group col-sm-6">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group col-sm-6">
      <label for="productName">Product name</label>
      <input type="text" name="ptorepair" class="form-control" id="productName" placeholder="Samsung / laptop">
    </div>
  </div>
  <div class="form-group row">
    <div class="form-group col-sm-6">
      <label for="productName">Model</label>
      <input type="text" name="model" class="form-control" id="productName" placeholder="Aspire 3560">
    </div>
    <div class="form-group col-sm-6">
      <label for="status">Select Status</label>
      <select class="form-control" id="status">
        @foreach ($statuses as $status )
        
        <option>{{$status->name}}</option>

        @endforeach
        
        
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="comment">Comment if any</label>
    <textarea name="comment" class="form-control" id="comment"></textarea>
  </div>

<div class="form-group row">
  <div class="form-group col-sm-6 mb-3 mb-sm-0">
    <label for="date">Due Date</label>
    <input type="date" name="date" id="date" class="form-control">
  </div>
  
  <div class="form-group col-sm-6">
  <label for="photo">Choose an image if any:</label>
  <input type="file" name="photo" id="" accept="image/png, image/jpeg" class="form-control">
  </div>
</div>
<button type="submit" class="btn btn-primary">Place new Order</button>

</form>

@endsection



