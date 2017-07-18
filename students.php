<?php
include 'includes/variables.php';
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php echo "<title>".$organization." Students</title>"; ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<style>
.list {
  font-family:sans-serif;
}
td {
  padding:10px; 
  border:solid 1px #eee;
}

input {
  border:solid 1px #ccc;
  border-radius: 5px;
  padding:7px 14px;
  margin-bottom:10px
}
input:focus {
  outline:none;
  border-color:#aaa;
}
.sort {
  padding:8px 30px;
  border-radius: 6px;
  border:none;
  display:inline-block;
  color:#fff;
  text-decoration: none;
  background-color: #28a8e0;
  height:30px;
}
.sort:hover {
  text-decoration: none;
  background-color:#1b8aba;
}
.sort:focus {
  outline:none;
}
.sort:after {
  display:inline-block;
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid transparent;
  content:"";
  position: relative;
  top:-10px;
  right:-5px;
}
.sort.asc:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #fff;
  content:"";
  position: relative;
  top:4px;
  right:-5px;
}
.sort.desc:after {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #fff;
  content:"";
  position: relative;
  top:-4px;
  right:-5px;
}
			
			.url{
				
				width: 1px;
			}
</style>
		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
<?php
include 'includes/header.php';
?>
								</a>

<?php
include 'includes/nav.php';
?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Student Links</h1>
							
							

							
							
							
							
							
							
							
							
							
							
							<div id="users">
  <input class="search" data-sort="name" placeholder="Search" />

  <table>
    <!-- IMPORTANT, class="list" have to be at tbody -->
    <tbody class="list">
      <tr>
				<td class="url"><a href="https://google.com" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Unofficial Transcript</td>
      </tr>
      <tr>
				<td class="url"><a href="https://google.com" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Official Transcript</td>
      </tr>
      <tr>
				<td class="url"><a href="https://google.com" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Add or Drop Classes</td>
      </tr>
      <tr>
				<td class="url"><a href="https://google.com" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">My Grades</td>
      </tr>
			
			      <tr>
				<td class="url"><a href="https://www.baker.edu/media/ckfinder/files/Baker-Catalog.pdf" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Catalog</td>
      </tr>
			
						      <tr>
				<td class="url"><a href="https://www.baker.edu/media/ckfinder/files/Baker-Student-Handbook.pdf" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Student Handbook</td>
      </tr>
			
			<tr>
				<td class="url"><a href="https://my.baker.edu/ICS/My_Services/Student_Services_Center/Academics_Services/Class_Schedule/View_Class_Schedule.jnz" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">View Class Schedule</td>
      </tr>
			
						<tr>
				<td class="url"><a href="https://my.baker.edu/ICS/My_Services/Student_Services_Center/Academics_Services/Course_Information/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Course Information</td>
      </tr>
			
									<tr>
				<td class="url"><a href="https://my.baker.edu/ICS/My_Services/Student_Services_Center/Academics_Services/Degree_Audit/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Degree Audit</td>
      </tr>
			
												<tr>
				<td class="url"><a href="https://my.baker.edu/ICS/My_Services/Student_Services_Center/Academics_Services/Grade_Information/Course_History/" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a></td>
        <td class="name">Course History</td>
      </tr>
    </tbody>
  </table>

</div>
							
							
							
							
							
							
							
							
							
							
							
							
							
						</div>
					</div>

				<!-- Footer -->
<?php
include 'includes/footer.php';
?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
						<script src="assets/js/list.min.js"></script>
				
						<script>
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
							userList.sort('name', { order: 'asc' });
						</script>

	</body>
</html>