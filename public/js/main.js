function printbill() {
    billsection = document.getElementById("bill-section");
    children = billsection.children;


for(var j =0 ;j<children.length;j++) {
    //console.log((document.getElementById("bill-section").children).children);
    row = (children[j]);
    item_name = row.children[0].children[1].children[0].value;
    if(item_name == ""){
        swal({
            title: "Please Select Item Name",
            text: "",
            icon: "error",
          });
        ins =
    }

    if(tax_type == undefined){
        swal({
            title: "Tax Type Missing !!",
            text: "",
            icon: "error",
          });
    }

}




    ele =   document.getElementsByClassName("fa-trash");
    console.log(ele);

    for(var i = 1; i<ele.length; i++) {
        (ele[i]).classList.add('product-btn');
    }

    $("#new").addClass('product-btn');

    $("#menu1").hide();      // will hide the dropdown button
    update_tax_type = "<span>" + tax_type + "</span>"; // how the layout will be
    $("#selected").text(tax_type);   //will set the tax type in the layout

    window.print();

}


var tax_type = undefined;   // tax_type selected by user is initially undefined

// console.log(data);


var match = true;

// var source = [
//     "ActionScript",
//     "AppleScript",
//     "Asp",
//     "BASIC",
//     "C",
//     "C++",
//     "Clojure",
//     "COBOL",
//     "ColdFusion",
//     "Erlang",
//     "Fortran",
//     "Groovy",
//     "Haskell",
//     "Java",
//     "JavaScript",
//     "Lisp",
//     "Perl",
//     "PHP",
//     "Python",
//     "Ruby",
//     "Scala",
//     "Scheme"
// ];


var source = product_name;


// var source = product_name;  //assigning product name from DB to source which is used in autocompleteUI



function autocompletelistner(event, ui) {
    if (ui.content.length === 0) {
        current = $(this);
        spanparent = (current.parent());
        childs = spanparent.children();
        child = (childs[1]);
        $(child).removeClass("product-btn");
       match = false;
        $("#empty-message").text("No results found");

    } else {
        $("#empty-message").empty();


    }
}

function showproductbtn(event) {
    current = event.target;
    spanparent = current.parentNode;
    product_name = spanparent.childNodes[1].value;
    addproduct_btn = spanparent.childNodes[3];
    if (product_name.length == 0) {
       $(addproduct_btn).addClass("product-btn");
    }
}

function assigncount(){
    // assigns item count in the list

    count = 1;
    billsection = document.getElementById("bill-section");
    children = billsection.children;


    for(i = 0 ; i < children.length; i++){
        product = children[i];
        id = product.children[0].children[0].children[0]; // id of the product
        id.children[0].children[0].children[0].children[1]
        innercount = ((id.children[1].children[0]));
        innercount.innerText = count;
        count++;
    }

}


function calamount(row,pname){

    hsn = (row.children[2].children[0]);
    hsn.value = product_hsn[pname];

    rate = row.children[4].children[0];

    rate.value = products[pname];

    domqty = row.children[3].children[0];
    qty = domqty.value.trim();


    if(qty.length == 0)
        return;

    var amnt = qty * products[pname];
    indiamnt = row.children[5].children[0].children[1].children[0]; // per item amount
    indiamnt.innerHTML = amnt;


}


function selecteditem(event, ui) {
    // item has been selected from drop down (autocomplete)

    pname = ui.item.label;
    row = event.target.parentNode.parentNode;

    qty = row.children[3].children[0];
    qty.value = 1;


    calamount(row,pname);


   if(tax_type) {
    calculate_amout_row()
    calc_subtotal();

   }




}








$(document).ready(function () {

    $(function() {
        $( "#my_date_picker" ).datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });

});

function addautocomplete(obj){
    $(obj).autocomplete({source,response: autocompletelistner, select:selecteditem });
    $(obj).keyup(showproductbtn);

}


// adds new row to the billsection
function addrow(event) {

    add_row_element = $("#cloneitem").clone();
    $(add_row_element).removeClass("hidden-section");

    added_row = ($("#bill-section").children().last().after(add_row_element));

    if( ($("#bill-section").children().last()[0]) == undefined){
        $("#bill-section").append(add_row_element);
    }
    assigncount();
    if(tax_type){
        set_tax(tax_type);
    }
     calculate_amout_row();

}


$(document).ready(function () {
    $("#new").on("click", addrow);

});




// Update all the rows for tax value

function set_tax(tax_type) {


    childcount = ($("#bill-section").children().length);


    id = document.getElementById("bill-section");


    for(i =0 ; i<childcount;i ++) {

        tax_section = id.children[i];
       tax_value =  ((tax_section).children[0].children[5].children[0].children[0].children[0]);

        if(tax_type =="IGST") {
            $(tax_value).text("18 %");
        }

        if(tax_type =="CGST") {
            $(tax_value).text("9 %");
        }

        if(tax_type =="SGST") {
            $(tax_value).text("9 %");
        }



    }


    if(tax_type =="IGST") {

        document.getElementById("show_tax_type").innerText = tax_type + "(18%)";
    }

    if(tax_type =="CGST") {

        document.getElementById("show_tax_type").innerText = tax_type + "(9%)";
    }

    if(tax_type =="SGST") {

        document.getElementById("show_tax_type").innerText = tax_type + "(9%)";
    }





}








