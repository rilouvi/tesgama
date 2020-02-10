            	    <h2>Add Instansi</h2>
				   <p>Add Data Instansi on Gamatechno</p>
                    <form action="<?php echo base_url('Admin/addInstansiSubmit'); ?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="id" value="" />
                    
					<div class="element" >
						<label for="title">Instansi Name <span class="red">(required)</span></label>
						<input id="Instansi_name" name="Instansi_name" class="text" 
                        value="" />
					</div>
                    <div class="element">  
                        <label for="description"> Description <span class="red">(required)</span></label>
						<textarea class="textarea" name="Instansi_description" rows="10" ></textarea>
                    </div>
                    
					<div class="entry">
						<button type="submit" class="add">Save </button> <button class="reset">Reset</button>
					</div>
				</form>