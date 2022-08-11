<div class="container ">
        <div class="row">
          @foreach ($data as $item)
          <div class="col-4 mt-5 ">
            <div class="card" style="width: 18rem">
              <img src="{{ asset($item->foto)}}" class="card-img-top"/>
              <div class="card-body">
                <h5 class="card-title">{{$item->nama}}</h5>
                <p class="card-text">RP.{{number_format($item->harga, 0,',',',')}}</p>
                <a href="{{route('pelanggan.detail', $item->id)}}" class="btn btn-warning">Detail Produk</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
</div>
     