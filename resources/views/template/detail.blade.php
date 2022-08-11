<div>
  <form action="" method="POST">
  @csrf
  <div class="row">

    <div class="col-4 mt-5">
      <div class="card">
        <img src="{{asset($produk->foto)}}" class="card-img-top">
      </div>
    </div>
    <div class="col-3 mt-5">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$produk->name}}</h5>
        <p class="card-text">RP.{{number_format($produk->harga, 0, '.' , '.')}}</p>
        <input type="number" name="banyak" id="" class="form-control" placeholder="banyak" required>
        <hr>
        <h5>Keterangan :</h5>
        <p>ini merupakan detail dari barang tersebut</p>
      </div>
    </div>
  </div>
  <div class="col-3 mt-5">
    <div class="card">
      <div class="card-body">
        <h5>Kategori : {{$produk->Kategori->nama}}</h5>
        <img src="" alt="" class="card-img-top">
      </div>
    </div>
    <button class="btn btn-success mt-3 form-control">Beli</button>
  </div>
  </div>
</form>
</div>