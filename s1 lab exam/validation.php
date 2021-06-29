<!DOCTYPE html>
<html>
<head>
	<title>purchase bill</title>
</head>
<style>
	body{
			background-color:pink;
			padding: 5px;
			margin-top: 100px;
            margin-bottom: 100px;
            margin-right: 150px;
            margin-left: 80px;
		}
	h1{
		text-decoration: underline;
		text-transform: uppercase;
		text-align: center;
		color: red;
	}
	table{
		width:500px;
		height:300px;
	}


	</style>

<script type="text/JavaScript">
		function valid()
		{
			var a=document.forms["myform"]["itemcode"].value;
			var b=document.forms["myform"]["itemname"].value;
			var c=document.forms["myform"]["type"].value;
			var d=document.forms["myform"]["price"].value;
			var e=document.forms["myform"]["quantity"].value;

			if(a=="")
			{
				alert("enter item code");
				return false;
			}
			if(isNaN(a)||a.length!=4)
			{
				alert("enter valid itemcode");
				return false;
			}
			if(b=="")
			{
				alert("enter itemname");
				return false;
			}
			if(!b.match(/^[a-z A-Z]+$/))
			{
				alert("enter valid item name");
				return false;
			}
			if(c=="")
			{
				alert("select type");
				return false;
			}
			if(d=="")
			{
				alert("enter price");
				return false;
			}
			if(isNaN(d))
			{
				alert("enter valid price");
				return false;
			}
			if(e=="")
			{
				alert("enter quantity");
				return false;
			}
			if(isNaN(e))
			{
				alert("enter valid quantity");
				return false;
			}
			
		}</script>
<body>
	<h1>Bill For A Purchase</h1>
	<form  action="p5.php"name="myform" method="post">
		
		<table border="5" align="CENTER" bordercolor="black">
		<tr>
			<th colspan="2">PURCHASE BILL</th>
		</tr>
		<tr>
		<th>itemcode</th> <th><input type="text" name="itemcode" size="40"> </th>
	    </tr>
	    <tr>
	    <th>itemname</th><th><input type="text" name="itemname" size="40"></th>
	    </tr>
	    <tr>
	    <th>type</th><th><input type="radio" name="type" value="fruits">Fruits
	   
	    <input type="radio" name="type" value="vegetables">Vegetables
	    <input type="radio" name="type" value="fruits">Food
	    <input type="radio" name="type" value="other">Other</th>
	    </tr>
	    <tr>
		<th>price</th><th><input type="text" name="price" size="40"></th>
	    </tr>
	    <tr>
		<th>quantity</th><th><input type="text" name="quantity" size="40"></th>
	    </tr>
	    <tr><th colspan="2"><CENTER><input type="button" onclick="valid()" value="validation">&nbsp;&nbsp;
	    	<input type="submit" value="Submit" name="s1">&nbsp;&nbsp;
	    	<input type="submit" value="Show details" name="s2">&nbsp;&nbsp;
			<input type="reset" value="Reset"></CENTER></th></tr>


	    </table>
	    </form>

</body>
</html>