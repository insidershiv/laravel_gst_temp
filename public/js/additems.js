var divcount = 1;



// AjAX REQUEST WILL BE MADE AND SENT


$("#submit-product").click(function (e) {
    e.preventDefault();
    console.log(divcount);
    var product_name = [];
    var product_rate = [];
//     $('input[name="name"]').each(function(){
//          product_name.push( $(this).val());
//     });

//     $('input[name="rate"]').each(function(){
//         product_rate.push( $(this).val());
//    });

//    $('input[name="rate"]').each(function(){
//     product_rate.push( $(this).val());
// });


var data = [];

for(var i = 1; i <= divcount; i++) {
    var temp = {};
temp["name"] = document.getElementById(("name-") + i).value;
temp["rate"] = document.getElementById(("rate-") + i).value;
temp["hsn"]  = document.getElementById(("hsn-") + i).value;
console.log(temp);
data.push(temp);
}


var temp = {"products":data}
var jsondata = JSON.stringify(temp);

console.log(jsondata);

//    }




    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
       type:'POST',
       url:'http://localhost:8000/api/additemslist',
       data: jsondata,
       success:function(data){
        swal({
            title: "Added Successfully ",
            text: "",
            icon: "success",
          });
       }
    });

});

$(window).on('hashchange', function(e){
    history.replaceState ("", document.title, e.originalEvent.oldURL);
});




// end of AJAX REQUEST

//    add rows


$("#add-more").click(function (e) {
    e.preventDefault();




   divcount = divcount + 1 ;



adddiv = '<div class="form-group w-100 mb-4" id="div-' + divcount + '">'

+ '<label class="sr-only" for="inlineFormInputName2">Name of Product </label>'
+ '<input type="text" class="form-control col-3" id="name-' + divcount + '"' +'placeholder="Name of Product" name="name">'



+ '<label class="sr-only" for="inlineFormInputName2">Rate of the Product </label>'
+ '<input type="text" class="form-control col-3 ml-3" id="rate-'+divcount  + '"'+ 'placeholder="Rate" name="rate">'

+ '<label class="sr-only" for="inlineFormInputName2">HSN/SAC </label>'
+ '<input type="text" class="form-control col-3 ml-3" id="hsn-' + divcount + '"' +'placeholder="HSN/SAC" name="hsn">'


+ '<span class="ml-4 delete-button"  data-toggle="tooltip" onclick="delete_item(this)" data-placement="top" title="delete item" id="div-' +  divcount + '"><i class="fas fa-trash"></i></span>'

+ '</div>';






   console.log(divcount);
    $(".form-inline").append(adddiv);


});



// delete Item From input Row

function delete_item(event) {
    console.log(event.parentNode);
    document.getElementById("main-form").removeChild(event.parentNode);
}
