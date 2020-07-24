
<div class="container p-0" id="billing">
<div class="container no-gutters hrline-bottom">

    <div class="row no-gutters">

        <div class="col-md-1 section-item-border no-gutters text-center">

                <span class="section-heading">#</span>

        </div>

        <div class="col-md-3 pl-1 section-heading section-item-border text-center">

            <span>Item & Description</span>

        </div>

        <div class="col-md-1 pl-1 section-heading section-item-border text-center">

            <span>HSN/SAC</span>

        </div>

        <div class="col-md-1 pl-1 section-heading section-item-border text-center">

            <span>QTY</span>

        </div>

        <div class="col-md-1 pl-1 section-heading section-item-border  text-center">

            <span>Rate</span>

        </div>

        <div class="col-md-4 pl-0 section-heading section-item-border text-center" id="tax">

            <div class="hrline-bottom m-0 p-0">
                <div class="dropdown" id="menu1">
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Tax type
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2" id="menu2">
                      <button class="dropdown-item" type="button">IGST</button>
                      <button class="dropdown-item" type="button">CGST</button>
                      <button class="dropdown-item" type="button">SGST</button>
                    </div>
                  </div>
                  <span id="selected"></span>

            </div>








            <div class="row">


            <div class="col-md-6 section-item-border">
                <span>%</span>
            </div>

            <div class="col-md-6">
                <span>Amt</span>
            </div>

        </div>
        </div>






        <div class="col-md-1 pl-1 section-heading  text-center">

            <span>Amount</span>

        </div>

    </div>

</div>


{{-- end of heading --}}




{{-- begining of bill input --}}



{{-- Bill 1 --}}
<div class="container no-gutters hrline-bottom hidden-section" id="cloneitem">


    <div class="row no-gutters ">

        <div class="col-md-1 section-item-border no-gutters text-center">

                {{-- <span class="bill-item"></span> --}}

                <div class="row">

                    <div class="col-md-1">
                        <a href="#" class="p-1" onclick="deleterow(this)" data-toggle="tooltip" data-placement="top" title="delete item"> <i class="fas fa-trash"></i></a>
                          </div>


                    <div class="col-md-6 text-center">
                        <span class="bill-item">1</span>
                        </div>

                </div>




        </div>

        <div class="col-md-3 bill-item section-item-border text-center p-0" id="description">
{{-- item name --}}
           <input type="text" class="w-100 p-0 no-border text-wrap" onclick="addautocomplete(this)">
              <button class="btn btn-success btn-sm product-btn mt-1 mb-1 ml-3" id="add-product" onclick="hideInput(this)" data-toggle="modal" data-target="#modal">Add product + </button>















        </div>

        <div class="col-md-1 pl-1 bill-item section-item-border text-center">
            {{-- HSN --}}
            <input type="text" class="w-100 p-0 no-border text-wrap text-center">

        </div>

        <div class="col-md-1 pl-1 bill-item section-item-border text-center">
{{-- QTY --}}
            <input type="text" class="w-100 p-0 no-border text-wrap text-center" onchange="qtychanged(this)">

        </div>

        <div class="col-md-1 pl-1 bill-item section-item-border  text-center">
{{-- Rate --}}
            <input type="text" class="w-100 p-0 no-border text-wrap text-center" readonly>
        </div>

        <div class="col-md-4 pl-0 bill-item section-item-border text-center">



            <div class="row h-100">


            <div class="col-md-6 section-item-border">
                <span></span><br>
            </div>

            <div class="col-md-6 h-100">
                <span class="text-break"></span>
            </div>

        </div>
        </div>






        <div class="col-md-1 pl-1 bill-item  text-center">

            <span class="text-break"></span>

        </div>

    </div>



</div>


{{-- bill section first row  --}}

<div class="container p-0"  id="bill-section">

