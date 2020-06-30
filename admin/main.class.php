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
	//Function Start For Login Users	
	function adminLogin()
	{
		$username=$_POST['user_d'];
		$password=$_POST['password'];
		$login=$this->db->query("select * from `admin_login` where `user_id`='$username' and `password`='$password' AND `status`='1' ");
		$rowcount=$login->rowCount($login); 
		$singlRc=$login->fetchAll();		    
		if($rowcount>0)
		{
		$fetch_singel=$singlRc[0];   		
		$_SESSION['sl_no'] = $fetch_singel['id'];
           echo "
            <script type=\"text/javascript\">           
		   window.location='dashboard';
            </script>
        ";		
		}
		else
		return "<span style='color:red;font-size: 16px;font-weight:600'>User ID Or Password is Incorrect</span>";		
	}
	
	function logout()
	{		
		session_destroy();
	}
    //Function End For Login Users
    //Function Start For Banner Slider

    public function uploadBannerSlider()
	{
		
		$bannerslidr=$_FILES['bnrslider']['name'];
		$insert=$this->db->query("INSERT INTO `banner_slider`(`banner_slider`) VALUES ('$bannerslidr')");		
		move_uploaded_file($_FILES['bnrslider']['tmp_name'],'../img/slider/'.$bannerslidr);		
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Successfully Banner Uploaded</h3>";	
		}
	}

	public function updateBannerSlider($id)
	{
		
		$bannerslidr=$_FILES['bnrslider']['name'];
		$singlBanner=$this->singelBannerDtls($id);
		$insert=$this->db->query("UPDATE `banner_slider` SET `banner_slider`='$bannerslidr' WHERE `id`='$id'");		
		move_uploaded_file($_FILES['bnrslider']['tmp_name'],'../img/slider/'.$bannerslidr);	
		unlink('../img/slider/'.$singlBanner['banner_slider']);	
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Successfully Banner Updated</h3>";	
		}
	}

	public function findAllBanner()
	{
		$sql=$this->db->query("select * from `banner_slider` ");
		return $fetch=$sql->fetchAll();
	}

	function singelBannerDtls($bnr)
	{	
      
		$show=$this->db->query("select * from `banner_slider` WHERE `id`='$bnr'");
		$singel=$show->fetchAll();
		return $singel[0];	
			
        		
	}

    //Function End For Banner Slider

	//Function Start For Stream

    public function createStream()
	{
		$title=$_POST['title'];
		$coverpic=$_FILES['coverpic']['name'];
		$genes=$_POST['genes'];
		$director=$_POST['director'];
		$cast=$_POST['cast'];
		$release_year=$_POST['realiesyear'];
		$running_time=$_POST['runintime'];
		$country=$_POST['country'];
		$description=$_POST['descripion'];				
		$trailers=$_FILES['trailer']['name'];
		$category=$_POST['videocategory'];
		$insert=$this->db->query("INSERT INTO `stream`(`title`, `coverpic`, `genres`, `director`, `cast`, `release_year`, `running_time`,
		`country`, `description`, `trailers`, `category`) VALUES ('$title','$coverpic','$genes','$director','$cast','$release_year',
		'$running_time','$country','".$description."','$trailers','$category')");	
		move_uploaded_file($_FILES['coverpic']['tmp_name'],'../img/covers/'.$coverpic);	
		move_uploaded_file($_FILES['trailer']['tmp_name'],'video/trailer/'.$trailers);		
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Successfully Uploaded</h3>";	
		}
	}

	public function updateStream($streamId)
	{
		$title=$_POST['title'];
		$coverpic=$_FILES['coverpic']['name'];
		$genes=$_POST['genes'];
		$director=$_POST['director'];
		$cast=$_POST['cast'];
		$release_year=$_POST['realiesyear'];
		$running_time=$_POST['runintime'];
		$country=$_POST['country'];
		$description=$_POST['descripion'];				
		$trailers=$_FILES['trailer']['name'];
		$category=$_POST['videocategory'];
		$singelStreamDtls=$this->singelmainStreamDtls($streamId);
		if($coverpic !='')
		 {
			$coverpicFinal=$coverpic;		  
		     unlink('video/trailer/'.$singelStreamDtls['coverpic']);	
           move_uploaded_file($_FILES['coverpic']['tmp_name'],'../img/covers/'.$coverpicFinal);			 
		 }	
		 if($coverpic =='')
		 {
		    if($singelStreamDtls['coverpic']!='')
			{
				$coverpicFinal=$singelStreamDtls['coverpic'];				
			}
			if($singelStreamDtls['coverpic']=='')
			{
				$coverpicFinal='';
			}
		 }
		 if($trailers !='')
		 {
			$trailersFinal=$trailers;		  
		     unlink('video/trailer/'.$singelStreamDtls['trailers']);	
           move_uploaded_file($_FILES['trailer']['tmp_name'],'video/trailer/'.$trailersFinal);			 
		 }	
		 if($trailers =='')
		 {
		    if($singelStreamDtls['trailers']!='')
			{
				$trailersFinal=$singelStreamDtls['trailers'];				
			}
			if($singelStreamDtls['trailers']=='')
			{
				$trailersFinal='';
			}
		 }
		

		$insert=$this->db->query("UPDATE `stream` SET `title`='$title',`coverpic`='$coverpicFinal',`genres`='$genes',
		`director`='$director',`cast`='$cast',`release_year`='$release_year',`running_time`='$running_time',`country`='$country',
		`description`='$description',`trailers`='$trailersFinal',`category`='$category' WHERE `id`='$streamId'");	
		
				
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Successfully Updated</h3>";	
		}
	}

	public function findAllStream()
	{
		$sql=$this->db->query("select * from `stream` ");
		return $fetch=$sql->fetchAll();
	}

	function singelmainStreamDtls($stid)
	{      
		$show=$this->db->query("select * from `stream` WHERE `id`='$stid'");
		$singel=$show->fetchAll();
		return $singel[0];	        		
	}

	public function uplodMainVideoFile()
	{
		$strmtilId=$_POST['sttirnm'];
		$msfn=$_FILES['mmainstrmfile']['name'];
		$session=$_POST['session'];
		$episode=$_POST['episode'];
		$cover_pic=$_FILES['coverpic']['name'];
		$insert=$this->db->query("INSERT INTO `stream_video`(`stream_id`, `videofilenm`, `session`, `episode`, `cover_pic`)
		VALUES ('$strmtilId','$msfn','$session','$episode','$cover_pic')");
		move_uploaded_file($_FILES['mmainstrmfile']['tmp_name'],'video/ful_video/'.$msfn);
		move_uploaded_file($_FILES['coverpic']['tmp_name'],'video/coverpic/'.$cover_pic);		
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Successfully Uploaded</h3>";	
		}
	}

	function strmType($strmId)
	{	
      
		$show=$this->db->query("select * from `stream` WHERE `id`='$strmId'");
		$singel=$show->fetchAll();
		return $singel[0];		
        		
	}

	public function tagStream()
	{
		$steram_id=$_POST['steram_id'];
		$fros=$_POST['fros'];
		$tos=$_POST['tos'];
		$fm=$_POST['fm'];
		$sr=$_POST['sr'];
		$mws=$_POST['mws'];		
		$insert=$this->db->query("INSERT INTO `tag`(`steram_id`, `fros`, `tos`, `fm`, `sr`, `mws`) VALUES ('$steram_id','$fros',
		'$tos','$fm','$sr','$mws')");		
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Taged Successfully</h3>";	
		}
	}

	public function updateTagStream($streamId)
	{
		
		$fros=$_POST['fros'];
		$tos=$_POST['tos'];
		$fm=$_POST['fm'];
		$sr=$_POST['sr'];
		$mws=$_POST['mws'];	
		$insert=$this->db->query("UPDATE `tag` SET `fros`='$fros',`tos`='$tos',
		`fm`='$fm',`sr`='$sr',`mws`='$mws' WHERE `steram_id`='$streamId'");		
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Taged Successfully Updated</h3>";	
		}
	}

	

	function singelTagDtlsByStreamID($strmId)
	{	
      
		$show=$this->db->query("select * from `tag` WHERE `steram_id`='$strmId'");
		$singel=$show->fetchAll();
		return $singel[0];		
        		
	}

	//Function End For Stream
	//Function Start For Subscriber
	public function findAllSubscriber()
	{
		$sql=$this->db->query("select * from `user_login` ");
		return $fetch=$sql->fetchAll();
	}
	public function findTotalSubscriber()
	{
		$get_count=$this->db->query("select * from `user_login`");		
		return $get_count->rowCount();;
	}

	//Function End For Subscriber
	//Function Star For Sitare Star
	public function createSitareStar()
	{
		$name=$_POST['name'];
		$best_films=$_POST['bestfilms'];				
		$coverpic=$_FILES['coverpic']['name'];		
		$description=addslashes($_POST['descripion']);
		$insert=$this->db->query("INSERT INTO `sitare_star`(`coverpic`, `name`, `best_films`, `description`) 
		VALUES ('$coverpic','$name','$best_films','".$description."')");	
		move_uploaded_file($_FILES['coverpic']['tmp_name'],'../img/star/'.$coverpic);			
		if($insert)
		{		
		return "<h3 class='panel-title' style='color:green;'>Successfully Uploaded</h3>";	
		}
	}
	public function findAllSitareStar()
	{
		$sql=$this->db->query("select * from `sitare_star` ");
		return $fetch=$sql->fetchAll();
	}
	function findSpecificSitareStar($ssid)
	{	
      
		$show=$this->db->query("select * from `sitare_star` WHERE `id`='$ssid'");
		$singel=$show->fetchAll();
		return $singel[0];		
        		
	}
	function delSitareStr()
	{
		$id=base64_decode($_POST['sd']);
		$spsstd=$this->findSpecificSitareStar($id);			
		unlink('../img/star/'.$spsstd['coverpic']);
		$del=$this->db->query("DELETE FROM `sitare_star` WHERE `id`='$id' ");
		
		
	}

	//Function End For Sitare Star

}
$object=new main();
?>