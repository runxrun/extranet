<div class="pb-3 <?php echo $value['column']; ?>">
	<div class="pb-0 fs-8">
		<span class="text-secondary"><?php echo $value['title']; ?></span>
		<?php if($value['mandatory']=='Y'){ echo '<span class="text-danger">*</span>'; } ?>						
	</div>
	<div>
		<?php
		if($value['readonly']=='Y'){$readonly = 'readonly';}else{$readonly = '';}
		if($value['disabled']=='Y'){$disabled = 'disabled';}else{$disabled = '';}
		switch(strtoupper($value['input_type']))
		{
			case "TEXT" : echo '
							<input 
								type="text" 
								class="form-control fs-7 rounded-0" 
								value="'.$value['input_value'].'"
								'.$readonly.' 
								'.$disabled.'>
							'; 
				break;
				
			case "NUMBER" : echo '
							<input 
								type="number" 
								class="form-control fs-7 
								rounded-0" 
								value="'.$value['input_value'].'"
								'.$readonly.' 
								'.$disabled.'>
							'; 
				break;
			case "SELECT" : echo '
							<select class="form-select fs-7 rounded-0" '.$readonly.' '.$disabled.'>';
							foreach($value['selection'] as $key2 => $value2)
							{
								echo '<option value="">'.$value2['data'].'</option>';
							} 
							echo '</select>';
				break;
		}
		?>
	</div>
</div>
