<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>TV.HNA.Net</title>
		<link type="text/css" href="css/custom-theme/jquery-ui-1.8.2.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.2.custom.min.js"></script>
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });
	
				// Tabs
				$('#tabs').tabs();

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>
		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 15px 50px 15px 50px;}
			.demoHeaders { margin-top: 2em; }
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}

                        /* ### */
                        #td-player {
                            width: 750px;
                            border: 1px solid black;
                        }
                        #td-program {
                            /* border: 1px solid red; */
                            vertical-align: top;
                        }
                        table {
                            width: 100%;
                            height: 50%;
                        }
                        #program {
                            border: 1px solid #A6C9E2;
                            border-radius: 5px;
                            -moz-border-radius: 5px;
                            -webkit-border-radius: 5px;
                            margin: 0 0 0px 5px;
                            padding: 15px 15px 15px 55px;
                            height: 560px;
                        }

		</style>	
	</head>
	<body>
            <center><h1>Welcome to TV.HNA.Net</h1></center>
	
		<!-- Accordion -->
		<!--
                <h2 class="demoHeaders">Accordion</h2>
		<div id="accordion">
			<div>
				<h3><a href="#">First</a></h3>
				<div>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
			</div>
			<div>
				<h3><a href="#">Second</a></h3>
				<div>Phasellus mattis tincidunt nibh.</div>
			</div>
			<div>
				<h3><a href="#">Third</a></h3>
				<div>Nam dui erat, auctor a, dignissim quis.</div>
			</div>
		</div>
                -->
	
		<!-- Tabs -->
		<div id="tabs">
			<ul>
                                <li><a href="#tabs-1">&nbsp;БТ&nbsp;&nbsp;</a></li>
        			<li><a href="#tabs-2">&nbsp;ЛАД&nbsp;</a></li>
				<li><a href="#tabs-3">&nbsp;ОНТ&nbsp;</a></li>
                                <li><a href="#tabs-4">&nbsp;СТВ&nbsp;</a></li>
                                <li><a href="#tabs-5">&nbsp;НТВ&nbsp;</a></li>
                                <li><a href="#tabs-6">&nbsp;РТР&nbsp;</a></li>
                                <li><a href="#tabs-7">&nbsp;Мир&nbsp;</a></li>
                                <li><a href="#tabs-8">8 канал</a></li>
			</ul>
			<div id="tabs-1">
                            <table>
                                <tr>
                                    <td id="td-player">
                                        <div style="width: 730px; height: 580px; background-color: #aaaaaa; margin: auto; ">
                                        </div>
                                    </td>
                                    <td id="td-program">
                                        <div id="program">
                                            <?php $channel = '721'; require_once "parse.php"; ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
			<div id="tabs-2"></div>
			<div id="tabs-3"></div>
                        <div id="tabs-4"></div>
                        <div id="tabs-5"></div>
                        <div id="tabs-6"></div>
                        <div id="tabs-7"></div>
                        <div id="tabs-8"></div>
		</div>

	</body>
</html>


