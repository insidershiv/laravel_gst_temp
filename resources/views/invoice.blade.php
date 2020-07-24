@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

<link rel="stylesheet"      href="{{asset('css/print.css')}}"     type="text/css"      media="print" />
<script src="js/main.js"></script>
@section('content')



<div class="container border" id="customers">

<div class="d-flex  p-3">

    <div>

        <img src="{{asset('images/bill.svg')}}" alt="" class="responsive"  height="100">
    </div>
    <div class="ml-auto">

        <div class="oxygen-font">
            <p class="font-weight-bold">RMZ Company Enterprizes</p>
            <p style="font-weight:400">Delhi, India</p>
            <p style="font-weight:400">Contact@gmail.com</p>


        </div>

    </div>


</div>


<div class="container">

<h4 class="text-center">Invoice</h4>

</div>



<div class="d-flex bd-highlight mb-3">
    <div class="p-3 bd-highlight col-sm-6">

        <p class="oxygen-font">
            <span class="font-weight-bold">INVOICE TO: </span>
        </p>


{{--
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Company Name :</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Name">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Address :</label>

              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form> --}}


          Komal Bhatia
          <br>
          My Enterporize
          <br>
          big Company
          <br>
          very big
          <br>
          Delhi, India



    </div>

    <div class="ml-auto p-2 invoice bd-highlight">

    <p>
        <span class="oxygen-font font-weight-bold">Invoice No. </span>
        <span id="invoice"> 124</span>

    </p>


    <p>
        <span class="oxygen-font font-weight-bold">Date: </span>
    <span id="invoice"> {{date('Y-m-d H:i:s')}}</span>

    </p>



    </div>
  </div>

<hr color="#33D7FF">


{{--  --}}

{{-- Bill section --}}
{{--
<div class="d-flex flex-column bd-highlight invoice-table specifictd"> --}}

    {{-- TABLE HEAD --}}

    {{-- <div class="d-flex invoice-table specifictd ">
        <div class="p-2   flex-shrink-1">No.</div>
        <div class="p-2 thead-dark flex-grow-1" >Item/Service</div>
        <div class="p-2 thead-dark flex-fill">HSN / SAC </div>
        <div class="p-2 thead-dark flex-fill">Quantity</div>
        <div class="p-2 thead-dark flex-fill">unit Price</div>
        <div class="p-2 thead-dark flex-fill">Taxable Value</div>
        <div class="p-2 thead-dark flex-fill">CGST</div>
        <div class="p-2 thead-dark flex-fill">SGST/UTGST</div>
        <div class="p-2 thead-dark flex-fill">CESS</div>
        <div class="p-2 thead-dark flex-fill">Total</div>
    </div> --}}

    {{-- ROW 1 --}}

{{--
    <div class="d-flex  invoice-table specifictd ">
      <div class="p-2   flex-shrink-1">1</div>
      <div class="p-2 thead-dark flex-grow-1" >Item/Service</div>
      <div class="p-2 thead-dark flex-fill">1245 </div>
      <div class="p-2 thead-dark flex-fill">5</div>
      <div class="p-2 thead-dark flex-fill">3500</div>
      <div class="p-2 thead-dark flex-fill">545</div>
      <div class="p-2 thead-dark flex-fill">5</div>
      <div class="p-2 thead-dark flex-fill">95484</div>
      <div class="p-2 thead-dark flex-fill">*97897949</div>
      <div class="p-2 thead-dark flex-fill">99999999999</div>
  </div>


</div> --}}


{{--

  <form>
    <div class="form-group row">
      <div class="col-xs-1">
        <label for="ex1">col-xs-2</label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2">col-xs-3</label>
        <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">col-xs-4</label>
        <input class="form-control" id="ex3" type="text">
      </div>
    </div>
  </form> --}}





{{--  --}}
{{--
<div>


<table class="table">
    <thead class="thead-dark">
      <tr>
    <th class="specifictd" scope="col">#</th>
    <th class="specifictd" scope="col" colspan=2>Item/Service</th>
    <th class="specifictd" scope="col">HSN / SAC </th>
    <th class="specifictd" scope="col">Quantity</th>
    <th class="specifictd" scope="col">unit Price</th>
    <th class="specifictd" scope="col">Taxable Value</th>
    <th class="specifictd" scope="col">CGST</th>
    <th class="specifictd" scope="col">SGST/UTGST</th>
    <th class="specifictd" scope="col">CESS</th>
    <th class="specifictd" scope="col">Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="specifictd" scope="row">1</th>
        <td class="specifictd">Mark</td>
        <td class="specifictd">Otto</td>
        <td class="specifictd">@mdo</td>
        <td class="specifictd">@mdo</td>
        <td class="specifictd">@mdo</td>
        <td class="specifictd">@mdo</td>
        <td class="specifictd">@mdo</td>
        <td class="specifictd">@mdo</td>
        <td class="specifictd">@mdo</td>
      </tr>

    </tbody>
  </table>

</div>
 --}}







 <div class="container" id="invoice-table">
  <div class="row mt-2 p-2" style="background-color: #343A40; color:white; text-align:left;">
    <div class="col-sm-1">
      No.
    </div>
    <div class="col-sm-2">
      Item/Service
    </div>
    <div class="col-sm">
      HSN / SAC
    </div>

    <div class="col-sm">
      Quantity
    </div>

    <div class="col-sm" >
      unit Price
    </div>

    <div class="col-sm">
      Taxable
    </div>

    <div class="col-sm">
      CGST
    </div>

    <div class="col-sm" >
      SGST
    </div>

    <div class="col-sm">
      CESS
    </div>


    <div class="col-sm">
      Total
    </div>


  </div>





