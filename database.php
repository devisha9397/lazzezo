
<?php
class database
{
private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
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
	public function disrestc()
	{		$con=database::connect();
			$res=mysql_query("select r.*,c.*  from restaurant_tbl as r,category_tbl as c where r.fk_cat_id=c.cat_id " ,$con);
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
			$res=mysql_query("select c.*,r.*,s.* from restaurant_tbl as r,cusine_tbl as c,subcui_tbl as s 
			where s.fk_cui_id=c.cui_id and c.fk_rest_id=r.rest_id and c.fk_rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}

public function addcart($fk_rest_id,$fk_user_email,$fk_subcui_id,$quantity,$total_amount,$date_of_order,$delivery_area)
	{		$con=database::connect();
			$res=mysql_query("insert into order_tbl values(NULL,'$fk_rest_id','$fk_user_email','$fk_subcui_id','$quantity','0',$total_amount,$date_of_order,'$delivery_area)",$con);
			return $res;
			database::disconnect();
	}
	
	public function getcart($subcui_id)
	{		$con=database::connect();
			$res=mysql_query("select * from subcui_tbl where subcui_id='$subcui_id'",$con);
			return $res;
			database::disconnect();
	}
	
		public function getdiscount()
	{		$con=database::connect();
			$res=mysql_query("select m.*,r.* from restaurant_tbl as r,discount_tbl as m where m.fk_rest_id=r.rest_id ",$con);
			return $res;
			database::disconnect();
	}
	public function getdiscountrest($rest_id)
	{		$con=database::connect();
			$res=mysql_query("select m.*,r.* from restaurant_tbl as r,discount_tbl as m where m.fk_rest_id=r.rest_id and m.fk_rest_id='$rest_id'",$con);
			return $res;
			database::disconnect();
	}
	
	

}
?>