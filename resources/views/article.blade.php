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
                            <th>Judul Artikel</th>
                            <th>Tag</th>
                            <th width="15%" class="text-center">Jumlah</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($artikel as $a)
                        <tr>
                            <td>{{ $a->judul }}</td>
                            <td>
                                @foreach($a->tags as $t)
                                {{ $t->tag }},
                                @endforeach
                            </td>
                            <td class="text-center"> {{ $a->tags->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>
</body>
</html>