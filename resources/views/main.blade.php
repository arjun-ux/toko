<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teddy's Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/my.css')}}"/>
    <link rel="icon" sizes="32x32" href="{{asset('img/favicon.ico')}}">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
   </head>
  <body id="idbody">

    @include('layouts.navbar')

    @yield('content')


    <script>
      feather.replace()
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- Script js.ajax untuk mencari data --}}
    <script>
        $(document).ready(function() {
            // readData();
            $("#input").keyup(function() {
                var cari = $("#input").val();
                if (cari != ""){
                    $("#read").html('<p><center><strong>Menunggu Data Yang Dicari...</strong></center></p>');
                    $.ajax({
                        type: "get",
                        url: "{{ url('ajax') }}",
                        data: "name=" + cari,
                        success:function(data){
                            $("#read").html(data);
                        }
                    });
                }else{
                    readData();
                }
            });
        });

        function readData(){
            $.get("{{ url('read') }}",{},
            function(data, status) {
                $("#read").html(data);
            });
        }
    </script>
</body>
</html>
