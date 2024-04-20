<link rel="stylesheet" href="../public/css/style.css">

<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary my-3 tombolTambah" data-bs-toggle="modal"
                data-bs-target="#formModal">
                Tambah Data Mobil
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?> /cars/cari" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Mobil" name="keyword" id="keyword"
                        autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center">DAFTAR MOBIL</h2>
        
        <div class="row row-cols-1 row-cols-md-2 g-3 py-2">
            <?php if (empty($data['cars'])) : ?>
                <div class="container text-center">
                    <h4 class="text-danger">Data Mobil Kosong</h4>
                </div>
            <?php endif; ?>
            <?php foreach ($data['cars'] as $cars) :?>
            <div class="col py-3 px-4">
                <div class="card">
                <img src="<?= BASEURL; ?>/img/<?= $cars['gambar']; ?>" alt="Car Image" class="img-fluid" style="object-fit: cover; aspect-ratio: 16/9; ">
                    <div class="card-body">
                        <h5 class="card-title"><?= $cars['nama_mobil']?></h5>
                        <p id="card-text"><?= $cars['plat_mobil']?></p>
                        <p id="card-text"><?= "Harga Sewa  Rp" . number_format($cars['harga_sewa'], 2, ',', '.') ?></p>
                        
                    </div>
                    <div class="d-flex justify-content-end me-3">
                    <li class="list-group-item d-inline-flex">
                        
                            <?php if ($cars['status'] == 'Tersedia') : ?>
                                <span class="me-3 mb-2 center align-content-center text-success"><?= $cars['status']; ?></span>
                            <?php else : ?>
                                <span class="me-3 mb-2 center align-content-center text-danger"><?= $cars['status']; ?></span>
                            <?php endif; ?>
                            
                            
                            <a href="<?= BASEURL; ?>/cars/detail/<?= $cars['id_mobil']; ?>"
                            class="badge bg-primary text-decoration-none float-end m-1 px-3 my-3">detail</a>
                            <a href="<?= BASEURL; ?>/cars/edit/<?= $cars['id_mobil']; ?>" class="badge bg-success text-decoration-none float-end m-1 px-3 my-3 tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $cars['id_mobil'] ?>">edit</a>
                            <a href="<?= BASEURL; ?>/cars/hapus/<?= $cars['id_mobil']; ?>" class="badge bg-danger text-decoration-none float-end m-1 px-3 my-3"
                            onclick="return confirm('Apakah mau menghapus?')">hapus</a>
                            
                    </li>
                    </div>
         
            </div>
        </div>
        <?php endforeach; ?>
    
            
        </div>
    </div>
   
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mobil</h1>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/cars/tambah" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="plat" class="form-label ">Plat Mobil</label>
                        <input type="text" class="form-control" id="plat" name="plat" placeholder="Plat Mobil" required>

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label ">Nama Mobil</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mobil" required>
                    </div>
                    <div class="mb-3">
                        <label for="sewa" class="form-label ">Harga Sewa Mobil</label>
                        <input type="number" class="form-control" id="sewa" name="sewa" placeholder="Harga Sewa" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" accept="image/png, image/jpeg" class="form-control" id="image" name="image"
                            placeholder="Gambar" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label ">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label ">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>