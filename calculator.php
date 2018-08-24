<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="cal_css.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
		<div id="baggrund">
	<h1>Lommeregner</h1>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get" ><br>
		
		<input type="number" name="val1" required ><br>
		<input type="number" name="val2" required ><br>
		<button type="submit" name="operator" value="add">+</button>
		<button type="submit" name="operator" value="sub">-</button>
		<button type="submit" name="operator" value="obe">÷</button>
		<button type="submit" name="operator" value="mul">*</button>
		<button type="submit" name="operator" value="mod">%</button>
	
	</form>
		<?php 
	
	$op = $_GET['operator'];
		  if (!empty($op)){
			  
		  
		
			 $v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die('missing or illigal val1 parameter');
			 $v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die('missing or illigal val1 parameter');
			$op = $_GET['operator'];
		  
		 
		  
		  switch($op){
			  	case 'add':
				  $res = $v1+$v2;
				  $opchar = '+';
				  break;
				    
				case 'sub':
				  $res = $v1-$v2;
				  break;
				  
				case 'obe':
				  $res = $v1/$v2;
				  break;
				  
				case 'mul':
				  $res = $v1*$v2;
				  break;
				  
				  case 'mod':
				  $res = $v1%$v2;
				  break;
		
				  default:
				  $res = 'unknown operator '.$op.'';
				  $opchar = $op;
				  	  
		  }
		  
	 	echo   $v1.' '.$opchar.' '.$v2.' = '.$res;
		}
	
		?>  
	</div>
</body>
</html>