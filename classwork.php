<!DOCTYPE html>
<html>
<head>
	<title>OUR FIRST PROJECT</title>
	<meta keyword="author" content="Augustine Ogiza"/>
	<meta keyword="description" content="webdesign, programming, ict, Abuja">
	
</head>
<body>
<style type="text/css">
	p{ color: magenta;}
	p#first {color: white;
		background-color: green;
width: 200px;
height: 40px;
 border: 2px solid red;
 padding: 20px 70px;
 margin: 20px auto;

	}
  p.block {display: inline;
  color: white;
		background-color: green;

overflow: scroll;

}
  span.inline{display: block;}
  /*h3 { display: none;}*/
  h3 {visibility: hidden;}
table, td , caption{ border: 1px solid black;

}
table, td {border-collapse: collapse;
border: 2px solid tomato;
padding: 40px;
margin: 0px auto;}

table thead tr td {
font-weight: 700;
text-transform: uppercase;
color: white;
background-color: limegreen;

}

caption { text-transform: uppercase;
text-align: center;}

div#form { width: 400px;
	margin: 0px auto;
 
}
form div {
	margin-top: 20px;
}


</style>
<h1>I am a heading ONE element</h1>
	<h2>I am a heading TWO element</h2>
	<h3>I am a heading THREE element</h3>
	<h4>I am a heading FOUR element</h4>
	<h5>I am a heading FIVE element</h5>
	<h6>I am a heading SIX element</h6>
	<p style="color:red; display:inline">I am a paragraph</p>

<h2>My TODO LIST FOR TODAY</h2>
<p>Here is my plan for today</p>
<ol><li> Go to the market</li>
<li>Subscriber for DSTV</li>
<li>Refill Gas</li></ol>
<ul><li>Go home</li>
<li>Eat</li></ul>
<p class="block">I am a block level element</p><p class="block"> I am also block level</p>
<span class="inline">I am inline in nature</span>
<span class="inline">me too!</span>
<p id="first" class="success">Today is a good day</p>

<table>
<caption>Names of Staff</caption>
	<thead><tr><td>S/N</td><td>Name</td><td>Phone</td><td>State</td></tr></thead>
	<tbody>
	<tr>
	<td>1.</td>
	<td>Jane Doe</td>
	<td>0814103216</td>
	<td>Delta</td>
	</tr>
	
	<tr>

	<td>2.</td>
	<td>John Fax</td>
	<td>0804431102</td>
	<td>Delta</td>

	</tr></tbody>

</table>
<br />
<div id="form">
<form method="POST" action=""><div> <label>Staff Name : 

<input type="text" name="staffname" placeholder="Enter Surname First"/> </label></div>
<div> <label>Date Of Birth : 

<input type="date" name="dateofbirth" placeholder="Enter Surname First"/> </label></div>
<div>
<label>
Username : <input type="text" name="username" autocomplete="off" /></label></div>
<div>
<label>
	Password : <input type="password" name="password" /></label>

</div>
<div> <label>State : <select name="state"> <option selected value="empty">Select State</option>
<option value="1">Abia</option><option value="2"> Adamawa</option>
<option value="3"> Edo</option><option value="4">Zamfara</option></select></label></div>
<div>

Network Provider : <label> MTN <input type="radio" name="np"/></label>
<label> GLO <input type="radio" name="np"/></label>
<label> AIRTEL <input type="radio" name="np"/></label>

</div>

<div>

Prefered Contact : <label>Phone <input type="checkbox" name="phone" /></label>
<label>Email <input type="checkbox" name="email" /></label>
<label>SMS<input type="checkbox" name="sms" /></label>
</div>
<div><label>Upload Passport : <input multiple type="file" name="passport"/ ></label></div>
<div>

<label> Address: <textarea name="address">
	

</textarea>

</label>

</div>

<div>

<input type="submit" value="Submit Form" />

</div>

</form>
</div>
</body>
</html>