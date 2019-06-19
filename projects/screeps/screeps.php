<style>
	div.wrapper {
		padding: 15px;
		padding-left: 20px;
		font-family: 'Roboto', sans-serif;
		overflow: auto;
		height: 100%;
	}
	div.bar {
		width: 95%;
		height: 50px;
		margin-left: 2%;
		background: white;
		border-radius: 25px;
		box-shadow: 0px 1px 3px #c1c1c1;
	}
	div.progress {
		height: 100%;
		width: 30%;
		background: #FFA500;
		border-radius: 25px;
		box-shadow: 0px 1px 3px #c1c1c1;
	}
	div.goals {
		float: left;
	}
	p {
		color: #666666;
	}
	p.d {
		font-size: 25px;
		text-align: center;
	}
	p.t {
		font-size: 30px;
		text-decoration: underline;
		margin-left: 18px;
		margin-bottom: 20px;
	}
	p.g {
		font-size: 23px;
		margin: 0px;
		margin-left: 35px;
	}
	p.done {
		text-decoration: line-through;
		text-decoration-color: #dbdbdb;
	}
	a.link {
		transition: 0.5s;
		color: #666666;
		text-decoration: underline;
		text-decoration-color: #4286f4;
	}
	a.link:hover {
		transition: 0.5s;
		text-decoration-color: #2d5faf;
	}
	b {
		color: #FFA500;
	}
	img.sc {
		transition: 0.4s;
		float: right;
		max-width: 43%;
		min-height: 200px;
		margin-top: 45px;
		margin-right: 20px;
		box-shadow: 0px 0px 6px #686868;
		opacity: 1;
	}
	img.hide {
		transition: 0.4s;
		opacity: 0 !important;
	}
	div.room {
		float: left;
		width: 96%;
		margin-top: 30px;
		padding: 23px;
		margin-bottom: 20px;
	}
	div.glance {
		float: left;
		width: 100%;
	}
	p.lvl {
		float: left;
		background: #FFA500;
		font-size: 25px;
		height: 30px;
		width: 80px;
		padding: 0px;
		text-align: center;
		border-radius: 15px;
		margin: 0px;
		margin-left: 15px;
		color: white;
	}
	p.rt {
		float: left;
		font-family: 'Fira Sans', sans-serif;
		font-size: 25px;
		margin: 0px;
		font-weight: bold;
	}
	p.rp {
		margin: 0px;
		font-size: 30px;
	}
	div.bots {
		float: left;
		width: 100%;
		margin-top: 15px;
	}
	div.bot {
		box-shadow: 0px 0px 6px #b2b2b2;
		background: white;
		width: 200px;
		text-align: center;
		padding-top: 15px;
		float: left;
		margin-left: 20px;
		padding-bottom: 15px;
		margin-bottom: 20px;
	}
	p.name {
		font-size: 25px;
		margin: 0px;
	}
	div.parts {
		background: red;
		width: 90%;
		margin-left: 5%;
		margin-bottom: 10px;
		margin-top: 5%;
	}
	div.part {
		width: 20px;
		height: 20px;
		border-radius: 10px;
		float: left;
		margin: 5px;
		box-shadow: 0px 0px 3px #d3d3d3;
	}
	div.move {
		background: #bbc3ce;
	}
	div.work {
		background: #e8e010;
	}
	div.carry {
		background: #545454;
	}
	div.attack {
		background: #fc0509;
	}
	div.ranged_attack {
		background: #147fd1;
	}
	div.heal {
		background: #32d620;
	}
	div.claim {
		background: #c926f2;
	}
	div.tough {
		background: #ece8ed;
	}
	div.key {
		float: left;
		width: 100%;
		margin-top: 20px;
	}
	div.k {
		float: left;
		margin-right: 28px;
	}
	p.k {
		float: left;
		margin: 0px;
		margin-top: 2px;
		font-size: 20px;
	}
</style>
<script>
	var max = 2;
	var current =  0;
	var sc = document.getElementById("sc");
	var interval;
	var roll;
	function strt() {
		clearInterval(roll);
		roll = setInterval(next,8000);
	}
	function fade() {
		sc.className = "sc hide";
		interval = setInterval(show,400);
	}
	function show() {
		sc.src = "./projects/screeps/imgs/"+ current +".jpg";
		clearInterval(interval);
		sc.className = "sc";
	}
	function next() {
		if (current == max) {
			current = 0;
		} else {
			current++;
		}
		fade();
	}
	function back() {
		if (current == 0) {
			current = max;
		} else {
			current--;
		}
		fade();
	}
</script>
<div class="wrapper">
	<p class="d"><a class="link" href="https://screeps.com/">Screeps</a>
		is an online RTS game with the twist being that the user controls their units through code
		(Javascript), this means that the user creates AI for their units which is then executed in a persistant world. Because of this the users solution not only
		has to perform in an efficient manner but as you progress through the game the users solution must scale and work for all stages. One example of this is the
		unit creation which involves building each unit out of various parts that will dictate what that unit can do and how well it performs certain actions, this means
		that the user has to ensure their code is robust enough to provide efficient sized and correctly scaled units.
	</p>
	<div class="goals">
		<p class="t">Goals:</p>
		<p class="g"><b>✔</b> If restarted colony could reach current level automatically</p>
		<p class="g"><b>✔</b> Colony can defend itself from attacks</p>
		<p class="g"><b>✔</b> Builds units for their roles</p>
		<p class="g"><b>✔</b> Scales a units design based off available resources</p>
		<p class="g"><b>✔</b> Role fallback, units should always be working</p>
		<p class="g"><b>✖</b> Colony automatically builds roads between points of high traffic</p>
		<p class="g"><b>✖</b> Colony places down storage containers at strategic spots</p>
		<p class="g"><b>✖</b> Automated building of defences to secure room entrances</p>
		<p class="g"><b>✖</b> Automatic claiming of another room</p>
	</div>
	<img onload="strt()" id="sc" class="sc" src="./projects/screeps/imgs/0.jpg"/>
	<?php
		require("update.php");
		$rooms = $result["stats"]["rooms"];
		$creeps = $result["creeps"];
		foreach ($rooms as $room) {
			echo '<div class="room">';
				echo '<div class="glance">';
					echo '<p class="rt">Room '. $room[0] .'</p>';
					echo '<p class="lvl">Lvl: '. $room[1] .'</p>';
					echo '<div class="bots">';
						$keys = array_keys($creeps);
						foreach ($keys as $c) {
							$creep = $creeps[$c];
							 echo '<div class="bot">';
								echo '<p class="name">'. $c .'</p>';
								echo '<div class="parts">';
									foreach ($creep["build"] as $part) {
										echo '<div class="part '. $part["type"] .'"></div>';
									}
								echo '</div>';
						 	echo '</div>';
						 }
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
	?>
	<div class="key">
		<?php
			$types = array("move","carry","work","attack","ranged_attack","heal","claim","tough");
			foreach ($types as $type) {
				echo "<div class='k'>";
					echo "<div class='part ". $type ."'></div>";
					echo "<p class='k'>= ". $type ."</p>";
				echo "</div>";
			}
		?>
	</div>
</div>
