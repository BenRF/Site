<html>
	<head>
		<?php
			session_start();
			$id = session_id();
			$projects = scandir("projects/");
			//https://realfavicongenerator.net/, for when you have an actual icon
		?>
		<title>Ben R F</title>
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#4287f5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="styles.css">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto&display=swap" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="stuff.js"></script>
		<script>
			window.onscroll = scrollCheck;
			window.onfocus = resume;
			window.onblur = pause;

		</script>
	</head>
	<body id="b" onload="start()">
		<div id="header" class="header attached">
			<a href="javascript:void(0)" onclick="sTo(0)"> <p id="t1" class="title attachedT">Ben Ramsay Foster</p> </a>
			<a href="javascript:void(0)" onclick="sTo(3)"> <p id="t2" class="header c attachedH">Contact</p> </a>
			<a href="javascript:void(0)" onclick="sTo(2)"> <p id="t3" class="header p attachedH">Projects</p> </a>
			<a href="javascript:void(0)" onclick="sTo(1)"> <p id="t4" class="header a attachedH">About</p> </a>
			<div id="scroll" class="scroll underTitle"></div>
		</div>
		<div id="main" class="typingLock">
			<?php
				echo file_get_contents("./drawings/desk.php");
			?>
			<p id="cmd2" class="cmd"></p>
		  <p id="cmd1" class="cmd">Site:/> <b id="bl" class="blink"> _</b></p>
		</div>
		<div id="about" class="aboutLock">
			<div class="about">
				<img class="self" src="./self.jpg"/>
				<p class="about">
					I am currently studying Computer science at the University of Essex and am just about to start my third and final year of the course.
				</p>
				<p class="about">
					My main interest in coding comes from the enjoyment of finding solutions regardless of if it's getting a complex feature or creating a
					clear design for a user to interact with.
				</p>
				<p class="about">
					I believe that thanks to this I have been able to create a website that portrays my passion for design and my attention to detail while
					sufficiently
				</p>
				<p class="about">
					While my main focus is to finish my degree, I am always looking for and are more than welcome to opportunities that can help me gain more experience outside of university.
				</p>
			</div>
		</div>
		<div id="projects" class="projectLock">
			<?php
			$p = scandir("./projects");
			$count = 0;
			foreach ($p as $project) {
				if ($count > 1) {
					$col = file_get_contents("./projects/".$project."/col.txt");
					echo '<a href="https://github.com/BenRF/BenM-app-">';
					echo '<div class="card">';
						echo '<div class="title">';
							echo file_get_contents("./projects/".$project."/icon.svg");
							echo '<p class="projectTitle" style="color: '.$col.'">'.$project.'</p>';
						echo '</div>';
						echo '<img src="./projects/'.$project.'/base.jpg" class="card"/>';
						echo '<p class="projectDesc">'. file_get_contents("./projects/".$project."/desc.txt") .'</p>';
					echo '</div>';
					echo '</a>';
				}
				$count = $count + 1;
			}
			?>
		</div>
		<div id="contact" class="contactLock">
			<div id="benMApp" class="benM">
				<div class="msg">
					<input class="msg" type="text"/>
				</div>
			</div>
			<div class="details">
				<div class="detail">
					<img class="detail" src="icons/mail.png" height="80" width="80">
					<a href="mailto:benramsayfoster@gmail.com"><p class="detail link2" style="color: #e75a4d !important;">benramsayfoster@gmail.com</p></a>
				</div>
				<div class="detail">
					<img class="detail" src="icons/git.png" height="80" width="80">
					<a href="https://github.com/BenRF"><p class="detail link">BenRF</p></a>
				</div>
				<div class="detail">
					<img class="detail" src="icons/discord.png" height="80" width="80">
					<p class="detail" style="color: #7289da !important;">B3athunter #9950</p>
				</div>
			</div>
		</div>
	</body>
</html>
