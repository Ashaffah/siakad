<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Ubah Data</h4>
                                 <?php
            echo form_open_multipart('soal2/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id', $data['id']);
            ?>
<div class="form-group input-rounded">
<label>Pertanyaan</label>
<input type="text" value = "<?php echo $data['pertanyaan'] ?>" class="form-control" name="pertanyaan">
</div>
<div class="form-group input-rounded">
<label>Kunci</label>
<input type="text" value = "<?php echo $data['kunci'] ?>" class="form-control" name="kunci">
</div>
<div class="form-inline">
</div>
<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Ubah</button>
</form>
</br>
</br>
</br>
</div>
</div>
</div>
</div>
</div>
