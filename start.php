<html>
<head>
<style>
body{
	margin: 0;
	
	background:linear-gradient(45deg,#43cea2,#185a9d);
	background-repeat: none;
	height: 100vh;
	width: 100vw;
}
header{
	width:100vw;
    height:10vh;
    background-color: #004e92;
    color: white;

}
#welcome{
  width:100vw;
  text-align: right;
  
}
#weather{
  width:100vw;
}
#options{
	margin:0px;
	width:100vw;
	height: 10vh;
	background-color: #004e92;
}
#opt{
    float:left;
    margin-left:0;


}
#show-page{
	width:100vw;
	height:70vh;
	position: absolute;
	font-size: 1.8em;
	color: white;
	padding: 4vh;
}
#weather1{
       color:white;
       font-size: 1.4em;
       text-shadow: 1px 2px 3px red;
}
#anim{
	width: 100vw;
	height:80vh;
}
.bubble{
	display: inline-block;
	margin-right:7vw;
}
.bttn{
	width:20vw;
    border:1px solid black; 
	margin-left: 0;
	border-radius: 10px;


}
#column{
	width:100vw;
	height:10vh;
	margin:0;
	background-color:  #19547b;
	

}
#content{
	margin:3vh;
	padding:3vh;
	width:100vw;
    height: 50vh;
    word-wrap: normal;
    overflow: auto;
    border:1px dotted black;
}
#opt li{

	display: inline-block;
	
}

#eye{
	width: 100vw;
	height: 80vh;

}

</style>
</head>
<body>
<script>
function display_none()
{
 	var news=document.getElementById('news');
    var eye=document.getElementById('show_page');
	news.style.display="none";
     eye.style.display="none";

}
function news_disp()
{
	display_none();
	var news=document.getElementById('news');
    news.style.display="block";
    
        
}
</script>



<header>
<div id="welcome">WELCOME MR KAPIL</div>
<div id="weather"><center>ENJOY YOUR DAY</center></div>
</header>

<div id="options">
<ul type="none" id="opt">
<li><button class="bttn" name="news" onclick="news_disp()"><center>NEWS</center></button>
<li><button class="bttn" name="stock" onclick="stock_disp()"><center>STOCK MARKET</center></button>
<Li><button class="bttn" name="contact" onclick="contact_disp()"><center>CONTACT DIRECTORY</center></button>
<Li><button class="bttn" name="todo" onclick="todo_disp()"><center>TO DO</center></button>
</ul>
</div>
<div id="show_page">
<center>
<?php
@$html = file_get_contents("https://www.wunderground.com/weather/in/noida");// for getting the htmlusing @ on starting to avoid warnings 
 // for getting the htmlusing @ on starting to avoid warnings 
 $link= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $link->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$link_xpath = new DOMXPath($link);
$temp = $link_xpath->query('//div[@class="feels-like"]/span[@class="temp"]');
$image = $link_xpath->query('//div[@class="condition-icon small-6 medium-12 columns"]/img');
$condition = $link_xpath->query('//div[@class="condition-icon small-6 medium-12 columns"]/p');
echo "<div id='weather1'>";
if($temp->length>0)
{
	$x=$temp[0]->nodeValue;
	$f=(int)$x;
	$c=($f-32)*5/9;
	$c=(int)$c;
	echo $c." Celsius";
	}
	
if($image->length>0)
{
	$n=$image[0]->getAttribute('src');
    echo "<img src='".$n."' height='70px' width='70px'></img>"."<br>"."<br>";
}
if($condition->length>0)
{
	echo "The weather outside is "."<b>".$condition[0]->nodeValue."</b>".". Enjoy your Day";
}
echo "</div>";
}

?>
</center>
</div>




<div id="news" style="display: none;">
<div id="column">
<ul type="none" id="opt">
<form name="news" method="post">
<li><button class="bttn" name="india"><center>INDIA</center></button>
<li><button class="bttn" name="sport"><center>SPORTS</center></button>
<li><button class="bttn" name="world"><center>WORLD</center></button>
<li><button class="bttn" name="business"><center>BUSINESS</center></button>
</form>
</ul>
</div>
<div id="content">

