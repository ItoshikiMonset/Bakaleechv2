<?php
if (isset($_POST['cmd'])) {
	$cmd1=$_POST["cmd"];
	$radioval=$_REQUEST["myradio"];
	$rm1=$_POST["rename1"];
	$rm2=$_POST["rename2"];
}
// zip cpmmand :- zip -r name.zip folder_name_to be zipped
// unzip command:- unzip name.zip -d folder_name_where_to_be_zipoped
// rar command:- rar -a name.rar *
// unrar command:- unrar x name.rar directory_where_to_be_unrared
?>
<html>
<head>
<title>Shell</title>
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
	  $(function() {
	$("input[name='myradio']").click(function() {
	if ($("#remo").is(":checked")) {
  $("#text1").hide();
	} else {
	$("#text1").show();
	}
	});
	}); 
 
 
 $(function() {
	$("input[name='myradio']").click(function() {
	if ($("#rena").is(":checked")) {
	$("#text1").hide();
  $("#text2").show();
	} else {
	$("#text2").hide();
	}
	});
	});
	</script>
	</head>

<body>
<div class="container" align="center">
<form action="" method="post" class="form-group">
<b>Select File or Folder:</b><br>
<input type="radio" name="myradio" value="file"  ><b>Rclone File</b><br>
<input type="radio" name="myradio" value="folder" ><b>Rclone Folder</b><br>
<input type="radio" name="myradio" value="custom" ><b>Custom Command</b><br>
<label for="remo">
<input type="radio" name="myradio" value="rem" id="remo"><b>Remove</b><br>
</label><br>
<label for="rena">
<input type="radio" name="myradio" value="ren" id="rena"><b>Rename</b><br>
</label><br>
<div id="text1"> 
<b>Enter File/Folder Name:</b><br>
<input type="text" class="form-control" name="cmd" placeholder="File/Folder or Commad"><br>
</div>


<div id="text2" style="display: none">
<b>Real Name to Modified name</b>
<input type="text" class="form-control" name="rename1" placeholder="Real file Name">To
<input type="text" class="form-control" name="rename2" placeholder="Modified name you want"><br>
</div> 



<input type="submit" value="Exceute" class="btn btn-primary" name="execute"><br><br>
</form>

	
<?php if($radioval == "file") : ?>
<?php		$cmd=shell_exec("rclone move /app/files/" .$cmd1. " Gdrive:Bakaleech"); ?>
		<?php if ($cmd) : ?>
		<div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php endif; ?>
		
<?php elseif($radioval == "folder") : ?>
			<?php $cmd=shell_exec("rclone --ignore-existing skip copy /app/files/" .$cmd1. " Gdrive:Bakaleech/".$cmd1); ?>
		<?php	if ($cmd) : ?>
		<div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php endif; ?>
<?php elseif($radioval == "custom") : ?>
			<?php $cmd=shell_exec("cd && ".$cmd1); ?>
		<?php	if ($cmd) : ?>
		<div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php endif; ?>

<?php elseif($radioval == "rem") :?>
			<?php $cmd=shell_exec("rm -rf ./files/* "); ?>
		<?php	if ($cmd) : ?>
		<div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php endif; ?>

<?php elseif($radioval == "ren"): ?>
			<?php $cmd=shell_exec("mv ".$rm1." ".$rm2); ?>
		<?php	if ($cmd) : ?>
		<div class="pb-2 mt-4 mb-2">
            <h2> Output </h2>
        </div>
        <pre>
<?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?>
        </pre>
<?php endif; ?>

<?php elseif (!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST') : 
		{
			echo "Error kindly contact @hackedyouagain";
		}
?>
<?php endif; ?>
</div>
</body>
</html>
