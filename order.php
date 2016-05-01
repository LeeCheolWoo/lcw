<?php
    $amount = $_POST['many'];
    $total_price = $_POST['total_price'];
    $size = $_POST['size'];
    $product = $_POST['product'];

    $abc = mysqli_connect('localhost','root','ar3360','test')or die('Error');
    mysqli_query($abc,"set names utf8");
    $query = "INSERT INTO counter(Menu,Size,Amount,Price)VALUES('$product','$size','$amount','$total_price')";
    $result = mysqli_query($abc,$query) or die('Error');
    $user_id = mysqli_insert_id($abc);      //DB의 seq(Auto_Increment)의 마지막 값을 불러오기위한 문구
    mysqli_close($abc);   
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" content="text/html">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script> 
    <style>
   		#pic{
   			margin-top: 20px;
   			margin-left: 20px;
            border-radius:50%;
   		}
   		#shopicon{
   			margin-right:25px;
            margin-top:12px;
   		}
        #homeicon{
            margin-left:250px;
            margin-top:12px;
        }
   		#drink{text-align: center;
   		}
        #head{
            font-size:1.5em;
        }
        #count{
            text-align: top;
        }
        #margin{
            margin-top: -20px;    
        }
        #user_id{

        }
    </style>
</head>
<body>
<section id="order" data-role="page" data-theme="a">
    <div  data-role="header">                              <!--헤더-->
        <h1 id="head">결제 목록</h1>
        <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
    </div><!-- header -->
        <div data-role="main" calss="ui-content" id="text">
            
        	<div data-role="collapsible" data-iconpos="right">
            	<h1><?php echo $product ,'  ',':','  ', $total_price,' 원'; ?></h1>
        		<p><?php echo $amount,'잔',' ','/  ','사이즈 : ',$size,'   '?></p>
        	</div>    
        </div></p>
        <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp주문번호 : <span style='color:red;'><?php echo $user_id?></span></h2>
        <h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $amount?>잔 결제가 완료되었습니다</h2>
        <form  action="index.php" method="POST">
                <input type="submit" value="메뉴판으로 돌아가기"/>
        </form>
        </section>
</body>
</html>