<div class="container no-gutters hrline-bottom">


    <div class="row no-gutters ">

        <div class="col-md-1 section-item-border no-gutters text-center">

            <div class="row">

                <div class="col-md-1">
                    <a href="#" class="p-1" onclick="deleterow(this)" data-toggle="tooltip" data-placement="top" title="delete item"><i class="fas fa-trash"></i></a>
                      </div>


                <div class="col-md-6 text-center">
                    <span class="bill-item">1</span>
                    </div>

            </div>


        </div>

        <div class="col-md-3 bill-item section-item-border text-center p-0" id="description">
{{-- Item field --}}
           <input type="text" class="w-100 p-0 no-border text-wrap bottom-border" onclick="addautocomplete(this)">
              <button class="btn btn-success btn-sm product-btn mt-1 mb-1 ml-3" id="add-product" onclick="hideInput(this)" data-toggle="modal" data-target="#modal">Add product + </button>

        </div>

        <div class="col-md-1 pl-1 bill-item section-item-border text-center">
{{-- HSN --}}
            {{-- <span class="text-break" contenteditable="true"></span> --}}
            <input type="text" class="w-100 p-0 no-border text-wrap text-center">


        </div>

        <div class="col-md-1 pl-1 bill-item section-item-border text-center">
{{-- QTY Field --}}
            <input type="text" class="w-100 p-0 no-border text-wrap text-center" onchange="qtychanged(this)">

        </div>

        <div class="col-md-1 pl-1 bill-item section-item-border  text-center">

            <input type="text" class="w-100 p-0 no-border text-wrap text-center" readonly>

        </div>

        <div class="col-md-4 pl-0 bill-item section-item-border text-center">



            <div class="row h-100">


            <div class="col-md-6 section-item-border">
                <span></span><br>
            </div>

            <div class="col-md-6 h-100">
                <span class="text-break"></span>
            </div>

        </div>
        </div>






        <div class="col-md-1 pl-1 bill-item  text-center">

            <span class="text-break"></span>

        </div>

    </div>



</div>

</div>

{{-- 2nd bill Empty bill row template--}}











{{-- bill 3 --}}









{{-- bill 4 --}}







<div class="container">
    <div class="d-flex justify-center align-content-center">
        <button class="btn btn-success mt-3 ml-3"  id="new"> Add Row + </button>
    </div>
</div>




</div>

<div class="container">


    <div class="row">


        <div class="col-md-7  pr-0">

            <div class="mt-3">
            <span  class="text-capitalize mt-2 pt-2 dis-block">total in words </span>
            <span class="section-heading dis-block" id="amount_words"></span>


            <p class="small-content mt-4 text-capitalize"> Thanks for your Business</p>



            <div >

              <span class=" text-capitalize section-heading"> terms & conditions</span>

              <span  class="dis-block small-content">1.Subject to Ghazibad Jurisdiction.</span>
              <span class="dis-block small-content">2.This is a computer generated invoice.No signature required.</span>

            </div>


            </div>


        </div>
        <div class="col-md-1 p-0">
            <div class="hid"></div>
        </div>

        <div class="col-md-4 pt-2 hr">

            <div class="row hrline-bottom">
            <div class="col-md-2 offset-2 ">
                    <span class="small-content text-nowrap mt-2">Sub Total</span>

                    <span class="small-content mt-2" id="show_tax_type">Tax</span>
                    <span class="small-content mt-2" >Total</span>
                    <span class="section-heading mt-2 text-left text-nowrap text-capitalize">balance Due</span>

            </div>

            <div class="col-md-3 offset-5">
                <span class="bill-value  text-nowrap mt-2" id="subtotal_value">0</span>

                <span class="bill-value dis-block text-nowrap" id="tax_payable">0</span>
                <span class="bill-value dis-block  text-nowrap" id="total_payable">0</span>
                <span class="section-heading dis-block  text-left text-nowrap text-capitalize">0</span>
            </div>

        </div>






        </div>




    </div>



</div>


<div class="container">
    <div class="row no-gutters">
        <div class="col-md-4 offset-8 p-0">
            <div class="text-center" style="border-left: 3px ">
                <p>Authorized Signature</p>
            </div>
        </div>
    </div>
</div>


























