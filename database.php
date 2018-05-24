
<?php
class database
{
private static $host='lazeezo.db.9462939.hostedresource.com';
	private static $uname='lazeezo';
	private static $pwd='Sky@9898';
	private static $con=NULL;
	
	public static function connect()
	{
		self::$con=mysql_connect(self::$host,self::$uname,self::$pwd);
		mysql_select_db('lazeezo',self::$con);
		return self::$con;
	}
	
	public function signup($user_email,$user_name,$password,$address,$mobile_no,$gender,$city,$pro_pic,$DOB,$type)
	{		$con=database::connect();
			$res=mysql_query("insert into user_tbl values('$user_email','$user_name','$password','$address','$mobile_no','$gender','$city','$pro_pic','$DOB','$type')",$con);
			return $res;
			database::disconnect();
	}
	public function login($email,$pwd)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email' and password='$pwd'",$con);
			return $res;
			database::disconnect();
	}
	public function viewuser($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
	
	public function favadd($email,$rest_id)
	{		$con=database::connect();
			$res=mysql_query("select * from fav_tbl where fk_user_email='$email' and fk_rest_id='$rest_id' ",$con);
			return $res;
			database::disconnect();
	}
	
	public function disrestc()
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.*  from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id " ,$con);
			return $res;
			database::disconnect();
	}
	public function display($page,$noi)
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.*  from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id LIMIT {$page}, {$noi} " ,$con);
			return $res;
			database::disconnect();
	}
	public function discat1()
	{		$con=database::connect();
			$res=mysql_query("select *  from category_tbl " ,$con);
			return $res;
			database::disconnect();
	}
	
	public function addorders1($flag,$area,$email,$fk_rest_id,$amount)
	{		$con=database::connect();
			
			$res=mysql_query("update order_tbl set flag='$flag' ,delivery_area='$area',fk_rest_id='$fk_rest_id' ,total_amount='$amount'  where fk_user_email='$email' " ,$con);
			return $res;
			database::disconnect();
	}
		public function addorders11($flag,$email)
	{		$con=database::connect();
			$res=mysql_query("update order_tbl set flag='$flag'  where fk_user_email='$email' " ,$con);
			return $res;
			database::disconnect();
	}
	public function getdata($email,$flag)
	{		$con=database::connect();
			$res=mysql_query("select o.*,s.* from order_tbl as o,subcui_tbl as s where o.fk_subcui_id=s.subcui_id AND fk_user_email='$email' and flag='$flag' " ,$con);
			return $res;
			database::disconnect();
	}
	public function getfav($email)
	{		$con=database::connect();
			$res=mysql_query("select r.*,f.* from fav_tbl as f,restaurant_tbl as r where f.fk_rest_id=r.rest_id AND fk_user_email='$email'  " ,$con);
			return $res;
			database::disconnect();
	}
	
	public function disrestsearch($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.* from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id and rest_id='$rest_id'" ,$con);
			return $res;
			database::disconnect();
	}
	
	public function discat($cusines)
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.*  from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id and cusines='$cusines'" ,$con);
			return $res;
			database::disconnect();
	}
	public function disind($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.*  from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id and rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	
	public function disrev($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select r.*,u.*,re.*  from restaurant_tbl as r,user_tbl as u,
							  review_tbl as re where re.fk_rest_id=r.rest_id and  
							 re.fk_user_email=u.user_email 
							  and rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	
		public function getreviewinsert($email,$fk_rest_id,$review_message,$review_date)
	{		$con=database::connect();
			$res=mysql_query("insert into review_tbl values(NULL,'$email','$fk_rest_id','$review_message','$review_date')",$con);
			return $res;
			database::disconnect();
	}
		public function paymentadd($card_number,$card_name,$cv_code,$date,$order_id,$email)
	{		$con=database::connect();
			$res=mysql_query("insert into payment_tbl values(NULL,'$card_number','$card_name','$cv_code','$date','$order_id','$email')",$con);
			return $res;
			database::disconnect();
	}
	public function getmenuphotos($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select m.*,r.* from restaurant_tbl as r,menuphoto_tbl as m where m.fk_rest_id=r.rest_id and m.fk_rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	
	public function getotherphotos($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select * from otherphoto_tbl  where  fk_rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	
	public function getlike($review_id)
	{		$con=database::connect();

			$res=mysql_query("select count(like_id)'cnt' from reviewlike_tbl where fk_review_id='$review_id' group by (fk_review_id);  ",$con);
			return $res;
			database::disconnect();
	}
	public function getlikeupdate($review_id,$cnt)
	{		$con=database::connect();
			$res=mysql_query("update re_tbl set que_like='$cnt' where pk_que_id='$que_id' ",$con);
			return $res;
			database::disconnect();
	}
			public function getorders($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select c.*,r.* from restaurant_tbl as r,cusine_tbl as c
			where c.fk_rest_id=r.rest_id and c.fk_rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	public function getsub($cui_id)
	{		$con=database::connect();
			$res=mysql_query("select * from subcui_tbl where fk_cui_id='$cui_id' ",$con);
			return $res;
			database::disconnect();
	}
	public function order($email)
	{		$con=database::connect();
			$res=mysql_query("select * from order_tbl where fk_user_email='$email' and flag='3' ",$con);
			return $res;
			database::disconnect();
	}
	
	public function order2($email)
	{		$con=database::connect();
			$res=mysql_query("select * from order_tbl where fk_user_email='$email' and flag='0' ",$con);
			return $res;
			database::disconnect();
	}

	
public function addcart($rest_id,$fk_user_email,$fk_subcui_id,$quantity,$total_amount,$date_of_order,$area)
	{		$con=database::connect();
			$res=mysql_query("insert into order_tbl values(NULL,'$rest_id','$fk_user_email','$fk_subcui_id','$quantity','$total_amount','3','$date_of_order','$area')",$con);
			return $res;
			database::disconnect();
	}
	public function changepwd($pwd,$email)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set password='$pwd' where user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
	public function viewprofile($email)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
		public function updatepwd($email,$pwd)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set password='$pwd' where user_email='$email' ",$con);
			return $res;
			database::disconnect();
	}
	
	public function getcart($subcui_id)
	{		$con=database::connect();
			$res=mysql_query("select * from subcui_tbl where subcui_id='$subcui_id'  ",$con);
			return $res;
			database::disconnect();
	}

	
	
		public function getdiscount()
	{		$con=database::connect();
			$res=mysql_query("select m.*,r.* from restaurant_tbl as r,discount_tbl as m where m.fk_rest_id=r.rest_id ",$con);
			return $res;
			database::disconnect();
	}
	
		public function discount($page1,$noi)
	{		$con=database::connect();
			$res=mysql_query("select m.*,r.* from restaurant_tbl as r,discount_tbl as m where m.fk_rest_id=r.rest_id LIMIT {$page1}, {$noi} ",$con);
			return $res;
			database::disconnect();
	}
		public function restview($page1,$noi)
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.*  from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id LIMIT {$page1}, {$noi} ",$con);
			return $res;
			database::disconnect();
	}
	public function getdiscountrest($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select m.*,r.* from restaurant_tbl as r,discount_tbl as m where m.fk_rest_id=r.rest_id and m.fk_rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	
	public function search($term)
	{		$con=database::connect();
			$res=mysql_query("select * from restaurant_tbl  where rest_name LIKE '%".$term."%'",$con);
			return $res;
			database::disconnect();
	}
	
	public function search1($term)
	{		$con=database::connect();
			$res=mysql_query("select * from subcui_tbl  where subcui_name LIKE '%".$term."%'",$con);
			return $res;
			database::disconnect();
	}
	public function search2($subcui_id)
	{		$con=database::connect();
			$res=mysql_query("select * from famous_tbl where fk_subcui_id='$subcui_id'",$con);
			return $res;
			database::disconnect();
	}
	public function search3($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select * from restaurant_tbl where rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	public function book1($email,$rest_id,$date,$people,$time,$request)
	{		$con=database::connect();
			$res=mysql_query("insert into booktable_tbl values(NULL,'$email','$rest_id','$date','$people','$time','$request','0')",$con);
			return $res;
			database::disconnect();
	}
	
	public function deleteorder($order_id,$email)
	{		$con=database::connect();
			$res=mysql_query("delete from order_tbl where order_id='$order_id' AND fk_user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
	
	public function deletefav($fav_id,$email)
	{		$con=database::connect();
			$res=mysql_query("delete from fav_tbl where fav_id='$fav_id' AND fk_user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
	
	public function addorder($order_id,$email)
	{		$con=database::connect();
			$res=mysql_query("update order_tbl set fk_rest_id='$rest_id',fk_user_email='$email',fk_subcui_id='$subcui_id' where email_id='$email'",$con);
			return $res;
			database::disconnect();
	}
	public function editprofile($email,$name,$add,$mobile_no,$gender,$city,$pro_pic)
	{		$con=database::connect();
			$res=mysql_query("update user_tbl set user_name='$name',address='$add',mobile_no='$mobile_no',gender='$gender',city='$city',pro_pic='$pro_pic' where user_email='$email'",$con);
			return $res;
			database::disconnect();
	}
	public function restaurant()
	{		$con=database::connect();
			$res=mysql_query("select * from restaurant_tbl",$con);
			return $res;
			database::disconnect();
	}
	public function addfav($rest_id,$fk_user_email)
	{		$con=database::connect();
			$res=mysql_query("insert into fav_tbl values(NULL,'$rest_id','$fk_user_email','1')",$con);
			return $res;
			database::disconnect();
	}
	public function userview($email,$flag)
	{		$con=database::connect();
			$res=mysql_query("select * from user_tbl where user_email='$email' and type='$flag'",$con);
			return $res;
			database::disconnect();
	}
	
}
?>