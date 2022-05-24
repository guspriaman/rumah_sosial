<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        pelanggan
        <small>Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">pelanggan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> pelanggan</h3>
            <div class="pull-right">
                <a href="<?= site_url('pelanggan') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('pelanggan/process') ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $row->id_pelanggan ?>" id="">
                            <label>Nama Pelanggan *</label>
                            <input type="text" name="nama_pelanggan" value="<?= $row->name ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tlp *</label>
                            <input type="number" name="phone" value="<?= $row->tlp ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Jenis kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <option value="L" <?= $row->gender == 'L' ? 'selected' : null ?>>Laki-Laki</option>
                                <option value="P" <?= $row->gender == 'P' ? 'selected' : null ?>>Perempuan</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Alamat *</label>
                            <textarea name="alamat" class="form-control" required><?= $row->alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="Reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
















