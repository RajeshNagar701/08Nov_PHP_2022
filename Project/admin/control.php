<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/admin':
			if(isset($_REQUEST['submit']))
			{
				$anm=$_REQUEST['anm'];
				$apass=$_REQUEST['apass'];
				$enc_pass=md5($apass);
				
				$where=array("anm"=>$anm,"apass"=>$enc_pass);
				$run=$this->select_where('admin',$where);
				
				$chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
				if($chk==1)
				{
					$fetch=$run->fetch_object(); // if only for single data
					
					$_SESSION['anm']=$fetch->anm;
					$_SESSION['aid']=$fetch->aid;
					echo "<script>
					alert('Login Success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login failed');
					</script>";
				}	
			}
			include_once('index.php');
			break;
			
			
			case '/adminlogout':
			unset($_SESSION['anm']);
			unset($_SESSION['aid']);
			echo "<script>
				alert('Logout Success');
				window.location='admin';
				</script>";
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_category':
			include_once('add_category.php');
			break;
			
			case '/manage_category':
			include_once('manage_category.php');
			break;
			
			case '/add_product':
			include_once('add_product.php');
			break;
			
			case '/manage_product':
			include_once('manage_product.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->select('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_feedback':
			//$feedback_arr=$this->select('feedback');
			$feedback_arr=$this->select_join2('customer','feedback','customer.cust_id=feedback.cust_id');
			include_once('manage_feedback.php');
			break;
			
			default:
			include_once('pnf.php');
			break;
			
		}
		
		
	}
}
$obj=new control;


?>