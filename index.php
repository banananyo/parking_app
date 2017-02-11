<html>
    <header>
        <meta charset="utf-8"/>
        <title>test</title>
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/moment-with-locales.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/bootwatch.css" rel="stylesheet">
        <link href="css/parking_css.css" rel="stylesheet">
    </header>
    <body>
        <div class="container">
            <div style="padding-top: 50px;"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="btn-group btn-group-justified">
                        <a id="choose_s1" class="btn btn-default">Sensor1</a>
                        <a id="choose_s2" class="btn btn-default">Sensor2</a>
                        <a id="choose_s3" class="btn btn-default">Sensor3</a>
                    </div>
                </div>
            </div>
            <!--<hr/>-->
            <div class="row">
                <div id="form" class="form-group">
                    <div class="col-xs-6"  style="padding-right: 0px !important;">
                        <input type="text" placeholder="sensor 1" id="s1" class="form-control"/>
                        <input type="text" placeholder="sensor 2" id="s2" class="form-control"/>
                        <input type="text" placeholder="sensor 3" id="s3" class="form-control"/>
                    </div>
                    <div class="col-xs-6"  style="padding-left: 0px !important;">
                        <button type="submit" id="btnSend" class="btn btn-primary form-control">send sensor 1</button>
                    </div>
                </div>
            </div>
            <hr/> 
            <h1>Parking</h1>
            <div class="row">
                <div class="col-xs-12">
                    <button id="digitalClock" class="btn btn-danger form-control">xxx</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php include('tabmenu.php'); ?>
                </div>
            </div>
        </div>
    </body>
    
    <script src="https://www.gstatic.com/firebasejs/3.6.9/firebase.js"></script>
    <script src="js/parking_script.js"></script>
    
</html>