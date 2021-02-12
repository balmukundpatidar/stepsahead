<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Control Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/fonts.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/footable/footable.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/plugins/gritter/jquery.gritter.css"/>
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/only-for-demos.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/datetime/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/bootstrap-datepicker/datepicker.css">
    <link href="{{url('/')}}/assets/css/plugins/select2/select2.css" rel="stylesheet">
    <link href="{{url('/')}}/assets/css/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    @stack('style')
    <!--[if lt IE 9]>
    <script src="{{ url('/') }}/assets/js/html5shiv.js"></script>
    <script src="{{ url('/') }}/assets/js/respond.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
    <script src="{{ url('/') }}/assets/js/plugins/easypiechart/easypiechart.ie-fix.js"></script>
    <![endif]-->
    @stack('css')
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/themes/style-3.css">
</head>

<body style="margin: 0; padding: 0;">
<div id="wrapper">
    <div id="main-container">
        @yield('content')
    </div>
</div>
    <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/pace/pace.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/jqueryui/jquery-ui.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/jqueryui/jquery.ui.touch-punch.min.js"></script>
    <script type="application/javascript" src="{{ url('/') }}/assets/js/main.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/select2/select2.min.js"></script>
    <script src="{{ url('/') }}/assets/js/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script type="application/javascript">
        $(document).ready(function () {
            $(".selectpicker").select2();
        });
    </script>
@stack('scripts')
@stack('frame')
</body>
</html>
