<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('asset/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Corona Result Indonesia
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <!-- CSS Files -->
  <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('asset/css/paper-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('asset/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('asset/img/logo.jpeg')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          CORONA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/dashboard">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Corona Indonesia</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">DKI JAKARTA</p>
                      <p class="card-title"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-plus"></i>
                  Kasus Positif : {{$dki['Kasus_Posi']}}
                </div>
                <div class="stats">
                  <i class="fa fa-check-square"></i>
                  Kasus Sembuh : {{$dki['Kasus_Semb']}}
                </div>
                <div class="stats">
                  <i class="fa fa-times"></i>
                  Kasus Meninggal : {{$dki['Kasus_Meni']}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">JAWA TIMUR</p>
                      <p class="card-title"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-plus"></i>
                  Kasus Positif : {{$timur['Kasus_Posi']}}
                </div>
                <div class="stats">
                <i class="fa fa-check-square"></i>
                  Kasus Sembuh : {{$timur['Kasus_Semb']}}
                </div>
                <div class="stats">
                  <i class="fa fa-times"></i>
                  Kasus Meninggal : {{$timur['Kasus_Meni']}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">JAWA TENGAH</p>
                      <p class="card-title"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-plus"></i>
                  Kasus Positif : {{$tengah['Kasus_Posi']}}
                </div>
                <div class="stats">
                <i class="fa fa-check-square"></i>
                  Kasus Sembuh : {{$tengah['Kasus_Semb']}}
                </div>
                <div class="stats">
                  <i class="fa fa-times"></i>
                  Kasus Meninggal : {{$tengah['Kasus_Meni']}}
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Rangkuman Data Corona Seluruh Indonesia</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
               <table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $key => $all)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$all['attributes']['Provinsi']}}</td>
                      <td>{{$all['attributes']['Kasus_Posi']}}</td>
                      <td>{{$all['attributes']['Kasus_Semb']}}</td>
                      <td>{{$all['attributes']['Kasus_Meni']}}</td>
                    </tr>
                    @endforeach
                  </tbody>
               </table>
              </div>
              <div class="card-footer ">
                <hr>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Perbandingan Corona di Indonesia Dan india</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
               <div class="row">
                 <div class="col-md-6">
                    <h5>Indonesia</h5>
                      Kasus Positif = {{$indonesia['positif']}} <br>
                      Kasus Sembuh = {{$indonesia['sembuh']}} <br>
                      Kasus Meninggal = {{$indonesia['meninggal']}} <br>
                 </div>
                 <div class="col-md-6">
                    <h5>India</h5>
                      Kasus Positif = {{$india['Confirmed']}} <br>
                      Kasus Sembuh =  {{$india['Recovered']}}<br>
                      Kasus Meninggal = {{$india['Deaths']}} <br>
                 </div>
               </div><br>

               <div class="col-md-12">
                 1. Kasus Positif di India lebih banyak {{$hasil}} atau {{ Str::limit($persen, 6) }}% kasus dibandingkan dengan indonesia <br>
               </div>

              </div>
              <div class="card-footer ">
                <hr>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ?? <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('asset/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('asset/js/core/popper.min.js')}}"></script>
  <script src="{{asset('asset/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('asset/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('asset/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('asset/js/paper-dashboard.min.js')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('asset/demo/demo.js')}}"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
  <script>
    //datatable
      $(document).ready( function () {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>
