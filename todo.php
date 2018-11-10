<html>
<head>
<style type="text/css">
		body{
		margin: 0;
		width: 100vw;
		height: 100vh;
		overflow: hidden;
	}
	header{
		width:100vw;
		height:7vh;
		color:red;
		border-bottom: 1px solid black;
	}

	.but{
		border-radius: 100%;
	    border:1px solid black;
	}
	.but:hover{
           cursor: pointer;
	}
	#todo{
		width:50vw;
		height: 90vh;
	}
	#list{
		width: 49vw;
		height: 90vh;
		position: absolute;
	}
	#list_inner{
		position: relative;
		
		margin-top: 5vh;
		margin-left: 3vw;
	}
	main div{
		display: inline-block;
	}
	.add_bttn{
		border-radius: 100%;
		border:0;
		height:7vh;
		width:7vh;
	}
	.add_bttn:hover{
		background-color: red;
	}
</style>
</head>

<body>
<script>
function add()
{
	var add_menu=document.getElementById('add_menu');
	add_menu.style.display="block";
	

}
function show_list()
{
	var list_text=document.getElementById('list_text');
	list_text.style.display="block";
}
function hide_list()
{
	var list_text=document.getElementById('list_text');
	list_text.style.display="none";
}


</script>
<header>
<center><h1>TODO</h1></center>
</header>
<main>
<div id="todo">

<?php
$con=mysqli_connect("localhost","root","","customized");
$query="select * from ToDo";
$res=mysqli_query($con,$query);

$list=array();
$i=0;
$list_arr=array();

while($result=mysqli_fetch_array($res))
{

	echo '<form name="todos" method="post">';
	if($result['todo_type']=="list")
	{
	echo '<input type="checkbox" name="cb[]" value="'.$result['sno'].'">'.$result['todo_title']." ".'<input type="submit" value="Expand"  class="expand" name="'.$result['sno'].'">'.'<br>'.'<br>';
	$list[$i]=$result['sno'];
	$list_arr[$i]=$result['todo_task'];

	$i=$i+1;   	
	}
	else if($result['todo_type']=="short")
	{
		echo '<input type="checkbox" name="cb[]" >'.$result['todo_title'].'<br>'.'<br>';
           
 	}

}

echo '<input type="submit" name="submit" value="delete">';
echo '</form>';
if(isset($_POST['submit']))
{
$name=$_POST['cb'];
foreach($name as $n)
{
	echo $n;
}
}

// *************************TO ADD A TODO *************************************php
?>
<br>

<button onclick="add()" class="add_bttn">+</button>
<br>
<form name="todos" method="post">
<div id="add_menu" style="display: none;"><input type="text" placeholder="Enter todo_title" name="todo_title">
<select id="select_dropdown" name="select_type"><option value="short" onclick="hide_list()">Short</option>
<option value="list"  onclick="show_list()">List</option>
</select>

<div id="list_text" style="display: none;">
	<textarea name="list_text" form="todos" placeholder="TYPE LIST SEPERATED BY , "></textarea>
</div>
<input type="submit" name="submit_menu" value="Done">
</div>
</form>

</div>

CREATE PHP CODE HERE IN THE NEXT WORK SESSION MR KAPIL .........    USE THE FORM ABOVE TO INPUT INTO TABLE


<div id="list">
<center>YOUR LISTS</center>
<div id="list_inner">
	<?php
	for($k=0;$k<$i;$k++)
	{
		if(isset($_POST[$list[$k]]))
		{

           $str=$list_arr[$k];
           $temp=2;
           echo "1) ";
           for($m=0;$m<strlen($str);$m++)
           {
             
           	if($str[$m]!=",")
           	echo $str[$m];
           else if($str[$m]==",")
           {
           	echo '<br>'.$temp.") ";
           $temp=$temp+1;
           }
           }
		}
	}
	?>
	</div>
</div>
</main>
</body>
</html>