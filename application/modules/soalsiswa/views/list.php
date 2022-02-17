<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Soal</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Dashboard</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Soal</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
					 <div class="col-5 align-self-center">

                        <div class="customize-input float-right">
				</div>
				</div>
                </div>
            </div>



           <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
					<h4 class="card-title">Soal</h4>
	
		<?php
		$no = 1;
		foreach($data as $u){ //untuk menampilkan variabel data yang diangkut dari controller
		?>
		
		<h3><?php echo $no ?>. <?php echo $u->pertanyaan?></h3>
		<?php $no++; ?>
		<?php } ?>
		
        </div>
		</div>
		</div>
		</div>
</div>
</div>