<?php

include_once('../admin/model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/':
			include_once('index.php');
			break;
			
			case '/index':
			include_once('index.php');
			break;
			
			case '/index':
			include_once('index.php');
			break;
			
			case '/shop':
			include_once('shop.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$mobile=$_REQUEST['mobile'];
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass);
				$gen=$_REQUEST['gen'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
				$cid=$_REQUEST['cid'];
				$file=$_FILES['file']['name'];
				$path='images/upload/customer/'.$file;
				$tmp_file=$_FILES['file']['tmp_name'];
				move_uploaded_file($tmp_file,$path);
				
				date_default_timezone_set("asia/calcutta");
				$created_dt=date("Y-m-d H:i:s");
				$updated_dt=date("Y-m-d H:i:s");
				
				$data=array("name"=>$name,"mobile"=>$mobile,"unm"=>$unm,"pass"=>$enc_pass,"gen"=>$gen
				,"lag"=>$lag,"cid"=>$cid,"file"=>$file,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
				
				$res=$this->insert('customer',$data);	
				if($res)
				{
					echo "<script>
					alert('Register Success');
					window.location='login';
					</script>";
				}
				else
				{
					echo "Not success";
				}	
				
			}
			
			
			
			$country=$this->select('country');
			include_once('signup.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				$unm=$_REQUEST['unm'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass);
				
				$where=array("unm"=>$unm,"pass"=>$enc_pass);
				$run=$this->select_where('customer',$where);
				
				$chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
				if($chk==1)
				{
					
					$fetch=$run->fetch_object(); // if only for single data
					$status=$fetch->status;
					
					if($status=="Unblock")
					{
						$_SESSION['unm']=$fetch->unm;
						$_SESSION['uid']=$fetch->uid;
						$_SESSION['name']=$fetch->name;
						echo "<script>
						alert('Login Success');
						window.location='index';
						</script>";
					}
					else
					{
						echo "<script>
						alert('Your account blocked so login Failed');
						window.location='login';
						</script>";
					}
				}
				else
				{
					echo "<script>
					alert('Login failed due wrong creadantial');
					</script>";
				}	
			}
			include_once('login.php');
			break;
			
			case '/profile':
			
			$where=array("customer.uid"=>$_SESSION['uid']);
			$run=$this->select_where_join('customer','country','customer.cid=country.cid',$where);
			$fetch=$run->fetch_object(); // if only for single data
		
			include_once('profile.php');
			break;
			
			case '/edituser':
			$country=$this->select('country');
			if(isset($_REQUEST['btnedit']))
			{
				$uid=$_REQUEST['btnedit'];
				$where=array("uid"=>$uid);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$mobile=$_REQUEST['mobile'];
					$unm=$_REQUEST['unm'];
					$gen=$_REQUEST['gen'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					$cid=$_REQUEST['cid'];
					date_default_timezone_set("asia/calcutta");
					$updated_dt=date("Y-m-d H:i:s");
					
					if($_FILES['file']['size']>0)
					{
						$file=$_FILES['file']['name'];
						$path='images/upload/customer/'.$file;
						$tmp_file=$_FILES['file']['tmp_name'];
						move_uploaded_file($tmp_file,$path);
						
						$data=array("name"=>$name,"mobile"=>$mobile,"unm"=>$unm,"gen"=>$gen
					,"lag"=>$lag,"cid"=>$cid,"file"=>$file,"updated_dt"=>$updated_dt);
						
						$old_file=$fetch->file;
						
						$res=$this->update('customer',$data,$where);	
						if($res)
						{
							unlink('images/upload/customer/'.$old_file);
							echo "<script>
							alert('Update Success');
							window.location='profile';
							</script>";
						}
						
					}
					else
					{
						$data=array("name"=>$name,"mobile"=>$mobile,"unm"=>$unm,"gen"=>$gen
					,"lag"=>$lag,"cid"=>$cid,"updated_dt"=>$updated_dt);
					
						$res=$this->update('customer',$data,$where);	
						if($res)
						{
							echo "<script>
							alert('Update Success');
							window.location='profile';
							</script>";
						}
						
					}

				}					
				
				
			}
			include_once('edituser.php');
			break;
			
			
			case '/logout':
			unset($_SESSION['unm']);
			unset($_SESSION['uid']);
			unset($_SESSION['name']);
			echo "<script>
				alert('Logout Success');
				window.location='index';
				</script>";
			break;

			default:
			include_once('pnf.php');
			break;
			
		}
		
		
	}
}
$obj=new control;


?>