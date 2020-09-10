<div class="row m-auto">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="box-title"> Daftar Downloader </h4>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <form action="/guestbooks" class="form-inline" method="GET">
                            <div class="form-group mr-sm-3 mb-2">
                                <input type="search" name="search" class="form-control" placeholder="Search by email">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Search</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-primary float-right" href="#" class="btn btn-primary" target="_blank">Cetak PDF</a>
                    </div>
                </div>
            </div>

            <div class="card-body--">
                <div class="table-stats order-table ov-h">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <!-- <th>Alamat</th> -->
                                <th>No Hp</th>
                                <!-- <th>Asal Sekolah</th> -->
                                <!-- <th>Jurusan Sekolah</th> -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                                <!-- <?php if(is_array($daftar_downloader)): ?> -->
                                    <?php foreach ($daftar_downloader as $maba => $data): ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $data->nama ?></td>
                                            <td><?= $data->email; ?></td>
                                            <!-- <td><?= $maba['alamat']; ?></td> -->
                                            <td><?= $data->no_hp; ?></td>
                                            <!-- <td><?= $maba['asal_sekolah']; ?></td> -->
                                            <!-- <td><?= $maba['jurusan_sekolah']; ?></td> -->
                                            <td>
                                                <a id="set_dtl"
                                                data-toggle="modal"    
                                                    data-target="#modal-detail"
                                                    class="btn btn-info btn-sm"
                                                    data-nama="<?= $data->nama; ?>"
                                                    data-email="<?= $data->email; ?>"
                                                    data-alamat="<?= $data->alamat; ?>"
                                                    data-nohp="<?= $data->no_hp; ?>"
                                                    data-asalsekolah="<?= $data->asal_sekolah; ?>"
                                                    data-jurusansekolah="<?= $data->jurusan_sekolah; ?>">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <!-- <a href="{{route('guestbooks.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a> -->
                                            </td>
                                        </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <!-- <?php endif; ?> -->
                        </tbody>          
                    </table>
                    <!-- untuk link paginate halaman -->
                    <!-- {{ $items->links() }} -->
                    <div class="row">
                        <div class="col">
                            <!--Tampilkan pagination-->
                            <?php echo $pagination; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Showing 1 to 10 of {{$items->total()}} -->
    </div>
</div>

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Detail Data Downloader</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="">Nama Lengkap</th>
                            <td><span id="nama"></span></td>
                        </tr>
                        <tr>
                            <th style="">Email</th>
                            <td><span id="email"></span></td>
                        </tr>
                        <tr>
                            <th style="">Alamat Rumah</th>
                            <td><span id="alamat"></span></td>
                        </tr>
                        <tr>
                            <th style="">No HP</th>
                            <td><span id="no_hp"></span></td>
                        </tr>
                        <tr>
                            <th style="">Asal Sekolah</th>
                            <td><span id="asal_sekolah"></span></td>
                        </tr>
                        <tr>
                            <th style="">Jurusan Sekolah</th>
                            <td><span id="jurusan_sekolah"></span></td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click','#set_dtl', function(){
            var nama = $(this).data('nama');
            var email = $(this).data('email');
            var alamat = $(this).data('alamat');
            var nohp = $(this).data('nohp');
            var asalsekolah = $(this).data('asalsekolah');
            var jurusansekolah = $(this).data('jurusansekolah');
            $('#nama').text(nama);
            $('#email').text(email);
            $('#alamat').text(alamat);
            $('#no_hp').text(nohp);
            $('#asal_sekolah').text(asalsekolah);
            $('#jurusan_sekolah').text(jurusansekolah);
            $('#nama').text(data.id_rumahjaga);
        })
    })
</script>