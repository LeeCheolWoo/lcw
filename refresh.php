<!DOCTYPE html>

<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="jquery.js"></script>
  	<script>
  	$(document).ready(function(){
  		var callAjax = function(){
  			$.ajax({
  				method:'POST',
  				url:'ajax.php',
  				success:function(){
  					$("#sample").load('ajax.php');
  				}
  			});
  		}
  		setInterval(callAjax,5000);
  	});
  	</script>
  	</head>
  	<body>
  	<div id='sample'>주문 목록이 들어가는 곳</div>
  	</body>
  	</html>