<!-- Stephanie Imperial,
  in web browser http://localhost/assign5/Startup.php
  index.php  Startup.php  StatCalc.php
   -->
   
<?php
print <<< HERE

<form action="StatCalc.php" method="POST";>
	Data(comma separated)<input type="text" name='data' ><br />
	Min<input type="checkbox" name=ops[] value='min' checked />
	Max<input type="checkbox" name=ops[] value='max' checked />
	Mean<input type="checkbox" name=ops[] value='mean'checked />
	Median<input type="checkbox" name=ops[] value='median' checked />
	Std Dev<input type="checkbox" name=ops[] value='std' checked /> <br>
		
<input type="submit" name='submit' value='Calculate'><br>
</form>
HERE;

?>
