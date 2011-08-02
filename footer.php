		<div class="clear"></div>
    </div><!-- #main -->
    
    <?php
    
    // action hook for placing content above the footer
    simplecart_abovefooter();
    
    ?>    

	<div id="footer">
    
        <?php
        
        // action hook creating the footer 
        simplecart_footer();
        
        ?>
        
	</div><!-- #footer -->
	
    <?php
    
    // actio hook for placing content below the footer
    simplecart_belowfooter();
    
    ?>  

</div><!-- #wrapper .hfeed -->

<?php 

// calling WordPress' footer action hook
wp_footer();

// action hook for placing content before closing the BODY tag
simplecart_after(); 

?>

</body>
</html>