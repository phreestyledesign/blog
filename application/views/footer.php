	<div id="footer">
		<p><a href="http://phreestyledesign.com">PhreestyleDESIGN</a> &copy; 
	<?php 
		$startCopyRight='2007';
		if(date('Y') == $startCopyRight)
		{
			echo $startCopyRight;
		}
		else
		{
			echo $startCopyRight.'-'. date('Y');
		} 
		?> </p>

		
		<p></p>Code Igniter version <?php echo CI_VERSION; ?></p>
		
	</div><!-- end footer -->
	</div> <!-- end wrapper -->

</body><!-- end body -->

</html>