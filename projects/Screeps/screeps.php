<script>
//  0  1  2
//  7  C  3
//  6  5  4

var screeps = [
  [0,[3,3,5,4,5,5,4,5,5,5,6,5,5,5,6,6,7,1,1,1,1,1,1,1,1,1,1,1,1,1,1]],
  [0,[3,4,3,4,3,3,3,3,4,3,3,2,3,2,2,2,1,2,2,3,3,5,4,4,4,6,7,7,7,7,7,7,7,6,7,7,7,7,7,7,7,0,7,7,7,7,7,7,1]],
  [0,[5,4,4,3,4,4,3,3,2,3,3,3,3,3,2,2,1,1,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7]]
];
var movement;
function screep() {
  for (var i = 1; i <= screeps.length; i++) {
    var s = document.getElementById("screep" + i);
    var currentMove = screeps[i-1][0];
    var p = screeps[i-1][1][currentMove];
    if (p == 0) {
      screepUp(s);
      screepLeft(s);
    } else if (p == 1) {
      screepUp(s);
    } else if (p == 2) {
      screepUp(s);
      screepRight(s);
    } else if (p == 3) {
      screepRight(s);
    } else if (p == 4) {
      screepDown(s);
      screepRight(s);
    } else if (p == 5) {
      screepDown(s);
    } else if (p == 6) {
      screepDown(s);
      screepLeft(s);
    } else if (p == 7) {
      screepLeft(s);
    }
    if (currentMove == screeps[i-1][1].length) {
      screeps[i-1][0] = 0;
    } else {
      screeps[i-1][0] = screeps[i-1][0] + 1;
    }
  }
}

function screepLeft(screep) {
  var currentPos = screep.style.left;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.left = parseInt(currentPos,10) - 25;
}

function screepRight(screep) {
  var currentPos = screep.style.left;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.left = parseInt(currentPos,10) + 25;
}

function screepUp(screep) {
  var currentPos = screep.style.top;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.top = parseInt(currentPos,10) - 25;
}

function screepDown(screep) {
  var currentPos = screep.style.top;
  currentPos = currentPos.substring(0, currentPos.length - 2);
  screep.style.top = parseInt(currentPos,10) + 25;
}
</script>
<style>
    div.statView {
        width: 50%;
        height: 95%;
        float: left;
        margin-left: 50px;
    }
    p.screepDesc {
        color: #7a7a7a;
        width: calc(40% - 50px - 40px);
        font-size: 1.2em;
        float: left;
        margin-left: 40px;
    }
    p.screepTitle {
        font-weight: bold;
    	color: #1c1c1c;
    	font-size: 2em;
        float: left;
        margin-top: 35px;
        margin-left: 20px;
    }
    div.sicon svg {
    	height: 50px;
    	width: 50px;
    	margin: 0px;
    	padding: 0px;
        margin-top: 30px;
    	margin-left: 40px;
        float: left;
    }
    div.stat {
        width: 33%;
        height: 50%;
        float: left;
    }
    p.stat {
        text-align: center;
        color: #7a7a7a;
        font-size: 23px;
        margin-top: 45px;
    }
    p.statVal {
        text-align: center;
        color: #7a7a7a;
        font-size: 45px;
        margin-top: 5px;
    }
</style>
<div class="project">
    <div class="statView">
        <?php
            $stats = ["Room count","Avg room lvl","Unit count", "Avg unit cost"];
            foreach ($stats as $stat) {
                echo '<div class="stat">';
                echo '<p class="stat">'. $stat .'</p>';
                echo '<p class="statVal">2</p>';
                echo '</div>';
            }
        ?>
    </div>
    <div class="Sicon">
      <?php
        echo file_get_contents("./projects/screeps/icon.svg");
      ?>
    </div>
    <p class="screepTitle" style="color: #542FBF;">Screeps</p>
    <p class="screepDesc">
        An online game based around programming, a fun passtime between projects to
        keep me
    </p>
  </div>
</div>
