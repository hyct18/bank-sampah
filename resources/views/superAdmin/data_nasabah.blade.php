@extends('app')

@section('content')
<h2 class="active" style="font-size: 30px;">Data Nasabah</h2>
	<br>
	<table id="example" class="display" cellspacing="0" width="100%" border="0" >
        <thead>
        <tr>
            <th>Id_User</th>
            <th>Nama</th>
            <th>RW</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Sampah</th>
            <th>Aksi</th>
        </tr>
        </thead>

    </table>

                <a href="admin.php?page=tambah-data-nasabah">
                <button><i class="fa fa-plus" aria-hidden="true"></i>Tambah</button>
                </a>
@endsection

@section('script')
    <script type="text/javascript" src="vendor/datatables/js/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
           $('#example').DataTable();
        } );
    </script>
@endsection
