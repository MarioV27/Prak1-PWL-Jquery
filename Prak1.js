const Barang = [
    "Jet Tempur",
    "Nuklir Hiroshima",
    "Infinity Stone",
    "Burj Khalifa",
    "Rudal Hipersonik",
];

let dataset = [
    {
        nama: "Jet Tempur",
        stock: 10,
    },
    {
        nama: "Nuklir Hiroshima",
        stock: 1,
    },
    {
        nama: "Infinity Stone",
        stock: 6,
    },
    {
        nama: "Burj Khalifa",
        stock: 5,
    },
    {
        nama: "Rudal Hipersonik",
        stock: 3,
    },
];

function showValues() {
    var fields = $(":input").serializeArray();
    $("#results").empty();
    jQuery.each(fields, function (i, field) {
        $("#results").append(field.value + " ");
    });
}


let n = 0;

const hapusbarang = (value) => {
    Barang.forEach((elem) => {
        if (value == elem) {
            Barang.splice(Barang.indexOf(elem), 1);
        }
    });
}

$(document).on("click", "#Tambah", function () {
    if (n < 3) {
        n++;
        var html = `<div class="input-group mb-3" id="inputFormRow">
                    <div class="col">
                    <select class="form-select" id="produk" name="produk" onchange="tes3(value)">
                    <option value="">Pilih Produk</option>`;
        Barang.forEach((elem) => {
            html += `<option value="${elem}">${elem}</option>`;
        });
        html += `                       </select>
        </div>
        <div class="col">
                <input type="number" name="jumlah" id="jumlah" class="form-control" aria-label="Last name" required>
                <button id="hapus" type="button" class="btn btn-danger">Hapus</button>
        </div>
                        
                    </div>`;
        $("#newrow").append(html);
    } else if (n == 3) {
        n++;
        var html = `<div class="input-group mb-3" id="inputFormRow">
                    <div class="col">
                    <select class="form-select" id="produk" name="produk" onchange="tes3(value)">
                    <option value="">Pilih Produk</option>`;
        Barang.forEach((elem) => {
            html += `<option value="${elem}">${elem}</option>`;
        });
        html += `                       </select>
        </div>
        <div class="col">
                <input type="number" name="jumlah" id="jumlah" class="form-control" aria-label="Last name" required>
                <button id="hapus" type="button" class="btn btn-danger">Hapus</button>
        </div>
                        
                    </div>`;
        $("#newrow").append(html);
        $("#Tambah").hide();
    }
});

$(document).on("click", "#pesan", function () {
    let data = ``;
    $("select").map((i, item) => {
        if (item.value == dataset[i].nama) {
            if ($(':input[type="number"]').eq(i).val() > dataset[i].stock) {
                alert("Item yang diingini tidak mencukupi");
                return false;
            }
        }
        data = `<li class="list-group-item">
                <span id="nama_produk">${item.value}</span>
                <span id="jumlah_produk">${$(':input[type="number"]')
                .eq(i)
                .val()}</span>
        
            </li>`;
        $("#data").append(data);
    });

    let nama = $("#nama").val();
    $("#namatxt").text(nama);
});

$(document).on("click", "#hapus", function () {
    n--;
    $("#Tambah").show();
    Barang.splice(0, 0, $("select").eq(n).val());
    $(this).closest("#inputFormRow").remove();
});