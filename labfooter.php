<!--<footer id = "footer">-->
<!--	&copy; Logan J. Meyer. Winter 2015.-->
// <!--	<?php-->
// <!--		if(file_exists($Name)){-->
// <!--	    	echo "$Name was last modified: " . date ("F d Y H:i:s.", filemtime($Name));-->
// <!--		}-->
// <!--	?>-->
<!--</footer>-->
<footer id = "footer">
	<div class="mastfoot">
        <div class="inner">
            <p>Redesigned by Henry Majoros, Logan Meyer, Kenny Heindel and Benjamin Segal</p>
        </div>
    </div>
    <?php
		if(file_exists($Name)){
	    	echo "Last modified: " . date ("F d Y", filemtime($Name));
		}
	?>
</footer>