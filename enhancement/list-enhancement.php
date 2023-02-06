<?php 
include('includes/enhancement-title.php');  
include('includes/enhancement-filter.php');  
?>




<div class="table-responsive fs-8 border-top border-2 border-primary">
	<?php 
	$enchance = array(
		array(
            "enhancement" => "1-day Old Town Tuk Tuk Tour - Sawasdee Tuk Tuk",
            "fromdate" => "01 Jan 2023",
            "todate" => "31 Jan 2023",
            "cost" => "850.00",
            "sequence" => "1",
            "active" => "Y",
            "flight" => "Y",
		),
		array(
            "enhancement" => "Slider Sonahouse CLub",
            "fromdate" => "01 Mar 2023",
            "todate" => "31 Mar 2023",
            "cost" => "100.00",
            "sequence" => "2",
            "active" => "Y",
            "flight" => "",
		),
	);
	?>
    

	<table class="table table-bordered table-hover">
        <thead>
            <tr class="bg-white text-dark">
                <th scope="col" class="text-center text-dark">#</th>
                <th scope="col" class="text-nowrap">Enhancement</th>
                <th scope="col" class="text-nowrap">From date</th>
                <th scope="col" class="text-nowrap">To date</th>
                <th scope="col" class="text-nowrap">Cost</th>
                <th scope="col" class="text-nowrap">Sequence</th>
                <th scope="col" class="text-nowrap">Active</th>
                <th scope="col" class="text-nowrap">Flight</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        	<?php
			foreach ($enchance as $key => $value)
			{
			?>				
            <tr class="bg-white text-secondary">
                <th scope="row" class="text-center text-dark"><?php echo $key+1; ?></th>
                <td><?php echo $value['enhancement']; ?></td>
                <td class="text-nowrap"><?php echo $value['fromdate']; ?></td>
                <td class="text-nowrap"><?php echo $value['todate']; ?></td>
                <td class="text-nowrap"><?php echo $value['cost']; ?></td>
                <td class="text-nowrap"><?php echo $value['sequence']; ?></td>
                <td>
                	<?php 
                	if ($value['active']=="Y")
                	{
                	 	echo '<div class="text-success"><i class="fas fa-check-circle"></i></div>';
                	}
                	?>	                	
                </td>
                <td>
                	<?php 
                	if ($value['flight']=="Y")
                	{
                	 	echo '<div class="text-success"><i class="fas fa-check-circle"></i></div>';
                	}
                	?>
                </td>
                <td class="p-0">
                    <button
	                    class="btn btn-outline-primary w-100 border-0 shadow-none rounded-0"
	                    onclick="window.open('/enhancement/?page=edit-enhancement','_self');">
                        <span class="fs-8">
                            <i class="fas fa-search"></i>
                        </span>
                    </button>
                </td>
                <td class="p-0">
                    <button class="btn btn-outline-danger w-100 border-0 shadow-none rounded-0" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <span class="fs-8">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                </td>
            </tr>
            <?php
			}
			?>	    
        </tbody>
    </table>
</div>
	
<!-- 
<div class="d-flex justify-content-center py-4">
	<nav aria-label="...">
		<ul class="pagination">
			<li class="page-item disabled">
				<a class="page-link fs-8" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			</li>
			<li class="page-item active" aria-current="page">
				<a class="page-link fs-8" href="#">1</a>
			</li>
			<li class="page-item">
				<a class="page-link fs-8" href="#">2</a>
			</li>
			<li class="page-item">
				<a class="page-link fs-8" href="#">3</a>
			</li>
			<li class="page-item">
				<a class="page-link fs-8" href="#">Next</a>
			</li>
		</ul>
	</nav>
</div>
 -->

<div 
	class="modal fade"
	id="deleteModal"
	tabindex="-1"
	aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="fs-6 fw-bold text-dark">Delete contact</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            	<div class="fs-6 text-secondary">
            		Can you confirm that you wish to delete this enhancement?
            	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary fs-8 rounded-0" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger fs-8 rounded-0 px-4">Delete</button>
            </div>
        </div>
    </div>
</div>
