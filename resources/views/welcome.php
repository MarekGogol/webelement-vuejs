<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VueJS Demo</title>
    </head>
    <body id="app">

        <!-- Navigation -->
        <div class="container">
            <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav">
                    <li v-link="{ name : 'data-binding' }"><a href="#">Data Binding</a></li>
                    <li v-link="{ name : 'class-binding' }"><a href="#">Class &amp; Attributes binding</a></li>
                    <li v-link="{ name : 'components-and-props' }"><a href="#">Components &amp; Properties</a></li>
                    <li v-link="{ name : 'laravel-ajax-filters' }"><a href="#">Laravel / Ajax / Filters</a></li>
                </ul>
            </nav>
        </div>

        <!-- Content -->
        <div class="container">
            <div class="panel panel-default">


              <div class="panel-heading">

                <!-- Title -->
                <h3 class="panel-title">{{ title }}</h3>

              </div>


              <div class="panel-body">

                <!-- Router content -->
                <router-view></router-view>

              </div>


            </div>
        </div>
        <!-- / Content -->

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/app.css') ?>">

        <!-- VueJS App -->
        <script type="text/javascript" src="<?php echo asset('js/app.js') ?>"></script>
    </body>
</html>