{{--

  <div class="row mt-2 p-2 bg-light">
    <div class="col-sm-1" >
      No.
    </div>
    <div class="col-sm-2">
      Item/Service
    </div>


    <div class="col-sm" >
      HSN / SAC
    </div>

    <div class="col-sm" >
      Quantity
    </div>

    <div class="col-sm" >
      unit Price

    </div>

    <div class="col-sm" >
      Taxable
    </div>

    <div class="col-sm" >
      CGST
    </div>

    <div class="col-sm" >
      SGST
    </div>


    <div class="col-sm" >
      CESS
    </div>


    <div class="col-sm">
      Total
    </div>

  </div>
 --}}











  <div class="row mt-2 p-2 bg-light">
    <div class="col-sm-1" >
      1
    </div>
    <div class="col-sm-2">
      this is my name
    </div>


    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>


    <div class="col-sm" >
       8989999
    </div>

    <div class="col-sm" >
      8989999
   </div>


  </div>








  <div class="row mt-2 p-2" style="background-color: #E9ECEF">
    <div class="col-sm-1" >
      2
    </div>
    <div class="col-sm-2">
      this is my name
    </div>


    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>


    <div class="col-sm" >
       8989999
    </div>

    <div class="col-sm" >
      8989999
   </div>


  </div>



  <div class="row mt-2 p-2 bg-light">
    <div class="col-sm-1" >
      3
    </div>
    <div class="col-sm-2">
      this is my name
    </div>


    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>


    <div class="col-sm" >
       8989999
    </div>

    <div class="col-sm" >
      8989999
   </div>


  </div>




  <div class="row mt-2 p-2" style="background-color: #E9ECEF">
    <div class="col-sm-1" >
      4
    </div>
    <div class="col-sm-2">
      this is my name
    </div>


    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
     898980
    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>

    <div class="col-sm" >
         898980

    </div>


    <div class="col-sm" >
       8989999
    </div>

    <div class="col-sm" >
      8989999
   </div>


  </div>








{{--

  <div class="row mt-2 p-2" style="background-color: #E9ECEF">
    <div class="col-sm-1" >
      1
    </div>
    <div class="col-sm-3">
      <input type="text" class="col-sm-12">
    </div>
    <div class="col-sm">

    </div>

    <div class="col-sm" >
      <input type="text" class="col-sm-12">
    </div>

    <div class="col-sm" >
      <input type="text" class="col-sm-12">
    </div>

    <div class="col-sm" >
          <input type="text" class="col-sm-12">

    </div>

    <div class="col-sm" >
          <input type="text" class="col-sm-12">

    </div>

    <div class="col-sm" >
          <input type="text" class="col-sm-12">

    </div>

    <div class="col-sm" >
          <input type="text" class="col-sm-12">

    </div>


    <div class="col-sm" >
          <input type="text" class="col-sm-12">

    </div>


  </div> --}}



<div>

<hr class="dotted mt-5">



</div>

<div class="container">



<div class="row mt-2 p-2" >

<div class="col-sm-8">

</div>

<div class="col-sm-4" style="text-align: left">

 <div class="row ">
<div class="col-sm-6"><p>Subtotal::  </p></div>


<div class="col-sm-6"><p class="ml-auto">55545</p></div>

 </div>




 <div class="row mar" >
  <div class="col-sm-6"><p>CGST @ 9% ::  </p></div>


  <div class="col-sm-6"><p class="ml-auto">55545</p></div>

   </div>





 <div class="row mar">
  <div class="col-sm-6"><p>SGST @ 9%::  </p></div>


  <div class="col-sm-6"><p class="ml-auto">55545</p></div>

   </div>





 <div class="row mar">
  <div class="col-sm-6 total" ><p>Total::  </p></div>


  <div class="col-sm-6 total-value"><p class="ml-auto">55545</p></div>

   </div>


</div>


</div>






</div>



















</div>

{{--
<a href="#" onclick="demoFromHTML()" id="printid"> Print</a> --}}


<button class="btn btn-primary"   onclick="printbill()" id="printid"> print</button>









</div>


@endsection
