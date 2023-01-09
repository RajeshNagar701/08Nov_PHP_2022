<?php

include('model.php');


class control extends model
{
	
	function __construct() // magic function call automatecaly
	{
		
		session_start();
		model::__construct();
		$page_url=$_SERVER['PATH_INFO'];	 //http://localhost/Riddhi_php/project/web/control.php
		
		switch($page_url)
		{
			
			case '/index':
			$country_arr=$this->select('country');
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$cid=$_REQUEST['cid'];
				$sid=$_REQUEST['sid'];
				$city_id=$_REQUEST['city_id'];
				$data=array("name"=>$name,"cid"=>$cid,"sid"=>$sid,"city_id"=>$city_id);
				$res=$this->insert('reg',$data);
				if($res)
				{
					echo "<script>alert('Register Success')</script>";
				}
			}
			include_once('form_get_country.php');
			break;

			
			case '/statedata':
			if(isset($_REQUEST['btn']))
				{
					$cid=$_REQUEST['btn'];
					$where=array("cid"=>$cid);
					$state_arr=$this->select_where('state',$where);
					?>
					<option>------------Select State----</option>
					<?php
					foreach($state_arr as $r)
					{
					?>
						<option value="<?php echo $r->sid; ?>">
										<?php echo $r->snm; ?>
						</option>
					<?php 
					}
				}
			
			break;
			
			
			case '/citydata':
			if(isset($_REQUEST['btn']))
				{
					$sid=$_REQUEST['btn'];
					$where=array("sid"=>$sid);
					$city_arr=$this->select_where('city',$where);
					?>
					 <option>----Select City----</option>
					<?php
					foreach($city_arr as $r)
					{
					?>
						<option value="<?php echo $r->city_id; ?>">
										<?php echo $r->city_name; ?>
						</option>
					<?php 
					}
				}
			
			break;
			
			case '/searchData':
			if(isset($_REQUEST['btn']))
				{
					$search=$_REQUEST['btn'];
					$user_arr=$this->selectSerach('reg','country','reg.cid=country.cid','state','reg.sid=state.sid','city','reg.city_id=city.city_id','reg.name',$search);
					?>
					<caption>Reg Form</caption>
    	
					<tr>
					<td>User id</td>
					<td>User Name</td>
					<td>Country Name</td>
					<td>State Name</td>
					<td>City Name</td>
					</tr>
					<?php
					if(!empty($user_arr))
					{		
						foreach($user_arr as $f)
						{		
						?>
						<tr>
						<td><?php echo $f->id;?></td>
						<td><?php echo $f->name;?></td>
						<td><?php echo $f->cnm;?></td>
						<td><?php echo $f->snm;?></td>
						<td><?php echo $f->city_name;?></td>
						</tr>
						<?php
						 }
					}
				}
			
			break;
			
			
			
			
			case '/show':
			
			$user_arr=$this->select_join4('reg','country','reg.cid=country.cid','state','reg.sid=state.sid','city','reg.city_id=city.city_id');
			include_once('show.php');
			break;
			
			default:
			include('404.php');
			break;
		}	
	}
}

$obj=new control;

?>

