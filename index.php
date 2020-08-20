<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap -->
    <title>Ajax - Alif Fikry</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Load file JS -->
    <script src="js/jquery-3.4.1.js"></script>

</head>
<body>
<div class="container">
    <br>
    <h4>Submit Form dengan AJAX</h4>

    <form  id="form" method="post">
        <div class="form-group">
            <label>Kode Barang:</label>
            <input type="text" name="kode_buku" class="form-control" placeholder="Masukan kode" required />
        </div>
        <div class="form-group">
            <label>Nama Barang:</label>
            <input type="text" name="nama_buku" class="form-control" placeholder="Masukan nama barang" required />
        </div>
        <div class="form-group">
            <label>Jumlah:</label>
            <input type="number" name="jumlah" class="form-control" placeholder="Masukan jumlah" required />
        </div>
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tgl" class="form-control" required />
        </div>

        <button type="button" id="Submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


    <div id="tampil">

    </div>

    <script type="text/javascript">
        $(document).ready(function(){

         $('#tampil').load("tampil.php");

            $("#Submit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type: 'POST',
                    url	: "insert.php",
                    data: data,

                    cache	: true,
                    success	: function(data){
                        $('#tampil').load("tampil.php");
                    }
                });
            });
        });
    </script>
</div>

</body>
</html>
