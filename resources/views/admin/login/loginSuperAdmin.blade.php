<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    -->
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Save People - Bangladeshi Patient Database </title>
        <!-- Meta Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);
    
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- //Meta Tags -->
    
        <!-- Style-sheets -->
        <!-- Bootstrap Css -->
        <link href="{{ URL::asset('/') }}css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Bootstrap Css -->
        <!-- Common Css -->
        <link href="{{ URL::asset('/') }}css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--// Common Css -->
        <!-- Fontawesome Css -->
        <link href="{{ URL::asset('/') }}css/fontawesome-all.css" rel="stylesheet">
        <!--// Fontawesome Css -->
        <!--// Style-sheets -->
    
        <!--web-fonts-->
        <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!--//web-fonts-->
    </head>
    
    <body>
        <div class="bg-page py-5">
            <div class="container">
                <!-- main-heading -->
                <h2 class="main-title-w3layouts mb-2 text-center text-white"> Save People - Bangladeshi Patient Database 
                </h2>
                <!--// main-heading -->
                <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                    <form  action="{{ route('send_otp')}}" method="POST">\
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required="">
                        </div>
                   
                       
                        <input type="submit" value="Login" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">
                    </form>
                   
                </div>
    
             
            </div>
        </div>
    
    
        <!-- Required common Js -->
        <script src="{{ URL::asset('/') }}js/jquery-2.2.3.min.js"></script>
        <!-- //Required common Js -->
    
        <!-- Js for bootstrap working-->
        <script src="{{ URL::asset('/') }}js/bootstrap.min.js"></script>
        <!-- //Js for bootstrap working -->
    
    </body>
    
    </html>