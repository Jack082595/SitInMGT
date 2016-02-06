<?php
	session_start();
	function site_db()
	{
		try
		{
			return new PDO('mysql:host=localhost;dbname=sitinmanagementsystem', 'root', '');
		}
		catch(PDOException $ex)
		{
			echo "Connection Error: ", $ex->getMessage();
		}
	}
	
	function login($username,$pass)
	{
		$db = site_db();
		$sql = "Select * from account where ACCOUNTID=? and PASSWORD=?";
		$st = $db->prepare($sql);
		$st->execute(array($username,$pass));
		$row = $st->fetch();
		$db = null;
		
		if($username == $row['ACCOUNTID'] and $pass == $row['PASSWORD'] and $row['ACCOUNTTYPE'] == 'admin')
		{
			$_SESSION['id'] = $row['ACCOUNTID'];
			$_SESSION['isloginAdmin'] = true;
			return true;
		}
		else if($username == $row['ACCOUNTID'] and $pass == $row['PASSWORD'] and $row['ACCOUNTTYPE'] == 'working scholar')
		{
			$_SESSION['id'] = $row['ACCOUNTID'];
			$_SESSION['isloginScholar'] = true;
			return true;
		}
		else
		{
			$_SESSION['isloginAdmin'] = false;
			$_SESSION['isloginScholar'] = false;
			return false;
		}
	}
	/*  ADMINISTRATOR MANAGEMENT*/
	function view_admin()
	{
		$db = site_db();
		$sql = "SELECT * FROM lab_supervisor order by 1 asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	 function add_admin($id,$fName,$mName,$lName,$stat)
	 {
		 $db = site_db();
		 $sql = "Insert into lab_supervisor(LABSUPID,LABSUPFNAME,LABSUPMNAME,LABSUPLNAME,LABSTAT) values ('$id','$fName','$mName','$lName','$stat')";
		 $st = $db->prepare($sql);
		 $st->execute(array($id,$fName,$mName,$lName,$stat));
		 $db = null;
	 }
	 
	function view_photos()
	{
		$db = site_db();
		$sql = "select * from photos order by 1 asc";
		$st = $db->prepare($sql);
		$st->execute();	
		$row = $st->fetchAll();
		$db = null;
		return $row;
	}
	 
	function add_photo($id,$name,$type,$bytes,$user,$stat)
	{
		$db = site_db();
		$sql = "Insert into photos(id,name,type,bytes,profile,stat) values(?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($id,$name,$type,$bytes,$user,$stat));	
		$db = null;
	}
	 
	function get_photo($id)
	{
		$db = site_db();
		$sql = "select * from photos where id=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));	
		$row = $st->fetch();
		$db = null;
		return $row;
	}
	
	function delete_photo($stat,$id)
	{
		$db= site_db();
		$sql = "Update photos set stat=? where id=?";
		$st = $db->prepare($sql);
		$st->execute(array($stat,$id));
		$db = null;
	}
	 
	function search_admin($keyword)
	{
		$keyword = '%'. $keyword . '%'; //add wildcard for partial matching
		$db = site_db();
		$sql = "Select * from lab_supervisor where LABSUPID like ? or LABSUPFNAME like ? or LABSUPMNAME like ? or LABSUPLNAME like ?";
		$st = $db->prepare($sql);
		$st->execute(array($keyword,$keyword,$keyword,$keyword));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function update_admin($fName,$mName,$lName,$id)
	{
		$db= site_db();
		$sql = "Update lab_supervisor set LABSUPFNAME=?,LABSUPMNAME=?,LABSUPLNAME=? where LABSUPID=?";
		$st = $db->prepare($sql);
		$st->execute(array($fName,$mName,$lName,$id));
		$db = null;
	}
	
	function add_account($id,$pass,$type)
	{
		$db = site_db();
		$sql ="Insert into account(ACCOUNTID,PASSWORD,ACCOUNTTYPE) values(?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($id,$pass,$type));
		$db=null;
	}
	
	function update_account($pass,$id)
	{
		$db= site_db();
		$sql = "Update account set PASSWORD=? where ACCOUNTID=?";
		$st = $db->prepare($sql);
		$st->execute(array($pass,$id));
		$db = null;
	}
	
	function get_pass($id)
	{
		$db= site_db();
		$sql = "Select * from account where ACCOUNTID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetch();
		$db = null;
		
		return $rows;
	}
	function update_photo($name,$type,$bytes,$user,$id)
	{
		$db= site_db();
		$sql = "Update photos set name=?,type=?,bytes=?,profile=? where id=?";
		$st = $db->prepare($sql);
		$st->execute(array($name,$type,$bytes,$user,$id));
		$db = null;
	}
	
	function find_admin($id)
	{
		$db= site_db();
		$sql = "Select * from lab_supervisor where LABSUPID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetch();
		$db = null;
		
		return $rows;
	}
	
	function delete_admin($stat,$id)
	{
		$db = site_db();
		$sql = "Update lab_supervisor set LABSTAT=? where LABSUPID=?";
		$st = $db->prepare($sql);
		$st->execute(array($stat,$id));
		$db = null;
	}
	/*  working scholar area */
	function view_working()
	{
		$db= site_db();
		$sql = "Select * from working_student";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function add_working($id,$fName,$mName,$lName,$course,$yr,$stat,$lab,$time,$days,$date)
	{
		$db = site_db();
		$sql = "Insert into working_student(WORKINGID,WORKINGFNAME,WORKINGMNAME,WORKINGLNAME,WORKINGCOURSE,WORKINGYR,WORKINGSTAT,ASSIGNEDLAB,TIME,DAYS,DATE) values(?,?,?,?,?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($id,$fName,$mName,$lName,$course,$yr,$stat,$lab,$time,$days,$date));
		$db = null;
	}
	
	function update_working($fName,$mName,$lName,$course,$yr,$lab,$time,$days,$id)
	{
		$db = site_db();
		$sql = "Update working_student set WORKINGFNAME=?,WORKINGMNAME=?,WORKINGLNAME=?,WORKINGCOURSE=?,WORKINGYR=?,ASSIGNEDLAB=?,TIME=?,DAYS=? where WORKINGID=?";
		$st = $db->prepare($sql);
		$st->execute(array($fName,$mName,$lName,$course,$yr,$lab,$time,$days,$id));
		$db = null;
	}
	
	function find_working($id)
	{
		$db= site_db();
		$sql = "Select * from working_student where WORKINGID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetch();
		$db = null;
		
		return $rows;
	}
	
	function search_working($keyword)
	{
		$keyword = '%'. $keyword . '%'; //add wildcard for partial matching
		$db = site_db();
		$sql = "Select * from working_student where WORKINGID like ? or WORKINGFNAME like ? or WORKINGMNAME like ? or WORKINGLNAME like ? or WORKINGCOURSE like ? or WORKINGYR like ? or ASSIGNEDLAB like ? or TIME like ? or DAYS like ?";
		$st = $db->prepare($sql);
		$st->execute(array($keyword,$keyword,$keyword,$keyword,$keyword,$keyword,$keyword,$keyword,$keyword));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function delete_working($stat,$id)
	{
		$db = site_db();
		$sql = "Update working_student set WORKINGSTAT=? where WORKINGID=?";
		$st = $db->prepare($sql);
		$st->execute(array($stat,$id));
		$db = null;
	}
	
	/* STUDENTS MANAGEMENT */
	function view_student()
	{
		$db = site_db();
		$sql = "SELECT * FROM student order by 1 asc";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function search_student($keyword)
	{
		$keyword = '%'. $keyword . '%'; //add wildcard for partial matching
		$db = site_db();
		$sql = "Select * from student where STUDID like ? or STUDFNAME like ? or STUDMNAME like ? or STUDLNAME like ? or STUDCOURSE like ? or STUDYR like ?";
		$st = $db->prepare($sql);
		$st->execute(array($keyword,$keyword,$keyword,$keyword,$keyword,$keyword));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	function add_student($id,$fName,$mName,$lName,$course,$yr,$stat)
	{
		$db = site_db();
		$sql = "Insert into student(STUDID,STUDFNAME,STUDMNAME,STUDLNAME,STUDCOURSE,STUDYR,STUDSTAT) values(?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($id,$fName,$mName,$lName,$course,$yr,$stat));
		$db = null;
	}
	
	function update_student($fName,$mName,$lName,$course,$yr,$id)
	{
		$db = site_db();
		$sql = "Update student set STUDFNAME=?,STUDMNAME=?,STUDLNAME=?,STUDCOURSE=?,STUDYR=? where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($fName,$mName,$lName,$course,$yr,$id));
		$db = null;
	}
	
	function find_student($id)
	{
		$db= site_db();
		$sql = "Select * from student where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetch();
		$db = null;
		
		return $rows;
	}
	
	function delete_student($stat,$id)
	{
		$db = site_db();
		$sql = "Update student set STUDSTAT=? where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($stat,$id));
		$db = null;
	}
	
	/* sit-in record for student  */
	function add_sitinDetails($id,$total,$available)
	{
		$db = site_db();
		$sql = "Insert into sit_in_details(STUDID,TOTALSITIN,AVAILABLESITIN) values(?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($id,$total,$available));
		$db = null;
	}
	
	function update_sitinRecord($time,$date,$station,$lab,$id)
	{
		$db = site_db();
		$sql = "Update sit_in_record set TIMEIN=?,DATE=?,WORKSTATION=?,LABORATORY=? where SITINID=?";
		$st = $db->prepare($sql);
		$st->execute(array($time,$date,$station,$lab,$id));
		$db = null;
	}
	
	function get_sitinRecord($id)
	{
		$db = site_db();
		$sql = "Select * from sit_in_record where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetch();
		$db = null;
		
		return $rows;
	}
	
	function get_sitinDetails($id)
	{
		$db = site_db();
		$sql = "Select * from sit_in_details where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetch();
		$db = null;
		
		return $rows;
	}
	
	function update_SitIn($total,$available,$id)
	{
		$db = site_db();
		$sql = "Update sit_in_details set TOTALSITIN=?,AVAILABLESITIN=? where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($total,$available,$id));
		$db = null;
	}
	
	function view_Sitin($id)
	{
		$db = site_db();
		$sql = "Select * from sit_in_record where STUDID=?";
		$st = $db->prepare($sql);
		$st->execute(array($id));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function add_SitIn($in,$date,$station,$lab,$id)
	{
		$db = site_db();
		$sql = "Insert into sit_in_record(TIMEIN,DATE,WORKSTATION,LABORATORY,STUDID)values(?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array(time,$date,$station,$lab,$id));
		$db = null;
	}
	
	/* reports */
	function view_course()
	{
		$db = site_db();
		$sql = "Select DISTINCT STUDCOURSE from student";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function view_yr()
	{
		$db = site_db();
		$sql = "Select DISTINCT STUDYR from student";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function view_stat()
	{
		$db = site_db();
		$sql = "Select DISTINCT STUDSTAT from student";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function view_byCourse($course)
	{
		$db = site_db();
		$sql = "Select * from student where STUDCOURSE=?";
		$st = $db->prepare($sql);
		$st->execute(array($course));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function view_byYr($yr)
	{
		$db = site_db();
		$sql = "Select * from student where STUDYR=?";
		$st = $db->prepare($sql);
		$st->execute(array($yr));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	function view_byStat($stat)
	{
		$db = site_db();
		$sql = "Select * from student where STUDSTAT=?";
		$st = $db->prepare($sql);
		$st->execute(array($stat));
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	
	/*  Laboratory */
	function view_lab()
	{
		$db = site_db();
		$sql = "Select * from laboratory";
		$st = $db->prepare($sql);
		$st->execute();
		$rows = $st->fetchAll();
		$db = null;
		
		return $rows;
	}
	 /* LOGOUT */
	
	function logout()
	{
		session_unset();
		session_destroy();
		session_regenerate_id();
	}
?>