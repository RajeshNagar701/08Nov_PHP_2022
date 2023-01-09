<?php

class model 
{ 
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','ajax');	
	}
	
	function insert($tbl,$data)
	{
		$key_arr=array_keys($data);
		$col=implode(",",$key_arr);
		
		$value_arr=array_values($data);
		$value=implode("','",$value_arr);
		
		$ins="insert into $tbl($col) values('$value')";  // query
		$run=$this->conn->query($ins);  // run query
		return $run;
	}
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel);  // run query
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	function selectSerach($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3,$col,$value)
	{
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3 where $col LIKE '$value%' ; ";  // query
		$run=$this->conn->query($sel);  // run query
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	
	function select_where($tbl,$where)
	{
		$sel="select * from $tbl where 1=1";  // 1=1 means query continue
		$i=0;
		$col=array_keys($where);// array("0"=>"unm","1"=>"pass")  
		$value=array_values($where);// array("0"=>"rajesh","1"=>"1234")  
		foreach($where as $w)
		{
			echo $sel.=" and $col[$i]='$value[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	
	function select_join4($tbl1,$tbl2,$on1,$tbl3,$on2,$tbl4,$on3)
	{
		$sel="select * from $tbl1 join $tbl2 on $on1 join $tbl3 on $on2 join $tbl4 on $on3";  // 1=1 means query continue
		$run=$this->conn->query($sel);  // run query
		while($fetch=$run->fetch_object())  // data fetch from query
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
}
$obj=new model;


?>