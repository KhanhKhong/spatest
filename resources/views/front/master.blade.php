<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../../source/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/slider.css">
    <link rel="stylesheet" type="text/css" href="../../source/css/slide-muti.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../../source/css/type-3.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="type-3">
        <div id="wrap">
            <!--header-->
            @include('front.layouts.header')
            <!--End header-->
            
            <!--content-->
            @yield('container')
            <!--End content-->
        </div>
        <!--footer-->
        @include('front.layouts.footer')
        <!--end footer-->
    </div>
</body>
<script src="../../source/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="../../source/js/bootstrap.js"></script>
<script type="text/javascript" src="../../source/js/menubt.js"></script>
<script type="text/javascript" src="../../source/js/main.js"></script>
<script type="text/javascript" src="../../source/js/slick.min.js"></script>
<script>
var affixElement = '#navbar-main';
$(affixElement).affix({
  offset: {
    top: function () {
      return (this.top = $(affixElement).offset().top)
    },
    bottom: function () { 
      return (this.bottom = $('#footer').outerHeight(true))
    }
  }
});

function activaTab(tab){
    $('.tab-pane a[href="#' + tab + '"]').tab('show');
};
$(document).ready(function(){
    activaTab('chamsocda');
});
$('#slider').slick({
    dots: true,
    slidesToShow: 3,
    centerMode: true,
    vertical: true,
  });  
 $('.thumbs-img').click(function(){
    $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
    $('#description').html($(this).attr('alt'));
});

$('.plus').click(function() {
    var value = document.getElementById("qty").value;
    var oldValue = parseFloat(value);
    var newVal = oldValue + 1;
    document.getElementById("qty").value = newVal;
  });
$('.minus').click(function() {
    var min = $('.qty').attr('min');
    var value = document.getElementById("qty").value;
    var oldValue = parseFloat(value);
    if (oldValue <= min) {
      var newVal = oldValue;
    } else {
      var newVal = oldValue - 1;
    }
    document.getElementById("qty").value = newVal;
  });
</script>
</html>