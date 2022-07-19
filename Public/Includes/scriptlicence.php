
							<?php
								$expire = strtotime("03-02-2019");
								$today = strtotime("23-01-2019");
								$dif =  $expire-$today;
							   $days = abs(floor($dif/(60*60*24)));
								if ($today<$expire) {
									if ($days<30) {
										echo "<center><span class='label label-primary'> Your licence expire after<b> ".$days." </b>days</span><br><br><b>Thanks for Choosing @SpaceLine</b></center>";
									}
								}
								
								
								else {
									echo "<center><span class='label label-danger'> Your licence expired! Contact Support</span><br><br><b>Thanks for Choosing @SpaceLine</b></center>";
								}

							?>