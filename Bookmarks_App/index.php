<?php
	// START SESSION
	session_start();

	if(isset($_POST['name'])) {
		if(isset($_SESSION['bookmarks'])) {
			$_SESSION['bookmarks'][$_POST['name']] = $_POST['url'];
		} else {
			$_SESSION['bookmarks'] = Array($_POST['name'] => $_POST['url']);
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'delete') {
		unset($_SESSION['bookmarks'][$_GET['name']]);
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bookmarks App</title>
		<link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
		<style>
			.delete {color: #fff;}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		    <div class="container">
		        <div class="navbar-header">
		        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
		          	</button>
		          	<a class="navbar-brand" href="#">Bookmarks App</a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		        	<ul class="nav navbar-nav">
		            	<li><a href="index.php">Home</a></li>
		          	</ul>
		          	<ul class="nav navbar-nav navbar-right">
		            	<li><a href="index.php?action=clear">Clear All</a></li>
		          	</ul>
		        </div><!--/.nav-collapse -->
		    </div>
		</nav>
		<!-- NAVIGATION END -->

		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
						<div class="form-group">
							<label>Website Name</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label>Website URL</label>
							<input type="text" class="form-control" name="url">
						</div>
						<input type="submit" value="Submit" class="btn btn-default">
					</form>
				</div>
				<div class="col-md-5">
					<?php if(isset($_SESSION['bookmarks'])) : ?>
						<ul class="list-group">
							<?php foreach($_SESSION['bookmarks'] as $name => $url) : ?>
								<li class="list-group-item">
								<a href="<?php echo $url; ?>"><?php echo name; ?> 
								<a class="delete" href="index.php?action=delete&name=<?php echo name; ?>">[X]</a>
								</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- CONTENT END -->
	</body>
</html>
