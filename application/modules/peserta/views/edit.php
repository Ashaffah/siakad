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
            echo form_open_multipart('peserta/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id', $data['id']);
            ?>
<div class="form-group input-rounded">
<label>NIM</label>
<input type="text" value = "<?php echo $data['nim'] ?>" class="form-control" name="nim">
</div>
<div class="form-group input-rounded">
<label>Nama</label>
<input type="text" value = "<?php echo $data['nama'] ?>" class="form-control" name="nama">
</div>
<div class="form-group input-rounded">
<label>PASSWORD</label>
<input type="text" value = "<?php echo $data['nama'] ?>" class="form-control" name="password">
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
