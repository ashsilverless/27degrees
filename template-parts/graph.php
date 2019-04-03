<div class="graph mb5">
	
<!-- ******************* Temperature Graph ******************* -->
	
<?php
	$temperatures = [0,3,6,9,12,15,18,21,24,27,30,33,36];
	
	$temperatures = array_reverse($temperatures);
	
	$months = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
?>
	
	<div class="wrapper-graph graph-temp mr10 mb5">
		
		<table class="climate-graph">
			
			<div class="graph-description primary">LOW TEMP (C)</div>
			
			<div class="graph-description secondary">HIGH TEMP (C)</div>
			
			<td class="y-values" max-value="<?php echo max($temperatures)?>" min-value="<?php echo min($temperatures)?>">
				
				<?php foreach($temperatures as $temperature): ?>
				
					<div><?php echo $temperature; ?></div>
					
				<?php endforeach; ?>
				
			</td>
			
			
			<?php foreach($months as $month):
				
				if(have_rows("climate_" . $month)):
				
					while (have_rows("climate_" . $month)):
					
						the_row();
						
						$low_temp  = get_sub_field('low_temp');
						
						$high_temp = get_sub_field('high_temp');
			?>
			
						<td class="month-item">
							
							<div class="wrapper-bars">
								
								<div class="first-bar bar" data-value="<?php echo $low_temp?>"><?php echo $low_temp?></div>
								
								<div class="second-bar bar" data-value="<?php echo $high_temp?>"><?php echo $high_temp?></div>
								
							</div>
							
							<div class="month"><?php echo $month?></div>
							
						</td>
						
					<?php endwhile; ?>
					
				<?php endif; ?>
				
			<?php endforeach; ?>
			
		</table>
	</div>
	
<!-- ******************* Temperature Graph END ******************* -->

<!-- ******************* Average Rainfall Graph ******************* -->

<?php
	$rainfall = [0,50,100,150,200,250,300,350,400];
	
	$rainfall = array_reverse($rainfall);
?>
	
	<div class="wrapper-graph graph-rain mb5">
		
		<table class="climate-graph">
			
			<div class="graph-description primary">AVERAGE RAINFALL (mm)</div>
			
			<td class="y-values" max-value="<?php echo max($rainfall)?>" min-value="<?php echo min($rainfall)?>">
				
				<?php foreach($rainfall as $value_rainfall): ?>
				
					<div><?php echo $value_rainfall; ?></div>
					
				<?php endforeach; ?>
				
			</td>
			
			
			<?php foreach($months as $month):
				
				if(have_rows("climate_" . $month)):
				
					while (have_rows("climate_" . $month)):
					
						the_row();
						
						$avg_rain = get_sub_field('av_rain');
			?>
			
						<td class="month-item">
							
							<div class="wrapper-bars">
								
								<div class="first-bar bar" data-value="<?php echo $avg_rain?>"><?php echo $avg_rain?></div>
								
							</div>
							
							<div class="month"><?php echo $month?></div>
							
						</td>
						
					<?php endwhile; ?>
					
				<?php endif; ?>
				
			<?php endforeach; ?>
			
		</table>
	</div>

<!-- ******************* Average Rainfall Graph END ******************* -->

<!-- ******************* Month Slider ******************* -->

	<div class="month-value pb1 low-temp">LOW TEMP (C)<span></span></div>
	
	<div class="month-value pb1 high-temp">HIGH TEMP (C)<span></span></div>
	
	<div class="month-value pb1 avg-rain">AVERAGE RAINFALL (mm)<span></span></div>

    <div class="month-slider mt2 mb2">
	    
        <input type="range" min="0" max="11" value="0">
        
        <div class="ticks">
	        
	        <?php
		        $count = 0;
		        foreach($months as $month): ?>
	        
		    		<div class="pt4" data-value="<?php echo $count; $count++;?>"><span><?php echo $month?></span></div>
		    	
		    <?php endforeach; ?>
		    
		</div>
		
    </div>

<!-- ******************* Month Slider END ******************* -->
	
</div><!--graph-->
