<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/')  }}/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @section('css')
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
    @include('admin.includes.header')
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    @include('admin.includes.menu')
</aside>
<main class="app-content">
    @yield('body')
</main>
<!-- Essential javascripts for application to work-->
<script src="{{ asset('/')  }}/admin/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/')  }}/admin/js/popper.min.js"></script>
<script src="{{ asset('/')  }}/admin/js/bootstrap.min.js"></script>
<script src="{{ asset('/')  }}/admin/js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('/')  }}/admin/js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="{{ asset('/')  }}/admin/js/plugins/chart.js"></script>
<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}', 'Error',{
        closeButton:true,
        progressBar:true
    });
    @endforeach
    @endif
</script>
@section('js')
{{--<script type="text/javascript">--}}
{{--    var data = {--}}
{{--        labels: ["January", "February", "March", "April", "May"],--}}
{{--        datasets: [--}}
{{--            {--}}
{{--                label: "My First dataset",--}}
{{--                fillColor: "rgba(220,220,220,0.2)",--}}
{{--                strokeColor: "rgba(220,220,220,1)",--}}
{{--                pointColor: "rgba(220,220,220,1)",--}}
{{--                pointStrokeColor: "#fff",--}}
{{--                pointHighlightFill: "#fff",--}}
{{--                pointHighlightStroke: "rgba(220,220,220,1)",--}}
{{--                data: [65, 59, 80, 81, 56]--}}
{{--            },--}}
{{--            {--}}
{{--                label: "My Second dataset",--}}
{{--                fillColor: "rgba(151,187,205,0.2)",--}}
{{--                strokeColor: "rgba(151,187,205,1)",--}}
{{--                pointColor: "rgba(151,187,205,1)",--}}
{{--                pointStrokeColor: "#fff",--}}
{{--                pointHighlightFill: "#fff",--}}
{{--                pointHighlightStroke: "rgba(151,187,205,1)",--}}
{{--                data: [28, 48, 40, 19, 86]--}}
{{--            }--}}
{{--        ]--}}
{{--    };--}}
{{--    var pdata = [--}}
{{--        {--}}
{{--            value: 300,--}}
{{--            color: "#46BFBD",--}}
{{--            highlight: "#5AD3D1",--}}
{{--            label: "Complete"--}}
{{--        },--}}
{{--        {--}}
{{--            value: 50,--}}
{{--            color:"#F7464A",--}}
{{--            highlight: "#FF5A5E",--}}
{{--            label: "In-Progress"--}}
{{--        }--}}
{{--    ]--}}

{{--    var ctxl = $("#lineChartDemo").get(0).getContext("2d");--}}
{{--    var lineChart = new Chart(ctxl).Line(data);--}}

{{--    var ctxp = $("#pieChartDemo").get(0).getContext("2d");--}}
{{--    var pieChart = new Chart(ctxp).Pie(pdata);--}}
{{--</script>--}}
{{--<!-- Google analytics script-->--}}
{{--<script type="text/javascript">--}}
{{--    if(document.location.hostname == 'pratikborsadiya.in') {--}}
{{--        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');--}}
{{--        ga('create', 'UA-72504830-1', 'auto');--}}
{{--        ga('send', 'pageview');--}}
{{--    }--}}
{{--</script>--}}
</body>
</html>