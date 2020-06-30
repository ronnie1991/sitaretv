<?php 
class main
{
	protected $name='sitareb24';
	protected $localhost='localhost';
	protected $root='root';
	protected $password='';
	protected $connect;
	public $db;
	
	 function __construct()
	 {
		 $this->connect();
	 }
	
	public function connect()
	{
		$this->db=new PDO("mysql:host=$this->localhost;dbname=$this->name",$this->root,$this->password);
	}
	
    //Function Start For Banner Slider


	public function findBannerSlider()
	{
		$sql=$this->db->query("select * from `banner_slider` ");
		return $fetch=$sql->fetchAll();
	}


	//Function End For Banner Slider

	
	//Function Start Stream
	function specificStreamDtls($strmId)
	{	
      
		$show=$this->db->query("select * from `stream` WHERE `id`='$strmId'");
		$singel=$show->fetchAll();
		return $singel[0];	
			
        		
	}

	function specificFullStreamDtls($fulllStrmId)
	{	
      
		$show=$this->db->query("select * from `stream_video` WHERE `id`='$fulllStrmId'");
		$singel=$show->fetchAll();
		return $singel[0];	
			
        		
	}

	function specificCategoryFullStreamDtls($categoryId)
	{	
		
		$sql=$this->db->query("SELECT * FROM `stream` WHERE `category`='$categoryId'");
		return $fetch=$sql->fetchAll();
	}
			
        	

	public function findDistinctSesionStrm($sti)
	{
		$sql=$this->db->query("SELECT DISTINCT `session` FROM `stream_video` WHERE `stream_id`='$sti'   ");
		return $fetch=$sql->fetchAll();
	}

	public function findStreamBySession($strid,$sesionId)
	{
		$sql=$this->db->query("select * from `stream_video` WHERE `stream_id`='$strid' AND `session`='$sesionId' ");
		return $fetch=$sql->fetchAll();
	}

	public function findStreamByCategoryNotsmId($categoryId,$conlcId)
	{
		$sql=$this->db->query("select * from `stream` WHERE `category`='$categoryId' AND `id`!='$conlcId' ");
		return $fetch=$sql->fetchAll();
	}


	//Function End Stream
	
	//Function Start For Tag


	public function findFreshRealliseSession()
	{
		$sql=$this->db->query("select * from `tag` WHERE `fros`='1' ");
		return $fetch=$sql->fetchAll();
	}

