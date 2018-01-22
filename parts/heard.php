
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
				  <img src="<?php echo $_SESSION['picture']?>" height= 100% width=5%/>
					<a href="#" class="brand">
						<small>
							<i class="icon-unlock-alt"></i>
							Welcome <?php echo $_SESSION['Last_Name']." ".$_SESSION['First_Name']."/ ".$_SESSION['Status'];?></small>
					</a><!--/.brand-->				
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
      