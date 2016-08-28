<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap/bootstrap-table.css" rel="stylesheet">
    <link href="/css/bootstrap/bootstrap-datepicker.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Оформить заказ</h1>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<script src="/js/bootstrap/bootstrap-table.js"></script>
<script src="/js/bootstrap/docs.min.js"></script>
<script src="/js/bootstrap/bootstrap-datepicker.js"></script>
<script src="/js/bootstrap/bootstrap-datepicker.ru.min.js"></script>
<script>
    $('.input-group.date').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        language: "ru",
        todayHighlight: true,
        numberOfMonths: 2,
        minDate: 0
    });
    //route('frontend.order.get_sub_services')
    // Посылаем аякс запрос при смене Услуги и выводим доп услуги
    $( "#service" ).change(function() {
        var id = $(this).val();
        $.ajax({
            type: "GET",
            url: "{{ url('/order/getsubservices/') }}" + "/" + id,
            dataType: "json",
            success: function(data) {
                var list = '';
                for(var index in data) {
                    var attr = data[index];
                    list = list + '<p><input name="subservices[]" type="checkbox" value="' + attr['id'] + '" > ' + attr['name'] + '</p>\n';
                }
                if (list == '') {
                    $('.subservices_wrap').hide();
                } else {
                    $('.subservices_wrap').show();
                    $('.subservices').html(list);
                }

            }
        });

    });
</script>

</body>
</html>