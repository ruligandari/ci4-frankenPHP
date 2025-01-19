<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data User</h4>

            <!-- tabel -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered zero-configuration" id="table-karyawan">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<!-- Datatables -->
<script>
    $(document).ready(function() {
        $('#table-karyawan').DataTable({
            processing: true,
            serverSide: true,
            ajax: '<?= base_url('karyawan_tbl') ?>',
            columnDefs: [{
                    targets: -1,
                    orderable: false
                }, //target -1 means last column
            ]
        });
    });
</script>
<?= $this->endSection(); ?>