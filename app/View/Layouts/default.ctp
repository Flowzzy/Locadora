
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Locadora
	</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/Locadora/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="http://localhost/Locadora/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://localhost/Locadora/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Locadora/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/Locadora/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="http://localhost/Locadora/assets/css/style.css" rel="stylesheet">
    <link href="http://localhost/Locadora/assets/css/style-responsive.css" rel="stylesheet">

    <script src="http://localhost/Locadora/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

//		echo $this->fetch('meta');
//		echo $this->fetch('css');
//		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
            <div id="header">
                <?php echo $this->Element('navbar'); ?>
            </div>
            <div id="content" style="margin-top: 50px">

                <?php echo $this->fetch('content'); ?>
            </div>

            <div id="footer">

                <?php
                echo $this->Element('footer');
                ?>

            </div>

        </div>
	
    
    
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="http://localhost/Locadora/assets/js/jquery.js"></script>
    <script src="http://localhost/Locadora/assets/js/jquery-1.8.3.min.js"></script>
    <script src="http://localhost/Locadora/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="http://localhost/Locadora/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="http://localhost/Locadora/assets/js/jquery.scrollTo.min.js"></script>
    <script src="http://localhost/Locadora/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="http://localhost/Locadora/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="http://localhost/Locadora/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="http://localhost/Locadora/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="http://localhost/Locadora/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="http://localhost/Locadora/assets/js/sparkline-chart.js"></script>    
	<script src="http://localhost/Locadora/assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: 'http://localhost/Locadora/assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
</body>
</html>
