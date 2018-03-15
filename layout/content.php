<?php require './model2.php'; ?>

<button class="btn btn-outline-danger btn-lg fixed-bottom mb-3 ml-3 text-uppercase font-weight-bold" data-toggle="modal" data-target="#BookAddForm">add new book</button>

<div class="modal fade" id="BookAddForm" tabindex="-1" role="dialog" aria-labelledby="addBookLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBookLabel">Add new book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        	require 'form.php';
         ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




 <div class="container">
	<?php for ($i=0; $i < 48; $i+=3) { ?>
	

			<div class="row">
				

				<?php for ($j=$i; $j < $i+3; $j++) { $b = $randomArr[$j]; ?>
				<div class="col-4">
					<div class="card">
						<img src="<?= $b['imgUrl'] ?>" alt="<?= $b['bookName']?>" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title"><?= $b['bookName']?></h5>
							<p class="card-subtitle"><?= $b['author']?></p>
						</div>
						<div class="card-footer text-muted"><?= $b['category']?></div>
					</div>
				</div>

				<?php } ?>

			</div>


	<?php } ?>
	</div>
