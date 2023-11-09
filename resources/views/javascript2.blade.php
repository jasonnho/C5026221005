<!DOCTYPE html>
<html>

<head>
    <title>JS2 Formulir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateForm() {
            var x = document.getElementById("fname");
            var nrp = document.getElementById("nrp");
            if (x.value == "") {//isian kosong, berarti text box tidak di isi
                alert("Name must be filled out");
                x.focus();
                return false;//stop
            }
            if (nrp.value == "") {//isian kosong, berarti text box tidak di isi
                alert("NRP must be filled out");
                nrp.focus();
                return false;//stop
            }

            if (isNaN(nrp.value) == true){
                alert("NRP harus berupa angka");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (nrp.value.length != 10){
                alert("Jumlah NRP harus 10, Anda memasukkan "+ nrp.value.length + "digit");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (nrp.value.substring(0, 4) != 5026){
                alert("Harus mahasiswa Sistem Informasi");
                nrp.focus();
                nrp.value = "";
                return false;
            }

            if (!(nrp.value.substring(4, 6) == 22 || nrp.value.substring(4, 6) == 21)){
                alert("Khusus mahasiswa angkatan 2021 dan 2022")
                nrp.focus();
                nrp.value = "";
                return false;
            }



            return true;//default function adalah true
        }
    </script>
</head>

<body>

    <h2>Pendaftaran Asisten Lab Sistem Informasi</h2>

    <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
        <label for="fname">Name:</label>
        <input type="text" id="fname" name="fname" class="form-control">
        <label for="nrp">NRP</label>
        <input type="text" id="nrp" name="nrp" class="form-control">

        <input type="submit" value="submit" class="btn btn-primary">
        <input type="reset" value="Kosongi" class="btn btn-warning">
    </form>



</body>

</html>
