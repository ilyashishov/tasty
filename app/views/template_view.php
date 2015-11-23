<?php
//exit(__DIR__);
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="/img/icon.png" type="image/png">
    <meta name="description" content="<?php echo $data['description'];?>">
    <meta name="keywords" content="<?php echo $data['keywords'];?>">
    <title><?php echo $data['title']; ?></title>
    <link href='//fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/main.css?<?php echo md5_file("css/main.css");?>">
    <script src="/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/js/jquery.scrollTo-1.4.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js" type="text/javascript"></script>
    <script src="/js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="/js/jquery.ui.datepicker-ru.js"></script>
    <script type="text/javascript" src="/js/jquery.inputmask.bundle.js"></script>
    <script src="/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="/js/jquery.filter_input.js" type="text/javascript"></script>
    <script src="/js/handlebars-v3.0.3.js"></script>
    <script src="/js/main.js?<?php echo md5_file("js/main.js")?>" type="text/javascript"></script>
    <link rel="stylesheet" href="/css/jquery-ui-1.10.1.css">
    <link rel="stylesheet" href="/icon/style.css" type="text/css" charset="utf-8" />
</head>
<body>
 <div class="wripper">
    <div class="header">
     <a href="/"><div class="logo"></div></a>
     <div class="menu">
      <ul>
        <?php 
          if(isset($data["menu"][0])){
            echo '<li  ><a class="m '.$data["menu"][0].'" href="/menu/id/2" name="topnavi">Меню</a></li>';
          }else{
            echo '<li  ><a class="m" href="/menu/id/3" name="topnavi">Меню</a></li>';
          }
        ?>

        <?php 
          if(isset($data["menu"][1])){
            echo '<li  ><a class="m '.$data["menu"][1].'" href="/share/menu" name="topnavi">Акции</a></li>';
          }else{
            echo '<li  ><a class="m" href="/share/menu" name="topnavi">Акции</a></li>';
          }
        ?>
        <?php 
          if(isset($data["menu"][2])){
            echo '<li  ><a class="m '.$data["menu"][2].'" href="/delivery" name="topnavi">Доставка</a></li>';
          }else{
            echo '<li  ><a class="m" href="/delivery" name="topnavi">Доставка</a></li>';
          }
        ?>
        <?php 
          if(isset($data["menu"][3])){
            echo '<li  ><a class="m '.$data["menu"][3].'" href="/comments" name="topnavi">Отзывы</a></li>';
          }else{
            echo '<li  ><a class="m" href="/comments" name="topnavi">Отзывы</a></li>';
          }
        ?>
      </ul>
    </div>
    <div class="category">
	<?php 
        $url = explode('/', $_GET['q']);
        if($url[1] == 'menu'){
          foreach ($data[0] as $key) {
		        if ($key['id'] == $url[3]) {
              echo "<a class='m_active' href='/menu/id/".$key['id']."/'>".$key['name']."</a>";
            }else{
              echo "<a href='/menu/id/".$key['id']."/'>".$key['name']."</a>";
            }
          }
        }
       ?>
    </div>
    <div class="header-right">
      <p>г. Тюмень</p>
      <p class="text">Телефоны:</p>
      
      <p class="phone">8-905-826-43-26</p>
      
      <a class="button" href="#" style="margin-left:70px;">ЗАКАЗАТЬ ЗВОНОК</a>
    </div>
    </div>
    <div class="border"></div>
    <div style="clear: both"></div>
    <?php 
    if($url[1] == 'menu'){
          echo '<a class="a-admin-page" href="/menu/new/id/'.$url[3].'" >Добавить товар</a>';
          echo '<a class="a-admin-page" href="/menu/new_category">Добавить категорию</a>';
        }
     ?>
 </div>
     <div class="wripper" style="padding:0px;">
    <div class="s-right">
      <p class="st">ДОБАВЬ СКИДКУ:</p>
      <div class="s" style="z-index:5;" id="share25">
        <a href="" p="25" class="proc1" >
          <p class="proc" id="proc25">
            25%
          </p>
          <p class="op" id="op25">
            в день рождения  <br>
            на все меню <br>
            действует 3 дня <br>
            до и после ДР
          </p></a>
        </div>
        <div class="s" style="z-index:4;" id="share20">
          <a href="#" p="20" class="proc1" id="p20"  ><p class="proc" style="" id="proc20">
            20%
          </p>    <p class="op" style="" id="op20">
          при заказе <br>
          от 2000 рублей <br>
          (наборы в акции  <br>
          не учавствуют)
        </p></a>
      </div>
      <div class="s" style="z-index:3;" id="share15">
        <a href="" p="15" class="proc1"><p class="proc" id="proc15">
          15%
        </p>
        <p class="op" style="margin-top:5px;width:95px;margin-left:-5px;" id="op15">
          при самовывозе<br>
          и постоянным<br>
          клиентам с картой<br>
          15%
        </p>
      </a></div>
      <div class="s" style="z-index:2;" id="share10">
        <a href="" p="10" class="proc1">    <p class="proc" id="proc10">
          10%
        </p>
        <p class="op" id="op10">
          <br>
          постоянным <br>
          клиентам с<br>
          картой 10%
        </p></a>
      </div>
      <div class="s" style="z-index:1;" id="share5">
        <a href="" p="5" class="proc1">
          <p class="proc" id="proc5">
            5%
          </p>
          <p class="op" id="op5">
            <br>
            студентам, <br>
            курсантам и <br>
            учащимся
          </p>
        </a>
      </div>
      <div class="del_proc">
        <a href="#" id="del_proc"><!-- <img src="./img/close_call.png" alt=""> -->Отменить скидку</a></div>
      </div>
    </div>  

    <div class="wripper" style="margin-top: -20px;">
      <div class="middle">
       <?php include $content_view; ?>
     </div>
   </div> 
    <div class="wripper" style="background: none;position:relative;">
    <div class="baskets">
      <div class="block_cost">
      <p id="sum" class="baskets_cost">ВАШ ЗАКАЗ:<span>&nbsp;0</span></p> 
        <img src="/img/rub.png" class="baskets_img" alt="">
      </div>    
      <a href="basket_active.php" class="checkout">ПОСМОТРЕТЬ ЗАКАЗ<img  src="/img/basket_buy.png" alt=""></a>
      <p id="discount"> ВАША СКИДКА <b><span>0</span>%</b></p>
    </div>
  </div>
  <div class="wripper">
   <div id="footer" style=";">
     <div class="f_text">
      <p class="contact">
        КОНТАКТЫ <br> <br>
        625000, г. Тюмень, ул. Самарцева  дом 30<br>
        Телефоны:   8-905-826-43-26 <br>
        E-mail:    tasty72@mail.ru <br>
        ИП Бушмакин Илья Юрьевич   /   ОГРНИП: 312860233500025 <br>
      </p>
      <script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>

      <div style="margin-left:630px;margin-top:-60px;">
      </div>
    </div>

    <p  style="position:absolute; top:102px; left:450px;color:#A4A48D;font-size: 13px;"> Все права защищены. (c) 2014</p>       
    <a href="http://starcaseinc.ru/" target="_blank"><div class="developed">
      <p>Разработано</p>
    </div>  </a>
    <a href="https://vk.com/app4582793#2580-welcome" class="" style="position: relative;top:20px;left: 170px;height:28px;-webkit-border-radius:14px;border-radius:14px;background:#55769b;color:#fff;font:bold 12px/28px Arial,Helvetica,sans-serif;padding:0 32px 0 13px;display:inline-block;text-decoration:none;position:relative;">Скидка 10%<i style="height:18px;-webkit-border-radius:9px;border-radius:9px;background:#fff;color:#55769b;font: bold 11px/17px Tahoma,Helvetica,sans-serif;display:block;top:5px;right:5px;position:absolute;width:18px;text-align:center;">B</i></a>
  </a> <div style="clear: both"></div>
  </div>
  </div>
</body>
</html>