	public function findTreandingonscreenPopular()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='1' ");
		return $fetch=$sql->fetchAll();
	}
	public function findTreandingonscreenThriller()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='2' ");
		return $fetch=$sql->fetchAll();
	}
	public function findTreandingonscreenAction()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='3' ");
		return $fetch=$sql->fetchAll();
	}
	public function findTreandingonscreenRomantic()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='4' ");
		return $fetch=$sql->fetchAll();
	}
	public function findTreandingonscreenDrama()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='5' ");
		return $fetch=$sql->fetchAll();
	}
	public function findTreandingonscreenComedy()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='6' ");
		return $fetch=$sql->fetchAll();
	}
	public function findTreandingonscreenEducation()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='7' ");
		return $fetch=$sql->fetchAll();
	}

	public function findTreandingonscreenHot()
	{
		$sql=$this->db->query("select * from `tag` WHERE `tos`='8' ");
		return $fetch=$sql->fetchAll();
	}

	public function findFavaouredMovies()
	{
		$sql=$this->db->query("select * from `tag` WHERE `fm`='1' ");
		return $fetch=$sql->fetchAll();
	}

	public function findFavaouredRecommends()
	{
		$sql=$this->db->query("select * from `tag` WHERE `sr`='1' ");
		return $fetch=$sql->fetchAll();
	}

	public function findFavaouredMUSTWATCHSERIES()
	{
		$sql=$this->db->query("select * from `tag` WHERE `mws`='1' ");
		return $fetch=$sql->fetchAll();
	}

	function userLogin()
	{
		$username=$_POST['email'];
		$password=$_POST['password'];
		$login=$this->db->query("select * from `user_login` where `email`='$username' and `password`='$password' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   		
		$_SESSION['sl_no'] = $fetch_singel['id'];
           echo "
            <script type=\"text/javascript\">           
		   window.location='profile';
            </script>
        ";		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600;margin-bottom: 10px;'>Email ID Or Password is Incorrect</span>";		
	}
	function userLoginVideoSource($streamId)
	{
		$username=$_POST['email'];
		$password=$_POST['password'];
		$login=$this->db->query("select * from `user_login` where `email`='$username' and `password`='$password' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   		
		$_SESSION['sl_no'] = $fetch_singel['id'];
           echo "
            <script type=\"text/javascript\">           
		   window.location='play?did=$streamId';
            </script>
        ";		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600;margin-bottom: 10px;'>Email ID Or Password is Incorrect</span>";		
	}
	
	function logout()
	{		
		session_destroy();
	}

	public function cretUserLogin()
	{
		$name=$_POST['userName'];
		$phone=$_POST['phoneNumber'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$referralcode=$_POST['refelcod'];
		$get_count=$this->db->query("select * from `user_login` WHERE `phone`='$phone' OR  `email`='$email' ");
		$rowCount=$get_count->rowCount();
		if($rowCount>0)
	    {
			return "<h4 style='color:red'>Account Already Exist</h4>";
		}
		else
		{ 	
		$insert=$this->db->query("INSERT INTO `user_login`(`name`, `phone`, `dob`, `email`, `password`, `referralcode`)
		 VALUES ('$name','$phone','$dob','$email','$password','$referralcode')");		
		if($insert)
		{	
		$lastInId=$this->db->lastInsertId();
		$_SESSION['sl_no'] = $lastInId;	
		echo "
            <script type=\"text/javascript\">           
		   window.location='profile';
            </script> ";	
		}
	  }
	}	
	
	public function updateUserLogin($uId)
	{
		$name=$_POST['userName'];
		$phone=$_POST['phoneNumber'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];			
		$insert=$this->db->query("UPDATE `user_login` SET `name`='$name',`phone`='$phone',
		`dob`='$dob',`email`='$email' WHERE `id`='$uId'");		
		if($insert)
		{	
		return "<h4 style='color:green'>Profile Sucessfully Updated</h4>";	
		}
	  
	}

	function singelUserDetails($slno)
	{	
      
		$show=$this->db->query("select * from `user_login` WHERE `id`='$slno'");
		$singel=$show->fetchAll();
		return $singel[0];				
        		
	}

	function categoryStream($cateId)
	{
		if($cateId==1)
		{
			$streamCateNm='Shows';
		}
		if($cateId==2)
		{
			$streamCateNm='Music Video';
		}
		if($cateId==3)
		{
			$streamCateNm='Shorts';
		}
		if($cateId==4)
		{
			$streamCateNm='News';
		}
		if($cateId==5)
		{
			$streamCateNm='Upcoming';
		}
		if($cateId==6)
		{
			$streamCateNm='Timeline';
		}
		return $streamCateNm;
		
	}


	//Function End For Tag

	//Function Start For Comment Review

	public function insertCommentReview()
	{
		$user_id=$_SESSION['sl_no'];
		$stream_id=base64_decode($_POST['strmid']);
		$title=$_POST['title'];
		$comment=$_POST['comment'];
		$rating=$_POST['rating'];
		$in=time();
		$get_count=$this->db->query("select * from `comment_review` WHERE `user_id`='$user_id' AND  `stream_id`='$stream_id' ");
		$rowCount=$get_count->rowCount();
		if($rowCount>0)
	    {
			return "<h1 style='color:red'>Rating and review already Comented</h1>";
		}
		else
		{ 	
		$insert=$this->db->query("INSERT INTO `comment_review`(`user_id`, `stream_id`, `title`, `comment`, `rating`, `insert_on`)
		 VALUES ('$user_id','$stream_id','$title','$comment','$rating','$in')");		
		if($insert)
		{	
			return "<h1 style='color:#2fd82f'>Rating and review successfully submitted</h1>";	
		}
	  }
	}
	public function findratingReviewbyStreamId($treamId)
	{
		$sql=$this->db->query("SELECT * FROM `comment_review` WHERE `stream_id`='$treamId' ");
		return $fetch=$sql->fetchAll();
	}

	//Function End For Comment Review
	//Function Start For Subscription
	public function insertSubscribe($userId)
	{
		$type=1;
		$time=time();
		$get_count=$this->db->query("select * from `subscription` WHERE `user_id`='$userId' AND  `type`='$type' ");
		$rowCount=$get_count->rowCount();
		if($rowCount>0)
	    {
			echo "Alredy Subscribed";
		}
		else
		{ 	
		$insert=$this->db->query("INSERT INTO `subscription`( `user_id`, `type`, `time`) VALUES ('$userId','$type','$time')");		
		if($insert)
		{
			echo "Successfully subscribed";
		}
	  }
	}

	function singelSubscriptionDetails($slno)
	{	
      
		$show=$this->db->query("select * from `subscription` WHERE `user_id`='$slno'");
		return $show->rowCount($show);					
        		
	}

	//Function End For Subscription
	//Function Star For Sitare Star
	function allSitareStar()
	{	
      
		$sql=$this->db->query("SELECT * FROM `sitare_star`");
		return $fetch=$sql->fetchAll();					
        		
	}

	function singelSitareStar($sti)
	{	
      
		$show=$this->db->query("select * from `sitare_star` WHERE `id`='$sti'");
		$singel=$show->fetchAll();
		return $singel[0];				
        		
	}

	//Function End For Sitare Star

	//Function Start For Streem Wishlist
	public function insertStreemWishlist($strmId,$userid)
	{
		
		$get_count=$this->db->query("select * from `wishlist` WHERE `userid`='$userid' AND  `steramid`='$strmId' ");
		$rowCount=$get_count->rowCount();
		if($rowCount>0)
	    {
			echo "<h1 style='color:red'>Already Reacted</h1>";
		}
		else
		{ 	
		$insert=$this->db->query("INSERT INTO `wishlist`(`steramid`, `userid`) 
		VALUES ('$strmId','$userid')");		
		if($insert)
		{	
			echo "<h1 style='color:#2fd82f'>Successfully Reacted</h1>";	
		}
	  }
	}
	public function notLogin()
	{
		
		echo "
            <script type=\"text/javascript\">           
		   window.location='signin';
            </script>
        ";	
	}
	function whislistRowcount($steramid)
	{
		
		$whislist=$this->db->query("select * from `wishlist` where `steramid`='$steramid' ");
		return $whislist->rowCount($whislist); 
				
	}
		

	//Function End For Streem Wishlist
	
}
$object=new main();
?>