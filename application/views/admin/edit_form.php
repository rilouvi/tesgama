<div>
	<?php //\\Ditambah pada EDIT by Rio//\\ ?>
	<?php if (isset($data_Instansi)) { ?>
       	    <h2>Edit Instansi</h2>
				   <p>Edit Data Instansi on This</p>
                    <form action="<?php echo base_url('Admin/editInstansiSubmit'); ?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="Instansi_id" value="<?php echo $data_Instansi->id; ?>" />
                    
					<div class="element" >
						<label for="title">Instansi Name <span class="red">(required)</span></label>
						<input id="Instansi_name" name="Instansi_name" class="text" 
                        value="<?php echo $data_Instansi->instansi; ?>" />
					</div>
                    
                    <div class="element">  
                    	
                        <label for="description"> Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="Instansi_description" rows="10" ><?php echo $data_Instansi->deskripsi; ?></textarea>
 
                    </div>

                    
					<div class="entry">
						<button type="submit" class="add">Save </button> <button class="cancel">Cancel</button>
					</div>
				</form>
		  </div>
		  <?php } ?>
		  <?php //\\END pada EDIT by Rio//\\ ?>