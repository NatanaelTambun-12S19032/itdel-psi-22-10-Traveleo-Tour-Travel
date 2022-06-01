<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar - Traveleo Tour & Travel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-image: url('./images/logo.jpeg');
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>SIREMOTRA</b><br>Traveleo Tour & Travel</h3>
                <hr>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @error('email')
                        <li>Maaf email sudah digunakan</li>
                        @enderror
                        @error('name')
                        <li>Maaf username sudah digunakan</li>
                        @enderror
                    </ul>
                </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Email" name="email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Username" name="name">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap" name="nama_lengkap">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="number" class="form-control form-control-xl" placeholder="No Handphone" name="no_hp">
                        <div class="form-control-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <textarea class="form-control" name="alamat" id="alamat" cols="50" rows="2" placeholder="Alamat"></textarea>
                        <div class="form-control-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <select class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name">
                            <fieldset class="form-group">
                                <option selected disabled>Pilih Role Anda</option>
                                <option value="Admin">Admin</option>
                                <option value="Operator">Operator</option>
                                <option value="Penyewa">penyewa</option>
                                <option value="Penyewa">supir</option>
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-exclude"></i>
                        </div>
                        </fieldset>
                        @error('role_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password_confirmation">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>
                        Sudah Memiliki Akun?
                        <a href="{{ route('login') }}" class="font-bold">Masuk</a>.
                    </p>
                </div>
        </div>
    </div>
</body>

</html>