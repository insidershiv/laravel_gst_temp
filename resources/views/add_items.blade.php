@extends('layouts.nav')


@section('content')



<div class="container mt-5 ">


<form class="form-inline" id="main-form">


<div class="form-group w-100 mb-4" id="div-1">

    <label class="sr-only" for="inlineFormInputName2">Name of Product </label>
    <input type="text" class="form-control col-3" id="name-1" placeholder="Name of Product" name="name">



  <label class="sr-only" for="inlineFormInputName2">Rate of the Product </label>
  <input type="text" class="form-control col-3  ml-3" id="rate-1" placeholder="Rate" name="rate">


  <label class="sr-only" for="inlineFormInputName2">HSN/SAC </label>
  <input type="text" class="form-control col-3 ml-3" id="hsn-1" placeholder="HSN/SAC" name="hsn">


  <span  class="ml-4 delete-button"  data-toggle="tooltip" onclick="delete_item(this)" data-placement="top" title="delete item" id="div-1"><i class="fas fa-trash"></i></span>

</div>










  </form>



  <div class="container  mt-5">

    <div class="col-md-5 offset-7">

        <button class="btn btn-success mr-2" id="submit-product">Submit Product</button>

        <button class="btn btn-success" id="add-more">Add More <span><i class="fas fa-plus"></i></span></button>


    </div>



  </div>



</div>



<script src="js/additems.js"></script>

@endsection
