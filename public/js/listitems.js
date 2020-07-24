$(window).on('hashchange', function(e){
    history.replaceState ("", document.title, e.originalEvent.oldURL);
});


function removeItem(event) {
    // name = (event.parentNode.children[1].value);
    // rate = (event.parentNode.children[3].value);
    // hsn =  (event.parentNode.children[5].value);
    product_id = (event.id);



    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "DELETE",
        url:'http://localhost:8000/api/deleteitem',

        data: {"product_id":product_id},

        success: function (response) {
            swal({
                title: "Item Deleted",
                text: "",
                icon: "success",
              });
        }
    });




    (event.parentNode.parentNode.parentNode).removeChild((event.parentNode.parentNode));


}
