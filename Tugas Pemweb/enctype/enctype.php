<?php
include "Form.html";
echo "<br><br><fieldset>";
echo "<fieldset>";
echo "<legend> Rincian Pendaftaran:</legend><br>";
$nama_file=$_FILES["avatar"]["name"];
$tmp_name=$_FILES["avatar"]["tmp_name"];
$local_image="upload/";
move_uploaded_file($tmp_name,$local_image.$nama_file);
echo '<td style=align="center>
<img src="upload/'.$nama_file.'" width="100" /><br />
</td>';
echo "<br>";
echo "Nama:";
echo $_POST["namaD"];
echo " ";
echo $_POST["namaB"];
echo "<br>";
echo "Email:";
echo $_POST["email"];
echo "<br>";
echo "Jenis Kelamin:";
echo $_POST["jk"];
echo "<br>";
echo "Negara:";
echo $_POST["negara"];
echo "<br>";
echo "<p><span>Pembuatan akun Telah Berhasil!!</span><p>";
echo "</fieldset>";
echo "</fieldset>";
