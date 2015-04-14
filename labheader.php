<!--<header>-->
<!--	<h1>Meyer Farms</h1>-->
<!--		<nav id="present">-->
<!--			<a href="index.php" id="home"-->
// <!--				<?php-->
// <!--					if($Name == "index.php"){-->
// <!--						echo "class = \"present\"";-->
// <!--					}-->
// <!--				?>-->
// <!--			>Home</a>-->
// <!--			<a href="farmhistory.php" id="farmhis"-->
// <!--				<?php-->
// <!--					if($Name == "farmhistory.php"){-->
// <!--						echo "class = \"present\"";-->
// <!--					}-->
// <!--				?>-->
<!--			>Farm History</a>-->
<!--			<a href="familyhappenings.php" id="farmhap"-->
// <!--				<?php-->
// <!--					if ($Name == "familyhappenings.php"){-->
// <!--						echo "class = \"present\"";-->
// <!--					}-->
// <!--				?>-->
<!--			>Family Happenings</a>-->
<!--			<a href="contactinformation.php" id="contact"-->
<!--				<?php-->
// <!--					if ($Name == "contactinformation.php"){-->
// <!--						echo "class = \"present\"";-->
// <!--					}-->
// <!--				?>-->
<!--			>Contact Info</a>-->
<!--		</nav>-->
<!--</header>-->
<header>    
    <nav id = "active">
        <ul class="nav masthead-nav">
            <li><a href="index.php" id = "home"
            	<?php
            		if($Name == "index.php"){
            			echo "class = \"active\""; 
            		}
            	?>
            >Home</a></li>
            <li><a href="about.php" id = "about"
            	<?php
            		if($Name == "about.php"){
            			echo "class = \"active\"";
            		}
            	?>
            >About</a></li>
            <li><a href="location.php" id = "location"
            	<?php
            		if($Name == "location.php"){
            			echo "class = \"active\"";
            		}
            	?>
            >Location</a></li>
            <li class="pull-right"><a href="menu.php" id = "menu"
            	<?php
            		if($Name == "menu.php"){
            			echo "class = \"active\"";
            		}
            	?>
            >Menu</a></li>
            <li class="pull-right"><a href="form.php" id = "form"
            	<?php
            		if($Name == "form.php"){
            			echo "class = \"active\"";
            		}
            	?>
            >Review</a></li>
        </ul>
    </nav>
</header>