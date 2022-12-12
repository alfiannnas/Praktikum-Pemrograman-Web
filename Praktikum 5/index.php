<form id="form_mahasiswa">
    <label for="prodi">Prodi</label>
    <select name="prodi" id="prodi">
        <option value=""> Pilih Prodi </option>
        <option value="IF"> Teknik Informatika </option>
        <option value="BM"> Teknik Biomedis </option>
        <option value="KI"> Kimia </option>
        <option value="TA"> Teknik Pertambangan </option>
    </select>
</form>
   
<br>

<div id="tampil_data"></div>
    <script src = "https://code.jquery.com/jquery-3.6.1.min.js"
    integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin = "anonymous">
    </script>


	<script>
    $(document).ready(function () {
        $("#tampil_data").load("tampil.php");
            $("#btn_tampil").click(function () {
            let data = $("#form_mahasiswa").serialize();
            $.ajax({
            type : "POST",
            url : "tambah.php",
            data : data,
            success : function (response) {
            $("#tampil_data").load("tampil.php");

            }
            });
        });
    });
    
</script>