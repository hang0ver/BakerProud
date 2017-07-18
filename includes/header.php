<a href="./" class="logo">
<?php
									if(isset($imagelogo))
									{
										echo "<img src='$imagelogo'>";
									}else{
									?>
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">
									<?php 
										echo $organization;
									}
									?>