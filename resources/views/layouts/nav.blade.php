
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&family=Poiret+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js" integrity="sha256-55Jz3pBCF8z9jBO1qQ7cIf0L+neuPTD1u7Ytzrp2dqo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<link rel="stylesheet" href="{{asset('css/invoice.css')}}">
<link rel="stylesheet"      href="{{asset('css/print.css')}}"     type="text/css"      media="print" />














<nav class="navbar navbar-expand navbar-light bg-light">


    <ul class="nav navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" href="/generateinvoice">New Bill</a>
             </li>

        <li class="nav-item">
        <a class="nav-link" href="/additem">Add Items</a>
         </li>
        <li class="nav-item">
            <a class="nav-link" href="/itemlist">List Items</a>
        </li>

    </ul>

</nav>


@yield('content')
