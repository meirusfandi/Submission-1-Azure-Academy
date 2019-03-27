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
        
                <div class="form-horizontal col-md-12">

                    <h3 class="col-md-12 col-sm-12 control-label">Tambah Data Pengguna</h3>

                    <form action="{{url('/home/store')}}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="password" required="required" name="password" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Nama Lengkap</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="nama" placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Alamat Email</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="email" placeholder="Alamat Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">No. HP</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="no_hp" placeholder="Nomor HP/Telepon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Asal Sekolah</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                <label>
                                    @foreach($sekolah as $school)
                                    <input type="radio" required="required" name="id_sekolah" value="{{$school->id_sekolah}}"> {{ $school->nama_sekolah.' - '.$school->kota.' - '.$school->provinsi }}
                                    <br>
                                    @endforeach
                                </label>
                                </div>
                            </div>
                        </div>

                        <center>
                            <div class="form-group">
                                <input type="submit" value="Simpan Data" class="btn btn-primary">
                                <a href="{{url('home')}}" class="btn btn-danger">Kembali</a>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>