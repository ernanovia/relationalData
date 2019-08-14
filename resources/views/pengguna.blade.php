<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta ttp-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent One to one Relationship</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
            <!-- use pengguna and telepon table -->
                <h3 class="text-center my-4">Eloquent One to one Relationship</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>Nomor Telepon</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($pengguna as $p)
                        <tr>
                            <td>{{ $p->nama}}</td>
                            <td>{{ $p->telepon->nomor_telepon}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
</body>
</html>