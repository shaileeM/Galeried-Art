<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <script type="text/javascript" src="jquery-1.12.0.js">
    </script>
 
    <style>
    body{
			font-family:Calibri;
		}
		div.background-wrap{
			position:fixed;
			z-index:-2000;
			width:100%;
			height:100%;
			overflow:hidden;
			top:0;
			left:0;
			right:0;
		}
		#video-bg-elem{
			position:absolute;
			top:0;
			left:0;
			min-height:100%;
			min-width:100%;
		}
		div.content{
			position:absolute;
			width:100%;
			min-width:100%;
			z-index:1000;
			}
		.content h1{
			text-align:center;
			font-size:65px;
			text-transform:uppercase;
			font-weight:300;
			color:#fff;
			padding-top:15%;
			margin-bottom:10px;
		}
		.content p{
			text-align:center;
			font-size:20px;
			letter-spacing:3px;
			color:#aaa;
		}
		.new_op{
			opacity:0.8;
			text-align:center;
		} 
        .filtered {

           -webkit-filter: grayscale(80%); /* Chrome, Safari, Opera */
            filter: grayscale(80%);
        }
    </style>
    <title>Galerie d'Art</title>
</head>
<body>
    <?php include("menu.php"); ?> 
    
    	<div class="background-wrap">
	<video id="video-bg-elem" preload="auto" autoplay ="true" loop="loop" muted="muted">
		<source src="bokeh2.mp4" type="video/mp4">
	</video>
	</div>
    <div id="paintinginfo" style="height:580px" class="col-12">
        <p><center><b>Leonardo da Vinci</b></center></p>
            <img  class="image" src="daVinci.jpg" alt="da Vinci" style="width:300px;border:10px solid black;padding:25px;position:relative;float:left;left:200px;top:20px;">
              
		      <div id="greeting" style="width:500px;position:relative;float:right;right:100px;padding:20px;top:20px;" >
               <p><i><strong>Leonardo di ser Piero da Vinci</strong>, more commonly <strong>Leonardo da Vinci</strong>(15 April 1452 - 2 May 1519), was an Italian polymath whose areas of interest included invention, painting, sculpting, architecture, science, writing, history and cartography.</i></p>
<p><i>He has been variously called the father of paleontology, ichnology, and architecture, and is widely considered one of the greatest painters of all time.</i></p>
<p><i>Sometimes credited with the inventions of the parachute, helicopter and tank, his genius epitomized the Renaissance humanist ideal.</i></p>
                </div>
    
    </div>
    
    
    
   
    
  
    <div id="footer" style="background-color:">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>






