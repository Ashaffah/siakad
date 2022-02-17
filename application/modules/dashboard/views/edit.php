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
            echo form_open_multipart('dashboard/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id', $data['id']);
            ?>
<div class="form-group input-rounded">
<label>Suhu</label>
<input type="text" value = "<?php echo $data['suhu'] ?>" class="form-control" name="suhu">
</div>
<div class="form-group input-rounded">
<label>Kelembapan</label>
<input type="text" value = "<?php echo $data['lembap'] ?>" class="form-control" name="lembap">
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
