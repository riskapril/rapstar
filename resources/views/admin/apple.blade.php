@extends('admin.index')
@section('Judul','Smartphone Apple')
@section('Content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>Produk Smartphone Apple</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe</th>
      <th scope="col">Harga</th>
      <th scope="col">Spesifikasi</th>
      <th scope="col">Toko</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>iPhone X</td>
      <td>Rp 1.580.000</td>
      <td>256GB</td>
      <td>Wish Phonestore</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>iPhone 12 Pro Max</td>
      <td>Rp 9.500.000</td>
      <td>128GB</td>
      <td>Dunia Apple Store</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>iPhone 11 Pro</td>
      <td>Rp 8.500.000</td>
      <td>256GB</td>
      <td>yunishop00</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
      <tr>
      <th scope="row">4</th>
      <td>iPhone XR</td>
      <td>Rp 4.790.000</td>
      <td>128GB</td>
      <td>Life Technology</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
      <tr>
      <th scope="row">5</th>
      <td>iPhone 13 Pro Max</td>
      <td>Rp 16.275.000</td>
      <td>128GB</td>
      <td>Studio Ponsel</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-warning">Lihat</button>
      <button type="button" class="btn btn-info">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

@endsection