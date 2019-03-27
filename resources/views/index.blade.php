<!DOCTYPE html>
<html>
<head>
    <title>Azure Cloud Developer Academy</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"/>
</head>
<body>
 
    <div class="container">
		<div class="card">
			<div class="card-body">

                <h2 class="text-center">Submission 1 Azure Cloud Developer Academy - Mei Rusfandi</h2>
                <hr>
                <h3>Data Pengguna</h3>
                    
                <form action="{{url('/home/cari')}}" method="GET" class="form-inline" >
                    <a href="{{url('/home/tambah')}}" class="btn btn-success">+ Tambah User Baru</a>
                    <input class="form-control ml-3" type="text" name="cari" placeholder="Cari User .." value="{{ old('cari') }}">
                    <input class="btn btn-primary ml-3" type="submit" value="CARI">
                </form>
                    
                <br/>
            
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. HP</th>
                        <th>Nama Sekolah</th>
                        <th width="135px">Opsi</th>
                    </tr>
                    <?php $i=0; ?>
                    @foreach($user as $p)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->no_hp }}</td>
                        <td>{{ $p->sekolah }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{url('/home/edit')}}/{{$p->id}}">Edit</a>
                            |
                            <a class="btn btn-danger btn-sm" href="{{url('/home/hapus')}}/{{$p->id}}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
                <br/>
                Halaman : {{ $user->currentPage() }} <br/>
                Jumlah Data : {{ $user->total() }} <br/>
                Data Per Halaman : {{ $user->perPage() }} <br/>
            
                {{ $user->links() }}
            
            </div>
        </div>
    </div>
 
</body>
</html>