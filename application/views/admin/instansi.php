
				<h2>Data Instansi</h2><?php //judul table ?>
				
				<div class="entry">
					<div class="sep"></div>
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col">No</th>
                            <th scope="col">Aksi</th>
							<th scope="col">Instansi</th>
							<th scope="col">Deskripsi</th>
						</tr>
					</thead>
						
					<tbody>
                     <?php $no=1; ?> 
                     <?php foreach($instansi as $in) { ?>
						<tr>
							<td class="align-center"><?= $no++; ?></td>
							
							<td>
								<a href="<?= base_url(); ?>Admin/editInstansi/<?= $in->id; ?>" class="table-icon edit" title="Edit">Edit</a>
								<a onClick="javascript: return confirm('Are You Sure to Delete Data?')" href="<?= base_url(); ?>Admin/deleteInstansi/<?= $in->id; ?>" class="table-icon delete" title="Delete" onclick="return confirm('apakah anda yakin data ber id=<?php //ubah ?> ingin dihapus ?') ">Delete</a>
							</td>
							<td><?= $in->instansi; ?></td>
							<td><?= $in->deskripsi; ?></td>
							
						</tr>
				   <?php } ?>
					</tbody>
				</table>
				<div class="entry">
                    
					<div class="sep hide"></div>		
				  <a class="button add " href="<?= base_url(); ?>Admin/addInstansi">Add new Instansi</a>
				
            
            
	
