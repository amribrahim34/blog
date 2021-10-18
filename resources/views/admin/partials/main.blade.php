<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Kode - Premium Bootstrap Admin Template</title>

  <!-- ========== Css Files ========== -->
  <link href="{{asset('assets/admin/css/root.css')}}" rel="stylesheet">


  </head>
  <body>
    <!-- Start Page Loading -->
    <div class="loading">
      <img src="{{asset('assets/admin/img/loading.gif')}}" alt="loading-img">
    </div>
    <!-- End Page Loading -->
    <!-- START TOP -->
    <div id="top" class="clearfix">
        @include('admin.partials.header')
        <!-- End Top Menu -->
    </div>
    @include('admin.partials.menu')

        <!-- END TOP -->
        <!-- START CONTENT -->
        <div class="content">
        <!-- START CONTAINER -->
        <div class="container-padding">
            <!-- Start Row -->
            <div class="row">
                @yield('content')
            </div>
            <!-- End Row -->
        </div>
        <!-- END CONTAINER -->
        <!-- //////////////////////////////////////////////////////////////////////////// --> 
        <!-- END CONTAINER -->
            <!-- Start Footer -->
                @include('admin.partials.footer')
            <!-- End Footer -->
        </div>


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/jquery.min.js')}}"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="{{asset('assets/admin/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/plugins.js')}}"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/bootstrap-select/bootstrap-select.js')}}"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{asset('assets/admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js')}}"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="{{asset('assets/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/summernote/summernote.min.js')}}"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{asset('assets/admin/js/flot-chart/flot-chart.js')}}"></script>
<!-- time.js -->
<script type="text/javascript" src="{{asset('assets/admin/js/flot-chart/flot-chart-time.js')}}"></script>
<!-- stack.js -->
<script type="text/javascript" src="{{asset('assets/admin/js/flot-chart/flot-chart-stack.js')}}"></script>
<!-- pie.js -->
<script type="text/javascript" src="{{asset('assets/admin/js/flot-chart/flot-chart-pie.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{asset('assets/admin/js/flot-chart/flot-chart-plugin.js')}}"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{asset('assets/admin/js/chartist/chartist.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{asset('assets/admin/js/chartist/chartist-plugin.js')}}"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{asset('assets/admin/js/easypiechart/easypiechart.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{asset('assets/admin/js/easypiechart/easypiechart-plugin.js')}}"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="{{asset('assets/admin/js/sparkline/sparkline.js')}}"></script>
<!-- demo codes -->
<script type="text/javascript" src="{{asset('assets/admin/js/sparkline/sparkline-plugin.js')}}"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="{{asset('assets/admin/js/rickshaw/d3.v3.js')}}"></script>
<!-- main file -->
<script src="{{asset('assets/admin/js/rickshaw/rickshaw.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('assets/admin/js/rickshaw/rickshaw-plugin.js')}}"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="{{asset('assets/admin/js/datatables/datatables.min.js')}}"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="{{asset('assets/admin/js/sweet-alert/sweet-alert.min.js')}}"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="{{asset('assets/admin/js/kode-alert/main.js')}}"></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- main file -->
<script src="{{asset('assets/admin/js/gmaps/gmaps.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('assets/admin/js/gmaps/gmaps-plugin.js')}}"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/moment/moment.min.js')}}"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/full-calendar/fullcalendar.js')}}"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="{{asset('assets/admin/js/date-range-picker/daterangepicker.js')}}"></script>

<!-- ================================================
Below codes are only for index widgets
================================================ -->
<!-- Today Sales -->
<script>

// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 110; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todaysales"),
  renderer: 'bar',
  series: [
    {
      color: "#33577B",
      data: seriesData[0],
      name: 'Photodune'
    }, {
      color: "#77BBFF",
      data: seriesData[1],
      name: 'Themeforest'
    }, {
      color: "#C1E0FF",
      data: seriesData[2],
      name: 'Codecanyon'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );

</script>

<!-- Today Activity -->
<script>
// set up our data series with 50 random data points

var seriesData = [ [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(20);

for (var i = 0; i < 50; i++) {
  random.addData(seriesData);
}

// instantiate our graph!

var graph = new Rickshaw.Graph( {
  element: document.getElementById("todayactivity"),
  renderer: 'area',
  series: [
    {
      color: "#9A80B9",
      data: seriesData[0],
      name: 'London'
    }, {
      color: "#CDC0DC",
      data: seriesData[1],
      name: 'Tokyo'
    }
  ]
} );

graph.render();

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
  formatter: function(series, x, y) {
    var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
    var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
    var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
    return content;
  }
} );
</script>



</body>
</html>

