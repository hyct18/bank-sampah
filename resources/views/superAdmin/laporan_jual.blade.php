@extends('app')\

@section('content')
    <h2 class="active" style="font-size: 30px;">Laporan Jual Sampah</h2>
<br>

    <form action="#" method="post" name="form10" target="_self">
        <div class="row">
          <div class="col-lg-3">
            <input name="txtTglAwal" type="date" class="form-control"  size="10" />
          </div>
          <div class="col-lg-3">
           <input name="txtTglAkhir" type="date" class="form-control"  size="10" />
          </div>

          <div class="col-lg-3">
          <input name="btnTampil" class="btn btn-success" type="submit" value="Tampilkan" />
          </div>
        </div>
        </form>

      <style>
        table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        border: 1px solid; /* warna awal garis */
        padding: 8px;
      }

      th {
        text-align: left;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      .search-bar {
        width: 200px;
        padding: 5px;
        margin-bottom: 10px;
      }

      .pagination {
        text-align: center;
      }

      .pagination a {
        padding: 5px;
        border: 1px solid #ddd;
        margin-right: 5px;
      }

      .pagination a:hover {
        background-color: #ddd;
      }

      .pagination a.active {
        background-color: #000;
        color: #fff;
      }

      /* Menyesuaikan warna garis berdasarkan mode gelap */
      @media (prefers-color-scheme: dark) {
        table {
          background-color: #D2E3C8; /* warna background untuk dark mode */
        }

        th, td {
          border-color: #fff; /* warna garis untuk dark mode */
        }
      }
        </style>

          <style>

      .btn-container {
                  text-align: right;
                  margin-left: auto; /* Posisikan ke kanan */
              }
              #search {
          margin-bottom: 5px;
          float: right;
              }

          #search input {
          width: 300px;
      }
      .row {
          width: 100%;
      }

          </style>

      <div class="mb-3"></div>
      <div class="row">
      <div class="col">
          <div class="card shadow">
              <div class="card-body">

                  <div class="row">
                      <div class="d-flex justify-content-between">
                        <!-- Bagian "Show Entries" di kiri -->
                        <div>
                          <label for="entries">Show Entries:</label>
                          <select id="entries" onchange="changeEntries()">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                        </div>
                        <!-- Bagian "Search" di kanan -->
                        <div>
                          <label for="search">Search:</label>
                          <input type="text" id="search" name="search" placeholder="Type your search query..." />
                        </div>
                      </div>
                    </div>

                  <div class="table-responsive">
                      <table class="table table-bordered">
                          <thead class="table-secondary">
                              <tr>
                                  <th>No</th>
                                  <th>Tanggal Jual</th>
                                  <th>RW</th>
                                  <th>Jenis Sampah</th>
                                  <th>Banyak</th>
                                  <th>Harga Satuan</th>
                                  <th>Total</th>
                              </tr>
                          </thead>
                          <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>11/03/2024</td>
                                      <td>1</td>
                                      <td>Kardus</td>
                                      <td>5Kg</td>
                                      <td>5000</td>
                                      <td>25000</td>
                                  </tr>
                                  <tr>
                                      <td>2</td>
                                      <td>11/03/2024</td>
                                      <td>2</td>
                                      <td>Botol</td>
                                      <td>5Kg</td>
                                      <td>3000</td>
                                      <td>15000</td>
                      </tr>
                  </tbody>
              </table>
              <div class="row" >
                  <div class="d-flex justify-content-between">
                  <div>
                    <a href="#" class="btn btn-primary">Cetak Laporan</a>
              </div>
              <div>
                  <div class="btn-container">
                      <button class="btn btn-previous">Previous</button>
                      <button><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a></button>
                      <button class="btn btn-next">Next</button>
                  </div>
              </div>
          </div>
      </div>
      </div>
      </div>
      </div>
      @endsection

