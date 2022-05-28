<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h4 >Pemesanan Produk</h4>
        <h2 id="namatxt"></h2>
        <ul class="list-group list-group-flush" id="data"></ul>
        <div class="row justify-content-md-center">
            <div class="col-6 border">
                <h4>Data</h4>
                <form action="" method="post" id="market">
                    <div class="row g-3">
                        <div class="col">
                            Nama <br>
                            <input type="text" class="form-control" id="nama" placeholder="">
                        </div>
                    </div>
                    <div class="row g-3">

                        <div class="col">
                            <p>Produk</p>
                        </div>
                        <div class="col">
                            <p>Jumlah</p>
                        </div>
                    </div>
                    <div class="input-group mb-3" id="inputFormRow">
                        <div class="col">
                            <select class="form-select" id="produk" name="produk" onchange="hapusbarang(value)">
                                <option value="">Pilih Produk</option>
                                <option value="Jet Tempur">Jet Tempur</option>
                                <option value="Nuklir Hiroshima">Nuklir Hiroshima</option>
                                <option value="Infinity Stone">Infinity Stone</option>
                                <option value="Burj Khalifa">Burj Khalifa</option>
                                <option value="Rudal Hipersonik">Rudal Hipersonik</option>
                            </select>
                        </div>
                        <div class="col">
                                <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                                <button class="btn btn-info" type="button" id="Tambah" >Tambah Produk</button>
                        </div>   
                    </div>
                    <div class="row g-3" id="newrow"></div>
                        <button id="pesan" type="button" class="btn btn-success">Pesan</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https:cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https:cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
<script src="https:cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script type="text/javascript" src="Prak1.js"></script>

</html>