@extends('layouts.nav')

@section('content')



<div class="container-fluid mt-5">

<div class="container-fluid mt-5">

  <div class="row">
    <div class="col-3 text-center">
        <h4>NAME</h4>
    </div>

    <div class="col-3 ml-2 text-center">
        <h4>RATE</h4>
    </div>

    <div class="col-3 ml-2 text-center">
        <h4>HSN/SAC</h4>
    </div>


</div>


</div>


@foreach($data as $data)



    <form class="form-inline" id="main-form">
        @csrf

    <div class="form-group w-100 mb-4">

        <label class="sr-only" for="inlineFormInputName2">Name of Product </label>
    <input type="text" class="form-control col-3 font-weight-bold" id={{$data->id}} placeholder="Name of Product" name="name" value={{$data->name}} readonly>



      <label class="sr-only" for="inlineFormInputName2">Rate of the Product </label>
      <input type="text" class="form-control col-3  ml-2 font-weight-bold" id="{{$data->id}}" placeholder="Rate" name="rate" value={{$data->rate}} readonly>



      <label class="sr-only" for="inlineFormInputName2">HSN/SAC </label>
      <input type="text" class="form-control col-3 ml-2 font-weight-bold " id="{{$data->id}}" placeholder="Rate" name="rate" value={{$data->hsn}} readonly>


      <span class="ml-4 delete-button"  data-toggle="tooltip" onclick="removeItem(this)" data-placement="top" title="delete item from DB" id={{$data->id}}><i class="fas fa-trash"></i></span>

    </div>







      </form>










@endforeach

</div>


<script src="js/listitems.js"></script>




@endsection
