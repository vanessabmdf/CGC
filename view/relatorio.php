<?php require_once('header.php'); ?>

<section class="container">
    <div class="row">
        <html><head>
                <title>Google Developers</title>

                <link rel="stylesheet" type="text/css" href="/_static/css/screen.css">
                <link rel="stylesheet" href="//www.google.com/cse/style/look/default.css" type="text/css">
                <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400" type="text/css">

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
                <script id="jqueryui" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js" defer="" async=""></script>
                <script src="//www.google.com/jsapi?key=AIzaSyCZfHRnq7tigC-COeQRmoa9Cxr0vbrK6xw"></script>
                <!--[if lt IE 9]>
                <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <link href="https://ajax.googleapis.com/ajax/static/modules/gviz/1.0/core/tooltip.css" rel="stylesheet" type="text/css"></head>
            <body class="docs framebox_body">
                <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['timeline']}]}"></script><script src="https://www.google.com/uds/api/visualization/1.0/4086f2e8fc632adc52e6d6795a5637a4/dygraph,format+pt_BR,default,timeline.I.js" type="text/javascript"></script>

                <script type="text/javascript">


                    google.setOnLoadCallback(drawChart);
                    function drawChart() {
                        var container = document.getElementById('example2.1');
                        var chart = new google.visualization.Timeline(container);
                        var dataTable = new google.visualization.DataTable();
                        dataTable.addColumn({type: 'string', id: 'Term'});
                        dataTable.addColumn({type: 'string', id: 'Name'});
                        dataTable.addColumn({type: 'date', id: 'Start'});
                        dataTable.addColumn({type: 'date', id: 'End'});
                        dataTable.addRows([
                            ['1', 'George Washington', new Date(1789, 3, 29), new Date(1797, 2, 3)],
                            ['2', 'John Adams', new Date(1795, 2, 3), new Date(1801, 2, 3)],
                            ['3', 'Thomas Jefferson', new Date(1801, 2, 3), new Date(1809, 2, 3)],
                            ['1', 'George Washington', new Date(1809, 2, 3), new Date(1820, 2, 3)]]);

                        chart.draw(dataTable);
                    }
                </script>

                <div id="example2.1" style="width: 900px; height: 200px; position: relative;"><div dir="ltr" style="position: relative; width: 900px; height: 200px;"><div style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;"><svg width="900" height="200" style="overflow: hidden;"><defs id="defs"></defs><g><rect x="0" y="0" width="900" height="40.992" stroke="none" stroke-width="0" fill="#ffffff"></rect><path d="M33,0L33,40.992" stroke="#e6e6e6" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M62.54503587691458,0L62.54503587691458,40.992" stroke="#e6e6e6" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M499.4546536497861,0L499.4546536497861,40.992" stroke="#e6e6e6" stroke-width="1" fill-opacity="1" fill="none"></path><rect x="0" y="40.992" width="900" height="40.992" stroke="none" stroke-width="0" fill="#e6e6e6"></rect><path d="M33,40.992L33,81.984" stroke="#ffffff" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M62.54503587691458,40.992L62.54503587691458,81.984" stroke="#ffffff" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M499.4546536497861,40.992L499.4546536497861,81.984" stroke="#ffffff" stroke-width="1" fill-opacity="1" fill="none"></path><rect x="0" y="81.984" width="900" height="40.992" stroke="none" stroke-width="0" fill="#ffffff"></rect><path d="M33,81.984L33,122.976" stroke="#e6e6e6" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M62.54503587691458,81.984L62.54503587691458,122.976" stroke="#e6e6e6" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M499.4546536497861,81.984L499.4546536497861,122.976" stroke="#e6e6e6" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M0,40.992L900,40.992" stroke="#b7b7b7" stroke-width="1" fill-opacity="1" fill="none"></path><path d="M0,81.984L900,81.984" stroke="#b7b7b7" stroke-width="1" fill-opacity="1" fill="none"></path><text text-anchor="end" x="20" y="25.046" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#4d4d4d">1</text><text text-anchor="end" x="20" y="66.038" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#4d4d4d">2</text><text text-anchor="end" x="20" y="107.02999999999999" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#4d4d4d">3</text><rect x="0" y="0" width="900" height="122.976" stroke="#9a9a9a" stroke-width="1" fill-opacity="1" fill="none"></rect></g><g><text text-anchor="middle" x="NaN" y="NaN" font-family="undefined" font-size="0" stroke="none" stroke-width="0" fill-opacity="1" fill="none"></text><text text-anchor="middle" x="62.54503587691458" y="144.026" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#000000">1790</text><text text-anchor="middle" x="499.4546536497861" y="144.026" font-family="Arial" font-size="13" stroke="none" stroke-width="0" fill="#000000">1800</text></g><g></g><g><rect x="34" y="9" width="341.7563129570857" height="22.991999999999997" stroke="none" stroke-width="0" fill="#3366cc"></rect><text text-anchor="start" x="43" y="24.695999999999998" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">George Washington</text><rect x="375.7563129570857" y="49.992" width="174.66813854008558" height="22.991999999999997" stroke="none" stroke-width="0" fill="#dc3912"></rect><text text-anchor="start" x="384.7563129570857" y="65.688" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#ffffff">John Adams</text><rect x="550.4244514971713" y="90.984" width="349.5755485028287" height="22.991999999999997" stroke="none" stroke-width="0" fill="#ff9900"></rect><text text-anchor="start" x="559.4244514971713" y="106.67999999999999" font-family="Arial" font-size="12" stroke="none" stroke-width="0" fill="#202020">Thomas Jefferson</text></g><g></g><g></g><g></g></svg></div></div><div style="display: none; position: absolute; top: 210px; left: 910px; white-space: nowrap; font-family: undefined; font-size: 13px;"></div><div></div></div>



            </body></html>

    </div>
</section>


<?php require_once('footer.php'); ?>