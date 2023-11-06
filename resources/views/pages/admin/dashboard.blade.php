@extends('layouts.admin')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pengaduan}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Keseluruhan Penilaian</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$penilaian}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Petugas
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$petugas}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                               Pelanggan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customer}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Kepuasan Pelanggan</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                   Ada {{$satu}} Pelanggan yang merasa tidak puas dengan pelayanan
                    {{-- <div class="text-white-50 small">#4e73df</div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    Ada {{$dua}} Pelanggan yang merasa kurang puas dengan pelayanan
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                    Ada {{$tiga}} Pelanggan yang merasa cukup dengan pelayanan
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-warning text-white shadow">
                <div class="card-body">
                    Ada {{$empat}} Pelanggan yang merasa puas dengan pelayanan
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-danger text-white shadow">
                <div class="card-body">
                    Ada {{$lima}} Pelanggan yang merasa sangat puas dengan pelayanan
                </div>
            </div>
        </div>
    </div>

    
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
      var data = new google.visualization.arrayToDataTable([
        ['Move', 'Jumlah'],
        ["1/5", {{$satu}}],
        ["2/5", {{$dua}}],
        ["3/5", {{$tiga}}],
        ["4/5", {{$empat}}],
        ['5/5', {{$lima}}]
      ]);

      var options = {
        width: 800,
        legend: { position: 'none' },
        // chart: {
        //   title: 'Chess opening',
        //   subtitle: 'popularity by percentage' },
        axes: {
          x: {
            0: { side: 'top', label: 'Grafik Penilaian'} // Top x-axis.
          }
        },
        bar: { groupWidth: "90%" }
      };

      var chart = new google.charts.Bar(document.getElementById('top_x_div'));
      // Convert the Classic options to Material options.
      chart.draw(data, google.charts.Bar.convertOptions(options));
    };
  </script>
  <div id="top_x_div" style="width: 800px; height: 600px;"></div>
@endsection
