<!DOCTYPE html> 
    <head> 
    <meta charset="utf-8" content="text/html"><!-- 한글 표현을 위한 선언 --!>
    <title>IT Cafe</title> 
        <!-- 모바일 디바이스를 위한 설정 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- jQuery mobile에서 사용하는 css, javascript. 아래 3개의 리소스를 로드해야 함 -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="http://dev.jtsage.com/cdn/spinbox/latest/jqm-spinbox.min.js"></script>
    
    <script>
        function calculate_total_price(gbn){
            amount = $('#'+ gbn +' #many').val();
            price = $('#'+ gbn +' #price').val();
            big = $('#'+ gbn +' #size').val();
            
            if(big=="Short")
                big = -500;
            else if(big=="Tall")
                big = 0;
            else if(big=="Grande")
                big = 500;
            else if(big=="Venti")
                big = 1000;
            total_price = (amount * price) + (big * amount);
            $('#'+ gbn +' #total').text(total_price);
            $('#'+ gbn +' #total_price').val(total_price);
        }                   
    </script>
    </script>
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
        #box{
           width: 30em;
           padding-left: 80px;
        }
    </style>
</head> 
<body><!-- 가장 첫 메인 페이지 구성-->
    <section id="main" data-role="page" data-theme="a" href="#home">
        
            <div  data-role="header">
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
                <nav data-role="navbar">
                	<ul>
                		<li><a href="#main" class="ui-btn-active ui-state-persist">Coffee(Hot)</a></li>
                		<li><a href="#ice">Coffee(Ice)</a></li>
                		<li><a href="#etc">Etc</a></li>
                	</ul>
                </nav>
            </div><!-- /header -->

            <div data-role="listview">
                <a href="#americano" data-role="button" >
                <img src ="img/americano.png" class="coffee" width="40" height="40" align="center" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp아메리카노</a>
                <a href="#espresso" data-role="button">
                <img src ="img/espresso.png" class="coffee" width="40" height="40" align="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp에스프레소</a>
                <a href="#cafemocha" data-role="button">
                <img src ="img/cafemocha.jpg" class="coffee" width="40" height="40" align="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 카페모카&nbsp&nbsp</a>
                <a href="#cappuccino" data-role="button">
                <img src ="img/cappuccino.png" class="coffee" width="40" height="40" align="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 카푸치노&nbsp&nbsp</a>
      	 	</div><!-- /page -->
    </section>

    <section id="ice" data-role="page" data-theme="a">       <!-- 차가운 커피--> 
        <div  data-role="header" >
            <h1 id="head">IT Cafe</h1>
            <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
            <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
            <nav data-role="navbar">
                <ul>
                    <li><a href="#main">Coffee(Hot)</a></li>
                    <li><a href="#ice" class="ui-btn-active  ui-state-persist">Coffee(Ice)</a></li>
                    <li><a href="#etc">Etc</a></li>
                </ul>
            </nav>
        </div><!-- /header -->

        <div data-role="listview">
            <a href="#iceamericano" data-role="button">
            <img src ="img/iceamericano.jpg" class="coffee" width="40" height="40" align="center"> &nbsp&nbsp아이스 아메리카노</a>
            <a href="#iceespresso" data-role="button">
            <img src ="img/iceespresso.jpg" class="coffee" width="40" height="40" align="center"> &nbsp&nbsp아이스 에스프레소</a>
            <a href="#icecafemocha" data-role="button">                    
            <img src ="img/icecafemocha.jpg" class="coffee" width="40" height="40" align="center"> &nbsp&nbsp&nbsp아이스 카페모카 &nbsp&nbsp</a>
            <a href="#icecappuccino" data-role="button">
            <img src ="img/icecappuccino.jpg" class="coffee" width="40" height="40" align="center"> &nbsp&nbsp&nbsp아이스 카푸치노 &nbsp&nbsp</a> 
        </div><!-- /page -->
    </section>

    <section id="etc" data-role="page" data-theme="a">       <!-- 기타 품목들--> 
        <div  data-role="header">
            <h1 id="head">IT Cafe</h1>
            <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
            <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
            <nav data-role="navbar">
                <ul>
                    <li><a href="#main">Coffee(Hot)</a></li>
                    <li><a href="#ice">Coffee(Ice)</a></li>
                    <li><a href="#etc" class="ui-btn-active ui-state-persist">Etc</a></li>
                </ul>
            </nav>
        </div><!-- /header -->

        <div data-role="listview">
            <a href="#hotchoco" data-role="button">
            <img src ="img/hotchoco.png" class="coffee" width="40" height="40" align="center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp핫 초코&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
            <a href="#orange" data-role="button">
            <img src ="img/orange.png" class="coffee" width="40" height="40" align="center">&nbsp&nbsp&nbsp&nbsp오렌지주스&nbsp&nbsp&nbsp&nbsp&nbsp</a>   
        </div><!-- /page -->
    </section> 
    
        <!-- 상세보기 창--> 
   	<section id="americano" data-role="page" data-theme="a">    <!--아메리카노-->
    	<div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form action="order.php" method="POST" name="americano1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/americano.png" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="5000"/>
                    <input type="hidden" name="product" id="americano" value="아메리카노"/>
                    <h1>아메리카노</h1>
                    <input type="hidden" name="price" id="price" value="5000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">5000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('americano')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('americano')">
                    	<option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b" id="box">   
                <div class="ui-block-a">
                	<input type="submit" value=" 결제하기 " onclick="othersubmit('americano1')">
                </div>
            </div>
            </form>
        </div>   
    </section>
     <!-- 상세보기 창--> 
    <section id="espresso" data-role="page" data-theme="a">    <!--에스프레소-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="espresso1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/espresso.png" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="4000"/>
                    <input type="hidden" name="product" id="espresso" value="에스프레소"/>
                    <h1>에스프레소</h1>
                    <input type="hidden" name="price" id="price" value="4000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">4000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('espresso')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('espresso')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="cafemocha" data-role="page" data-theme="a">    <!--카페모카-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="cafemocha1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/cafemocha.jpg" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="5000"/>
                    <input type="hidden" name="product" id="cafemocha" value="카페모카"/>
                    <h1>카페모카</h1>
                    <input type="hidden" name="price" id="price" value="5000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">5000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('cafemocha')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('cafemocha')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="cappuccino" data-role="page" data-theme="a">    <!--카푸치노-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="cappuccino1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/cappuccino.png" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="5000"/>
                    <input type="hidden" name="product" id="cappuccino" value="카푸치노"/>
                    <h1>카푸치노</h1>
                    <input type="hidden" name="price" id="price" value="5000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">5000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('cappuccino')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('cappuccino')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="iceamericano" data-role="page" data-theme="a">    <!--아이스 아메리카노-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="iceamericano1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/iceamericano.jpg" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="5500"/>
                    <input type="hidden" name="product" id="iceamericano" value="아이스 아메리카노"/>
                    <h1>아이스아메리카노</h1>
                    <input type="hidden" name="price" id="price" value="5500"/>
                    <h3>가격 <span name="total" id="total" class="cart2">5500</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('iceamericano')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('iceamericano')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="iceespresso" data-role="page" data-theme="a">    <!--아이스에스프레소-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="iceespresso1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/iceespresso.jpg" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="5000"/>
                    <input type="hidden" name="product" id="cafemocha" value="아이스 에스프레소"/>
                    <h1>아이스 에스프레소</h1>
                    <input type="hidden" name="price" id="price" value="5000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">5000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('iceespresso')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('iceespresso')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="icecafemocha" data-role="page" data-theme="a">    <!--아이스 카페모카-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="icecafemocha" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/cafemocha.jpg" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="5000"/>
                    <input type="hidden" name="product" id="icecafemocha" value="아이스 카페모카"/>
                    <h1>아이스 카페모카</h1>
                    <input type="hidden" name="price" id="price" value="5000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">5000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('icecafemocha')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('icecafemocha')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="icecappuccino" data-role="page" data-theme="a">    <!--아이스 카푸치노-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="icecappuccino1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/icecappuccino.jpg" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="4000"/>
                    <input type="hidden" name="product" id="icecappuccino" value="아이스 카푸치노"/>
                    <h1>아이스 카푸치노</h1>
                    <input type="hidden" name="price" id="price" value="4000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">4000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('icecappuccino')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('icecappuccino')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section>

    <section id="hotchoco" data-role="page" data-theme="a">    <!--핫 초코-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="hotchoco1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/hotchoco.png" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="4000"/>
                    <input type="hidden" name="product" id="hotchoco" value="핫 초코"/>
                    <h1>핫 초코</h1>
                    <input type="hidden" name="price" id="price" value="4000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">4000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('hotchoco')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('hotchoco')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section> 
    <section id="orange" data-role="page" data-theme="a">    <!--오렌지 쥬스-->
        <div  data-role="header">                              <!--헤더-->
                <h1 id="head">IT Cafe</h1>
                <a href="#main" data-role="button" data-inline="true" data-icon="home" data-iconpos="notext" id="homeicon"></a>
                <a href="#shop" data-role="button" data-inline="true" data-icon="shop" data-iconpos="notext" id="shopicon"></a>
        </div><!-- header -->

        <div data-role="main" class="ui-content">
            <form  action="order.php" method="POST" name="orange1" >
            <div class="ui-grid-a">
                <div class="ui-block-a">
                    <img id="pic"src="img/orange.png" width="120" height="120">
                </div>
           
                <div class="ui-block-b"><!--상세보기 이미지 오른쪽 칸-->
                    <input type="hidden" name="total_price" id="total_price" value="4000"/>
                    <input type="hidden" name="product" id="orange" value="오렌지 쥬스"/>
                    <h1>오렌지 쥬스</h1>
                    <input type="hidden" name="price" id="price" value="4000"/>
                    <h3>가격 <span name="total" id="total" class="cart2">4000</span>원</h3>
                    수량
                <div data-role="ui-field-contain">
                    <input type="text"  name="many" id="many" data-role="spinbox" data-mini="true" value="1" min="0" max="10"  runat="server"  onchange="calculate_total_price('orange')" >       
                </div>
                </div>
            </div>
                    <select name ="size" id ="size" onchange="calculate_total_price('orange')">
                        <option value="Tall">Tall</option>
                        <option value="Short">Short</option>
                        <option value="Grande">Grande</option>
                        <option value="Venti">Venti</option>
                    </select><br> 

            <div class="ui-grid-b">   
                <div class="ui-block-a">
                    <input type="submit" value="결제하기" >
                </div>
            </div>
            </form>
        </div>   
    </section> 


</body><!-- americano  -->
</html>