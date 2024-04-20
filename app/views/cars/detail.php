<div class="container mt-5">
<div class="card" style="width: 50rem; margin: 0% 20% 0% 20%">
    <img src="<?= BASEURL; ?>/img/<?= $data['cars']['gambar']; ?>" alt="Car Image" class="img-fluid" style="object-fit: cover; aspect-ratio: 16/9; ">
  <div class="card-body ">
    <h5 class="card-title"><?= $data['cars']['nama_mobil'];?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['cars']['plat_mobil'];?></h6>
    <p class="card-text"><?= number_format($data['cars']['harga_sewa'], 2, ',');?></p>
    <p class="card-text"><?= $data['cars']['deskripsi'];?></p>
    <p class="card-text"><?= $data['cars']['status'];?></p>
    <a href="<?= BASEURL;?> /cars" class="card-link text-decoration-none">Kembali</a>
  </div>
</div>
</div>  