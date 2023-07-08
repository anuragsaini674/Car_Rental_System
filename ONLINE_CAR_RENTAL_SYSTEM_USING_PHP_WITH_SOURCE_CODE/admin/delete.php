<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM book WHERE book_id = '$id'";
	$result = $conn->query($query);
	if($result === true){
		echo "<script type = \"text/javascript\">
			alert(\"Request Successfully Deleted\");
			window.location = (\"client_requests.php\")
		</script>";
	?>
		
	<?php
	}
?>
