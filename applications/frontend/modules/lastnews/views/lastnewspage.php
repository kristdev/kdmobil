<!--- ########### ## -->
<div class="span6">
	<div class="border-left-color">
		<h3 class="standart-h3title"><span>Last news</span></h3>
		<table class="table table-hover">
			<tbody>
				<?php 
				if(isset($lastnews)){
					foreach($lastnews->result() as $table){
				?>
					<tr>
						<td>
						<div class="nowrap small-text"><?php echo $table->date; ?></div>
						</td>
						
						<td>
							<i class="fa-icon-comments-alt">&nbsp;</i>
						</td>
						<td>
						<a href="#"><strong><?php echo $table->title; ?></strong></a>
						<div class="italic"><?php echo $table->content; ?></div>
						</td>
					</tr>	
				<?php		
					}
				} 
				?>
			</tbody>
		</table>
	</div>
</div>
<!--- ########### ## -->