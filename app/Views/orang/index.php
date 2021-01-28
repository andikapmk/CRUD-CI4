<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-2 mb-2">Data Orang</h2>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="masukan Keyword Pencarian..." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit    ">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 + (6 * ($current_page - 1)); ?>
                            <?php foreach ($orang as $a) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $a['nama']; ?></td>
                                    <td><?= $a['alamat']; ?></td>
                                    <td>
                                        <a href="" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </table>
                <?= $pager->links('orang', 'orang_pagination') ?>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>