<?php

class Model_basket extends Model{

    function __construct($data){
        parent::__constract($data);
    }

    public function set_basket($id)
    {
    	$allPrice = 0;
        $allPrice2 = 0;
    	$goods = new MenuWork();
    	$_SESSION['basket'][] = $id;
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function set_basket_share($id)
    {
        $allPrice = 0;
        $allPrice2 = 0;
        $goods = new MenuWork();
        $_SESSION['basket_share'][] = $id;
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
        foreach ($_SESSION['basket'] as $key => $value) {
            $arr = $goods->Goods($value);
            $allPrice += $arr[0][0]['price'];
        }
        $allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
        return print_r($allPrice);
    }

    public function delete_goods($id){
    	$allPrice = 0;
        $allPrice2 = 0;
    	$goods = new MenuWork();
    	foreach ($_SESSION['basket'] as $key => $value) {
        	if($id == $value){
        		unset($_SESSION['basket'][$key]);
        	}
    	}
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }

    public function delete_one_goods($id){
    	$allPrice = 0;
        $allPrice2 = 0;
    	$goods = new MenuWork();
    	foreach ($_SESSION['basket'] as $key => $value) {
        	if($id == $value){
        		unset($_SESSION['basket'][$key]);
        		break;
        	}
    	}
    	foreach ($_SESSION['basket'] as $key => $value) {
        	$arr = $goods->Goods($value);
        	$allPrice += $arr[0][0]['price'];
    	}
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value);
            $allPrice2 += $arr[0][0]['to_price'];
        }
    	$allPriceShere = ($allPrice * $_SESSION['shere']) / 100;
        $allPrice -= $allPriceShere;
        $allPrice += $allPrice2;
        $_SESSION['price'] = $allPrice;
    	return print_r($allPrice);
    }


    public function get_goods(){
        $goods = new MenuWork();
        foreach ($_SESSION['basket'] as $key => $value) {
            $arr[] = $goods->Goods($value)[0][0];
        }
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr[] = $goods->Share($value)[0][0];
        }
        return $arr;
    }

    public function send_bid($data){
        $allPrice = 0;
        $goods = new MenuWork();
        $files .="<table border='1'style='text-align:center'> ";
        $files .="<tr style='font-weight: bold;text-align:center'><td> Название товара </td><td> Описание </td><td> Стоимость 1 ед.</td></tr>";
        $files .="<tr style='font-weight: bold;text-align:center'><td></td><td>Товары из меню</td><td></td></tr>";
        foreach ($_SESSION['basket'] as $key => $value) {
            $arr = $goods->Goods($value)[0][0];
            $files .="<tr>"."<td> &nbsp;".$arr['name']." </td><td> &nbsp;".$arr['desc']." </td><td> &nbsp;".$arr['price']." </td></tr>";
            $allPrice += $arr['price'];
        }
        $files .="<tr style='font-weight: bold;text-align:center'><td></td><td>Товары из акции</td><td></td></tr>";
        foreach ($_SESSION['basket_share'] as $key => $value) {
            $arr = $goods->Share($value)[0][0];
            $files .="<tr>"."<td> &nbsp;".$arr['name']." </td><td> &nbsp;".$arr['desc']." </td><td> &nbsp;".$arr['to_price']." </td></tr>";
            $allPrice += $arr['to_price'];
        }

        $files .="<tr  style='border:1px solid red;' ><td></td><td></td><td>  </td><td>  </td></tr>";
        $files .="<tr  style='font-weight: bold;text-align:center' ><td>Скидка</td><td></td><td></td><td> ".$_SESSION['share']."% </td></tr>";
        $files .="<tr  style='font-weight: bold;text-align:center' ><td>Общая стоимость </td><td></td><td></td><td> ".$allPrice." </td></tr>";
        $files .="<tr  style='font-weight: bold;text-align:center' ><td>Общая стоимость с учетом скидки</td><td></td><td></td><td> ".$_SESSION['price']." </td></tr>";
        $files .="<tr style='border:none;'><td style='border:none;'></td><td style='border:none;'><p style='font-weight: bold;text-align:center;font-size:20px;border:none;'>Контактные данные</p></td><td style='border:none;'></td><td style='border:none;'></td></tr>";
        $files .="<tr><td>ИМЯ</td><td>".$data['name']."</td>  </tr><tr><td>Телефон</td><td>".$data['tel']."</td>  </tr><tr><td>Улица</td><td>".$data['ul']."</td>  </tr><tr><td>Подъезд</td><td>".$data['pod']."</td>  </tr><tr><td>Этаж</td><td>".$data['et']."</td>  </tr><tr><td>Квартира</td><td>".$data['kv']."</td>  </tr><tr><td>Пожелания</td><td>".$data['po']."</td>  </tr>";
        $files .="</table>";
        file_put_contents('/var/www/tasty72/logins.txt',$files);

        $address = "stalk1258@gmail.com";
        $address2 = "tasty7272@mail.ru";

        $mes = file_get_contents('logins.txt');
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=windows-1251\r\n";
        $headers .= "To: $to\r\n";
        $headers .= "From: Имя отправителя <postmaster@domain.tld>";
          /* А эта функция как раз занимается отправкой письма на указанный вами email */
        $sub='Tasty'; //сабж
        $email='tasty72@mail.ru'; // от кого
        mail($address,
           $sub,
           $mes,
           "From: tasty72@mail.ru\r\n" 
           ."Content-type: text/html; charset=utf-8\r\n"
           ."X-Mailer: PHP mail script"
           );
        mail($address2,
           $sub,
           $mes,
           "From: tasty72@mail.ru\r\n" 
           ."Content-type: text/html; charset=utf-8\r\n"
           ."X-Mailer: PHP mail script"
           );
        echo $files;
    }
}
