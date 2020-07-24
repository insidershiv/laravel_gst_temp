@extends('layouts.nav')


@section('content')



<div class="container  mt-2 pt-4 pl-0 pr-0 border" id="print-area">


<x-heading/>

<x-billto/>

<x-billdescription/>

<div class="print-button mb-2">

<button class="btn btn-success" id="printid" onclick="printbill()">Print </button>

</div>

</div>





{{-- <button class="btn btn-primary " data-toggle = "modal" data-target="#something">Login</button> --}}


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal-style">

          <h3 class="modal-title" id="myModalLabel"">Add New Product</h3>
        </div>
        <div class="modal-body">


            <form>
                @csrf
                <div class="form-group">
                    <label for="Product Name" class="modal-label">Product Name</label>
                    <input type="text" placeholder="New Product Name" class="form-control mb-2" name="product_name" id="product_name" autocomplete="off">
                </div>


                <div class="form-group">
                    <label for="unit rate" class="modal-label">Unit Rate</label>
                    <input type="text" placeholder="Unit Rate" class="form-control" name="unit_rate" id="unit_rate" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="hsn" class="modal-label">HSN</label>
                    <input type="text" placeholder="HSN/SAC" class="form-control" name="hsn" id="hsn-modal" autocomplete="off">
                </div>



            </form>





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close

          </button>
          <button type="button" class="btn btn-success" id="save-product">ADD Product <span style="font-size: 20px; font-weight:bold"> + </span> </button>


        </div>
      </div>
    </div>
  </div>






{{--

    @foreach($data as $item)

    <li> {{$item->name}}</li>

    @endforeach --}}
<script>
   var data = {!! ($data) !!};console.log(data);
   var len  = data.length;
   var product_name=[];
   var products = {};
   var product_hsn = {};
  for(i = 0 ; i< len; i++) {
      product_name.push(data[i]["name"]);
      products[data[i]["name"]] = data[i]["rate"];
      product_hsn[data[i]["name"]] = data[i]["hsn"];
  }
  console.log(product_name);

  console.log(product_hsn);


</script>


<script src="js/main.js"></script>




@endsection
