<?PHP

/**
 * PHP SAMPLE CODE
 * FORM SUBMIT WEB
 * form.tpl.php file 
 */
?>
<html>
<head>
<title>
		FORM SUBMIT WEB
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />


<META http-equiv=Content-Type content="text-html; charset=UTF-8">
<META NAME="description" CONTENT="">
<META NAME="keywords"    CONTENT="">
<meta name="robots" content="noindex">


<link href="<?PHP echo $this->var['template']; ?>style.css" rel="stylesheet" type="text/css" media="screen"/>
 
</head>
<body>
<form id="FormSubmit" method="POST" action="index.php?p=submit">
	<h2>Form</h2>
	<div class="inputWrap <?PHP echo @$this->fclass['Name']; ?>">
		<span class="inputText">Name</span>
		<input type="text" id="Name" name="Name" value="<?PHP echo @$this->val['Name']; ?>">
		<span class="inputMessage"><?PHP echo @$this->msg['Name']; ?></span>
	</div>
	<div class="inputWrap  <?PHP echo @$this->fclass['FromNum']; ?>">
		<span class="inputText">From Number</span>
		<input type="text" id="FromNum" name="FromNum" value="<?PHP echo @$this->val['FromNum']; ?>">
		<span class="inputMessage"><?PHP echo @$this->msg['FromNum']; ?></span>
	</div>
	<div class="inputWrap  <?PHP echo @$this->fclass['ToNum']; ?>">
		<span class="inputText">To Number</span>
		<input type="text" id="ToNum" name="ToNum" value="<?PHP echo @$this->val['ToNum']; ?>">
		<span class="inputMessage"><?PHP echo @$this->msg['ToNum']; ?></span>
		
	</div>
	<div class="inputWrap  <?PHP echo @$this->fclass['Message']; ?>">
		<span class="inputText">Message</span>
		<textarea id="Message" name="Message" cols="25" rows="5"><?PHP echo @$this->val['Message']; ?></textarea>
		<span class="inputMessage"><?PHP echo @$this->msg['Message']; ?></span>
	</div>
	<div class="inputWrap">
		<input type="submit" id="submit" name="submit" value="Submit">
	</div>
</form>
<a class="aLink" href="index.php?p=messageList">Message List</a>
</body>
</html>