/*  Getting Value of selected tax  */
$('#menu2 button').on('click',function() {

    tax_type = ($(this).text());
    // $("#menu1").hide();      // will hide the dropdown button
    // update_tax_type = "<span>" + tax_type + "</span>"; // how the layout will be
    // $("#selected").text(tax_type);   //will set the tax type in the layout
    document.getElementById("dropdownMenu2").innerText = tax_type;
    set_tax(tax_type);
    calculate_amout_row();
    calc_subtotal();


  });


  function deleterow (event) {
      ((event.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(event.parentNode.parentNode.parentNode.parentNode.parentNode)));
      assigncount();
      calc_subtotal();

    }


    // calculating amount to be written in the last column of each Row

    function calculate_amout_row() {

        bills = $("#bill-section");

        childs = bills.children().length;


        children = bills.children();
        for(var i = 0 ; i<childs;i++) {
            tax_row = (children[i].children[0].children[5].children[0]);


            row_qty =    (children[i].children[0].children[3].children[0].value);
            row_rate =   (children[i].children[0].children[4].children[0].value);


            if(tax_type) {
                temp = (tax_row.children[0].children[0].innerText);
                var no_tax_amount = Number(tax_row.children[1].children[0].innerText);
                var  row_interest = Number(temp.slice(0, -1));
                actual_tax_value = (row_interest * no_tax_amount * 0.01 );
                if(no_tax_amount != 0) {
               var row_main_amount = actual_tax_value + no_tax_amount;

                row_withtax_amount = (children[i].children[0].children[6].children[0]);

                row_withtax_amount.innerText = (row_main_amount);

                }


            }


        }



    }



    function qtychanged(event) {

        row = (event.parentNode.parentNode);
        p_name = (row.children[1].children[0].value);

        calamount(row, p_name);
        calculate_amout_row();
        calc_subtotal();

      }



    //   calculates subtotal that  is sums up the complete column value for  "Amt"

      function calc_subtotal() {


      billsection = document.getElementById("bill-section");

      count_child = (billsection.children.length);
      var subtotal = 0;
      var total_amount = 0 ;

      for(var i =0 ; i< count_child; i++) {


          current_amount_row = Number(billsection.children[i].children[0].children[5].children[0].children[1].children[0].innerText);

            row_amount_withtax = Number(billsection.children[i].children[0].children[6].children[0].innerText);
            subtotal = subtotal +  current_amount_row;
            total_amount = total_amount + row_amount_withtax;

      }

      (document.getElementById("subtotal_value").innerText = subtotal);
      document.getElementById("total_payable").innerText = total_amount;
      document.getElementById("tax_payable").innerText = total_amount - subtotal;
      document.getElementById("amount_words").innerText = convertNumberToWords(total_amount);

    }


    // calculates total thats is summing Up the last column Amount of each row




    function convertNumberToWords(amount) {
        var words = new Array();
        words[0] = '';
        words[1] = 'One';
        words[2] = 'Two';
        words[3] = 'Three';
        words[4] = 'Four';
        words[5] = 'Five';
        words[6] = 'Six';
        words[7] = 'Seven';
        words[8] = 'Eight';
        words[9] = 'Nine';
        words[10] = 'Ten';
        words[11] = 'Eleven';
        words[12] = 'Twelve';
        words[13] = 'Thirteen';
        words[14] = 'Fourteen';
        words[15] = 'Fifteen';
        words[16] = 'Sixteen';
        words[17] = 'Seventeen';
        words[18] = 'Eighteen';
        words[19] = 'Nineteen';
        words[20] = 'Twenty';
        words[30] = 'Thirty';
        words[40] = 'Forty';
        words[50] = 'Fifty';
        words[60] = 'Sixty';
        words[70] = 'Seventy';
        words[80] = 'Eighty';
        words[90] = 'Ninety';
        amount = amount.toString();
        var atemp = amount.split(".");
        var number = atemp[0].split(",").join("");
        var n_length = number.length;
        var words_string = "";
        if (n_length <= 9) {
            var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
            var received_n_array = new Array();
            for (var i = 0; i < n_length; i++) {
                received_n_array[i] = number.substr(i, 1);
            }
            for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
                n_array[i] = received_n_array[j];
            }
            for (var i = 0, j = 1; i < 9; i++, j++) {
                if (i == 0 || i == 2 || i == 4 || i == 7) {
                    if (n_array[i] == 1) {
                        n_array[j] = 10 + parseInt(n_array[j]);
                        n_array[i] = 0;
                    }
                }
            }
            value = "";
            for (var i = 0; i < 9; i++) {
                if (i == 0 || i == 2 || i == 4 || i == 7) {
                    value = n_array[i] * 10;
                } else {
                    value = n_array[i];
                }
                if (value != 0) {
                    words_string += words[value] + " ";
                }
                if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Crores ";
                }
                if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Lakhs ";
                }
                if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                    words_string += "Thousand ";
                }
                if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                    words_string += "Hundred and ";
                } else if (i == 6 && value != 0) {
                    words_string += "Hundred ";
                }
            }
            words_string = words_string.split("  ").join(" ");
        }
       return words_string;
    }



    // DB TEst

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#save-product").click(function(e){

        e.preventDefault();
        console.log(e);
        var name = $("#product_name").val();
        var rate = $("#unit_rate").val();
        var hsn = $("#hsn-modal").val();



        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           type:'POST',
           url:'http://localhost:8000/api/additems',
           data: {"name":name, "rate":rate, "hsn":hsn},
           success:function(data){
             $("#modal").modal('toggle');

             products[name] = rate;
             product_hsn[name] = hsn;

             source.push(name);

             console.log(products);
           }
        });

	});



    // clearing the input field of product name after pressing add modal button

    function hideInput(event) {

     input_field =  (event.parentNode.children[0]);
        input_field.value = "";
        var btn = (event.parentNode.children[1]);
        btn.classList.add("product-btn");

    }
