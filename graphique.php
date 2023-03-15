<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body onload="fct1()">

<div class="col-lg-7">
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#" onclick="fct1()">Graphique 1</a>
                                        </li>
                                        <li><a href="#" onclick="fct2()">Exercice 1</a>
                                        </li>
                                        <li><a href="#" onclick="fct3()">Exercice 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
</div>
					



    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    
	<script>
	function fct1(){
	$("#morris-area-chart").empty();
	    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
	}
	
	
	
function fct2(){
    $("#morris-area-chart").empty();
	    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            iphone: 4000,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 3400,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 3000,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            iphone: 3000,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            iphone: 3500,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
	}

function fct3(){
	
    $("#morris-area-chart").empty();

    <?php
        //Listerrr le contenu de la table movies

        //1° - Connexions à la BDD
        $base = new PDO('mysql:host=localhost; dbname=id20205717_coronavirus2', 'id20205717_najd', '1uy&B(t{m7_#|>*H');

        //2° - Prépareatioen de requette et execution
        $sql = "SELECT nom, total_cas FROM pays";
        $result = $base->query($sql);

        $data = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $data[] = array('nom' => $row['nom'], 'total_cas' => $row['total_cas']);
        }
        $json_data = json_encode($data);

    ?>
    var data = <?php echo $json_data; ?>;
    console.log(data);

    Morris.bar({
            element: 'morris-area-chart',
            data: data,
            xkey: 'nom',
            ykeys: ['total_cas'],
            labels: ['Total cas'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });

}  



	
	</script>
	

</body>













