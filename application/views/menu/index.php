<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-primary"> <?= $title;?></h1>
    <?= validation_errors();?>
    <div class="row">
        <div class="col-lg">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Data Tabel
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#myModal"><i
                                class="fa fa-plus"></i> Tambah Data</a>
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach($menu as $m):?>
                                <tr>
                                    <th scope="row"><?= $i;?></th>
                                    <td><?= $m['menu'];?></td>
                                    <td>
                                        <a type="submit" href="#" class="btn btn-warning bg-gradient-warning"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <a href="#" type="submit" class="btn btn-danger bg-gradient-danger"><i
                                                class="fas fa-trash-alt"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php $i++;?>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                <button class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu/addmenu');?>" method="post">
                    <div class="form_group">Nama Menu
                        <input type="text" class="input" id="menu" name="menu" placeholder="Nama Menu">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form_group">
                        <input type="text" class="form_control" id="idmenu" name="idmenu" placeholder="ID_Menu">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div> -->