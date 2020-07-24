@extends('layouts.nav')

@section('content')


<div class="container">

    <form class="needs-validation mt-5" novalidate id="form-1">


        <div class="form-group">
            <label for="title"></label>
            <input type="text" class="form-control" id="title" placeholder="Title" required>
            <div class="invalid-feedback">
                Title is required
            </div>
        </div>





        <div class="form-group mt-5">
          <label for="story-content"></label>
{{-- <input type="text" class="form-control" id="story-content"  placeholder="content" required> --}}
<textarea name="story-content" id="content" class="form-control" cols="30" rows="10" required></textarea>
<div class="invalid-feedback">
    content is required
</div>
        </div>
        <button class="btn btn-primary" type="submit" id="submit-story">Submit form</button>
      </form>



</div>
      <script>


function request() {

var title = $('#title').value;
var content = document.getElementById('content').value;

var data = [];
data["title"] = title;
data["content"] = content;

console.log(data);

$.ajax({

    type: "POST",
    url: "http://localhost:8000/api/addstory",
    data: data,

    success: function (response) {
        console.log(response);
    }





});


}


$(document).ready(function () {



    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var form = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(form, function(form) {
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        if (form.checkValidity() === false) {
          form.classList.add('was-validated');
          event.preventDefault();
          event.stopPropagation();

        } else{

        request();
        }

      },false);
    }, false);

});



</script>


@endsection
