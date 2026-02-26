<?php include 'component/header.php'; ?>

<div class="container">
    <br><br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h1>Aplikasi Ujian Online</h1>
                <hr class="w-50 mx-auto" style="border: 3px solid black; border-radius: 10px;">
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email....">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" id="kode_ujian" name="kode_ujian" placeholder="Masukan Kode Ujian....">
                        </div>
                        <br>
                        <center>
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Login</button>
                        </center>
                        <br>
                        <center>
                            <a href="" class="btn btn-border-primary"><i class="fa fa-sign-in"></i> Login Sebagai Guru</a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'component/footer.php'; ?>