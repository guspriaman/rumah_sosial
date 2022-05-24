


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
            <h3 class="box-title">Data pelanggan</h3>
            <div class="pull-right">
                <a href="<?= site_url('pelanggan/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Tlp</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->tlp ?></td>
                            <td><?= $data->jenis_kelamin == 'L' ? "Laki-Laki" : "Perempuan" ?></td>
                            <td><?= $data->alamat ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('pelanggan/edit/' . $data->id_pelanggan) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <input type="hidden" name="id_pelanggan" value="<?= $data->id_pelanggan ?>">
                                <a href="<?= site_url('pelanggan/del/' . $data->pelanggan_id) ?>" onclick="return confirm('Apakah anda yakin hapus data?')" class=" btn btn-danger btn-xs">
                                    <i class="fa fa-user-plus"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>
<!-- /.content -->