<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="board_wrapper">
	<div id="dropspots" class="row_wrapper">
        <div id="1_chip_target" class="droppable"></div>
        <div id="2_chip_target" class="droppable"></div>
        <div id="3_chip_target" class="droppable"></div>
        <div id="4_chip_target" class="droppable"></div>
        <div id="5_chip_target" class="droppable"></div>
        <div id="6_chip_target" class="droppable"></div>
        <div id="7_chip_target" class="droppable"></div>
    </div>
	<div id="a" class="row_wrapper">
		<div id="1" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="2" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="3" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="4" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="5" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="6" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="7" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
	</div>
	<div id="b" class="row_wrapper">
		<div id="8" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="9" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="10" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="11" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="12" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="13" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="14" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
	</div>
	<div id="c" class="row_wrapper">
		<div id="15" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="16" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="17" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="18" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="19" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="20" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="21" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
	</div>
	<div id="d" class="row_wrapper">
		<div id="22" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="23" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="24" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="25" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="26" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="27" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="28" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
	</div>
	<div id="e" class="row_wrapper">
		<div id="29" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="30" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="31" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="32" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="33" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="34" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="35" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
	</div>
	<div id="f" class="row_wrapper">
		<div id="36" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="37" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="38" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="39" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="40" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="41" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
		<div id="42" class="chip_holder">
		    <canvas width="80" height="80"></canvas>
		</div>
	</div>
	</div><!-- end board_wrapper -->
    <canvas width="80" height="80" id="43" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="44" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="45" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="46" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="47" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="48" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="49" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="50" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="51" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="52" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="53" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="54" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="55" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="56" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="57" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="58" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="59" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="60" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="61" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="62" class="red_chip draggable"></canvas>
    <canvas width="80" height="80" id="63" class="red_chip draggable"></canvas>
    
    <canvas width="80" height="80" id="64" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="65" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="66" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="67" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="68" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="69" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="70" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="71" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="72" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="73" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="74" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="75" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="76" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="77" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="78" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="79" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="80" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="81" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="82" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="83" class="black_chip draggable"></canvas>
    <canvas width="80" height="80" id="84" class="black_chip draggable"></canvas>
	<p id="buttons_holder">
		<input id="reset" type="button" value="Clear Board">
	</p>
	<audio id="piece_drop"></audio>
</div><!-- end wrapper -->
</div>
</body>
</html>