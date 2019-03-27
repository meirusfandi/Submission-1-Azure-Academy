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

                    <h3 class="col-md-12 col-sm-12 control-label">Edit Data Pengguna</h3>

                    @foreach($user as $p)
                    <form action="{{url('/home/update')}}" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $p->id }}">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="username" value="{{ $p->username }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="password" required="required" name="password" value="{{ $p->password }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Nama</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="nama" value="{{ $p->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Email</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="email" value="{{ $p->email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">No. HP</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" required="required" name="no_hp" value="{{ $p->no_hp }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2">Asal Sekolah</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                <label>
                                    @foreach($sekolah as $school)
                                    
                                        <input type="radio" required="required" name="id_sekolah" value="{{$school->id_sekolah}}"> {{ $school->nama_sekolah.' - '.$school->kota.' - '.$school->provinsi }}<br>
                                    
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>