<?php
function india()
{
	@$html = file_get_contents("https://timesofindia.indiatimes.com/india");// for getting the htmlusing @ on starting to avoid warnings 
 @$html = file_get_contents("https://timesofindia.indiatimes.com/india");// for getting the htmlusing @ on starting to avoid warnings 
 $link= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $link->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$link_xpath = new DOMXPath($link);
$image = $link_xpath->query('//div[@id="c_02"]/div[@id="c_0201"]/div[@id="c_wdt_list_1"]/ul[@class="top-newslist clearfix"]/li/span[@class="w_tle"]/a');
if($image->length>0)
{
	echo"<script>news_disp();</script>";
	foreach($image as $i)
	{


	$x=$i->getAttribute('title');
	echo "->".$x."<br>"."<br>";
}
	}
	
}

else {
	echo "------! SORRY NO INTERNET CONNECTION !------";
}
}

function world()
{
	@$html = file_get_contents("https://timesofindia.indiatimes.com/world");// for getting the htmlusing @ on starting to avoid warnings 
  
 $link= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $link->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$link_xpath = new DOMXPath($link);
$image = $link_xpath->query('//div[@id="c_01"]/div[@id="c_0101"]/div[@id="c_wdt_list_1"]/ul[@class="cvs_wdt clearfix"]/li/span[@class="w_tle"]/a');
if($image->length>0)
{
	echo"<script>news_disp();</script>";
	foreach($image as $i)
	{


	$x=$i->getAttribute('title');
	echo "->".$x."<br>"."<br>";
}
	}
	
}

else {
	echo "------! SORRY NO INTERNET CONNECTION !------";
}
}

function business()
{
	@$html = file_get_contents("https://timesofindia.indiatimes.com/business");// for getting the htmlusing @ on starting to avoid warnings 
  
 $link= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $link->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$link_xpath = new DOMXPath($link);
$image = $link_xpath->query('//div[@id="c_01"]/div[@id="c_0101"]/div[@id="c_wdt_list_2"]/ul[@class="cvs_wdt clearfix"]/li/span[@class="w_tle"]/a');
if($image->length>0)
{
	echo"<script>news_disp();</script>";
	foreach($image as $i)
	{


	$x=$i->getAttribute('title');
	echo "->".$x."<br>"."<br>";
}
	}
	
}

else {
	echo "------! SORRY NO INTERNET CONNECTION !------";
}
}

function sports()
{
	@$html = file_get_contents("https://timesofindia.indiatimes.com/sports");// for getting the htmlusing @ on starting to avoid warnings 
 @$html = file_get_contents("https://timesofindia.indiatimes.com/sports");// for getting the htmlusing @ on starting to avoid warnings 
 $link= new DOMDocument();
libxml_use_internal_errors(TRUE);//disable libxml errors
if(!empty($html)){//check whether the html is returned or not
              $link->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$link_xpath = new DOMXPath($link);
$image = $link_xpath->query('//div[@id="c_000102"]/div[@id="c_00010201"]/div[@id="c_sport_wdt_1"]/div[@class="news-section clearfix"]/div[@class="top-newslist small"]/div[@class="sports-home-videos"]/ul[@class="cvs_wdt clearfix"]/li/span[@class="w_tle"]/a');
if($image->length>0)
{
	echo"<script>news_disp();</script>";
	foreach($image as $i)
	{


	$x=$i->getAttribute('title');
	echo "->".$x."<br>"."<br>";
}
	}
	
}
else {
	echo "------! SORRY NO INTERNET CONNECTION !------";
}
}


if(isset($_POST['india']))
{
    india();
}
else if(isset($_POST['sport']))
{
   sports();
}
else if(isset($_POST['world']))
{
   world();
}
else if(isset($_POST['business']))
{
   business();
}
?>
</div>
</div>


</body>
</html>