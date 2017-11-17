<div class="row row-centered">
	<div class="col-md-12">
		<div class="" style="width: 25%; margin-left: auto; margin-right: auto;">
			<select id="country_select" class="form-group form-control">
	            <option value="">select a country</option>	            	
            		<?php foreach ($countries as $country) : ?>
                		<option value="<?php echo $country->ISO_code; ?>">
                		<a href=".target-content<?php echo $country->ISO_code; ?>"><?php echo $country->name; ?><code>:target</code></a>

                		<div class="target-content<?php echo $country->ISO_code; ?>">
  							<a href="#" class="close<?php echo $country->ISO_code; ?>">Close</a>
  								<div class="target-inner<?php echo $country->ISO_code; ?>">
    								<h2><?php echo $country->name; ?></h2>
    								This modal is open because its id is the target in the <code>href</code> of the link. You can style an element's target state with the selector <code>:target</code>. When this modal is toggled, an invisible link with <code>href="#"</code> is positioned absolutely behind the modal content. Clicking it will change the target and thus close the modal.

    								<style type="text/css">
										.target-content<?php echo $country->ISO_code; ?> {  
										  position: fixed;
										  top: 0;
										  right: 0;
										  bottom: 0;
										  left: 0;
										  pointer-events: none;  
										  opacity: 0; 
										  transition: opacity 200ms;
										}
										  
										.target-content<?php echo $country->ISO_code; ?>:target {
										    pointer-events: all;   
										    opacity: 1;
										}
										      
										.target-inner<?php echo $country->ISO_code; ?> {
										    position: absolute;
										    display: block;
										    padding: 48px;
										    line-height: 1.8;
										    width: 70%;
										    top: 50%;
										    left: 50%;
										    transform: translateX(-50%) translateY(-50%);
										    box-shadow: 0px 12px 24px rgba(0,0,0,0.2);
										    
										    background: white;
										      
										    color: #34495E;
										}

										.target-inner<?php echo $country->ISO_code; ?> h2{ 
										   margin-top: 0
										}
										    
										.target-inner<?php echo $country->ISO_code; ?> code {
										      font-weight: bold
										}

										a .close<?php echo $country->ISO_code; ?> {
										    content: '';
										    position: absolute;
										    top: 0;
										    right: 0;
										    bottom: 0;
										    left: 0;
										    background-color: #34495E;
										    opacity: 0.5;
										    transition: opacity 200ms;
										}

										a .close<?php echo $country->ISO_code; ?>:hover {
										      opacity: 0.4
										}

								</style>

    
 								</div>
						</div>

                		</option>
           			<?php endforeach; ?>        
	        </select>
	    </div>

		<div class="col-md-12">
			<div id="world-map" class="world-map" style="width: 90%; height: 900px; margin-left: auto; margin-right: auto;">	
			</div>
		</div>	

	</div>
</div>

 <script type="text/javascript">
	$('#world-map').vectorMap({map: 'world_mill'});
</script>




