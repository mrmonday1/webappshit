<div class='row'>
	<div class='col-md-6' style="border-right: 1px solid black;">
		<img src= "<?php echo base_url("resources/{$res[0]->movie_poster}"); ?>" style="margin: 50px; margin-left:200px">		
	</div>
	<div  style="margin: 50px;">
	<p style="margin: 50px; padding-left: 20px"> <?php echo $res[0]->movie_desc; ?> </p>
	</div>
</div>
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
					 <div class='container'>
	                  <form method = 'POST' class='form-horizontal' action='<?php echo site_url('user/transaction')?>'>
	                  	<div class='form-group'>
	                    <div class='col-sm-3'>
	                      	<select id="branch" style="border-radius: 10px" name="title" class='form-control screening-ctrls'>
								<option value="" selected disabled>SELECT BRANCH</option>
								<option value="volvo">Valve</option>
								<option value="saab">Steam</option>
								<option value="vw">Origin</option>
								<option value="audi">EA</option>
							</select>
	                    </div>
	                    </div>
	                    <div class='form-group'>
	                    <div class='col-sm-3'>
	                      	<select style="border-radius: 10px" name="title" class='form-control'>
								<option value="" selected disabled>SELECT SCREENING</option>
								<option value="1">Valve</option>
								<option value="1">Steam</option>
								<option value="1">Origin</option>
								<option value="1">EA</option>
							</select>
	                    </div>
	                    </div>
	                    <div class='form-group'> 
	                    <div class='col-sm-offset-2 col-sm-10'>
	                      <button type='submit' class='btn btn-default'>Checkout</button>
	                    </div>
	                    </div>
	                  </form>
	                </div>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
	<script type="text/javascript">
		$('#branch').change(function(){
			var url;
			var data;
			
			$.ajax({
				method: 'post',
				url: url,
				data: data,
				async: false,
				dataType: 'json',
				success: function(response){
					
				},
				error: function(){
					alert('D:');
				}
			})
		});
	</script>