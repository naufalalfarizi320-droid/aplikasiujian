<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.2.0/css/all.min.css">
    <style>
        .biru {
            height: 300px;
            background-color: blue;
        }

        .kuning {
            height: 300px;
            background-color: yellow;
        }

        .merah {
            height: 300px;
            background-color: red;
        }

        .hijau {
            height: 300px;
            background-color: green;
        }

        .abu {
            height: 300px;
            background-color: grey;
        }

        .pink {
            height: 300px;
            background-color: pink;
        }

        .cyan {
            height: 300px;
            background-color: cyan;
        }

        .hitam {
            height: 300px;
            background-color: black;
        }

        .ungu {
            height: 300px;
            background-color: purple;
        }

        .orange {
            height: 300px;
            background-color: orange;
        }

        .magenta {
            height: 300px;
            background-color: magenta;
        }

    </style>
</head>
<body>
    
    <!-- grid sistem -->
    <div class="col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-3 biru"></div>
                <div class="col-md-9 kuning"></div>
                <div class="col-md-3 merah"></div>
                <div class="col-md-3 hijau"></div>
                <div class="col-md-3 abu"></div>
                <div class="col-md-3 pink"></div>
                <div class="col-md-3 cyan"></div>
                <div class="col-md-3 hitam"></div>
                <div class="col-md-3 ungu"></div>
                <div class="col-md-3 orange"></div>
                <div class="col-md-3 magenta"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <h1 class="text-center">pengunaan sederhana</h1>
        <hr>
        <p class="text-center fw-bold">contoh text</p>
    
        <p>tombol</p>
        <table>
            <tr>
                <td>
                    <!-- utama -->
                    <button class="btn btn-primary">ok</button>
                </td>
                <td>
                    <button class="btn btn-info">ok</button>
                </td>
                <td>
                    <button class="btn btn-secondary">ok</button>
                </td>
                <td>
                    <button class="btn btn-success">ok</button>
                </td>
                <td>
                    <button class="btn btn-warning">ok</button>
                </td>
                <td>
                    <button class="btn btn-danger">ok</button>
                </td>
                <td>
                    <button class="btn btn-outline-primary">ok</button>
                </td>
                <td>
                    <button class="btn btn-outline-info">ok</button>
                </td>
                <td>
                    <button class="btn btn-outline-secondary">ok</button>
                </td>
                <td>
                    <button class="btn btn-outline-success">ok</button>
                </td>
                <td>
                    <button class="btn btn-outline-warning">ok</button>
                </td>
                <td>
                    <button class="btn btn-outline-danger">ok</button>
                </td>
            </tr>
        </table>
        <hr>
        <p>tabel</p>
        <!-- th -> table head -->
        <!-- td -> table data  -->
        <!-- tr -> table row -->
        <table class="table table-hover">
            <tr class="table-primary">
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>keterangan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>melanie sekar ningrum </td>
                <td>kecamatan air hangat timur, desa sungai tutung</td>
                <td>Hadir</td>
            </tr>
            <tr>
                <td>2</td>
                <td>reza harjdinata</td>
                <td>Kerinci</td>
                <td>tidak ad keterangan</td>
            </tr>
            <tr>
                <td>3</td>
                <td>caca</td>
                <td>Kerinci</td>
                <td>elsa dwi fortuna aurora</td>
            </tr>
        </table>
        <hr>
        <p>form</p>
        <p>
            1. input <br>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control ">
                </div>
                <div class="col-md-3">
                    <input type="number" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="password" class="form-control">
                </div>
            </div>
        </p>
        <p>
            2. dropdown
            <select name="" id="" class="form-control">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
            </select>
        </p>
        <p>
            3. textarea
            <textarea name="" id="" class="form-control "></textarea>
        </p>
        
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-4.0.0.min.js"></script>
</body>
</html>