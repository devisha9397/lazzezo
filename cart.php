<?php

$obj1=new database();
$res1=$obj1->getdata("select o.*,s.*,r.* from order_tbl as o,subcui_tbl as s,restaurant_tbl as r where o.fk_subcui_id=d.subcui_id AND o.fk_user_email='$email' and o.fk_rest_id='$rest_id'");
while($row=mysql_fetch_assoc($res1))
{
echo '<table class="table-responsive">';
echo '<table cellpadding="10" cellspacing="10" class="table table-hover">';
echo '<tr>';
echo '<th>Image</th>';

echo '<th>Order Date</th>';
echo '<th>Quantity</th>';
echo '<th>Price</th>';
echo '</tr>';
echo '</tr>';
echo '<div class="col-sm-6 col-md-4">';
echo '<div class="caption">';
echo '<td><img style"height:30px;width:50px" src="images/'.$row[""].'"></td>';
echo '<td><h3>'.$row["o_id"].'</h3></td>';
echo '<td><h3>'.$row["o_date"].'</h3></td>';
echo '<td>
<br>
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" style="height:40px;width:50px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    '.$row["o_qty"].'<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
  </ul>
</div></td>';

echo '<td><h3>'.$row["o_amt"].'</h3></td>';
echo '<br>';
echo '
<td><br><a href="cartdelete.php?id='.$row["o_id"].'"> <span class="glyphicon glyphicon-trash" ></span></a></td>
</div>
</div>
</tr>
</table>
</table>';
}
?>
