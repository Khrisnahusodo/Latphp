<b>RUMUS PERHITUNGAN </b>
<form name="frm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="metode" value="BBMA">
<table cellspacing="0" width="50%" id="datatable" class="table table-striped table-hover table-responsive">
<tr><td>VAR 1</td><td><input type="text" size="20" name="var1"></td></tr>
<tr><td>VAR 2</td><td><input type="text" size="20" name="var2"></td></tr>
<tr><td>VAR 3</td><td><input type="text" size="20" name="var3"></td></tr>
<tr><td>VAR 4</td><td><input type="text" size="20" name="var4"></td></tr>
<tr><td>Perhitungan</td><td>
<input type="radio" name="hitung" value="segetiga">Segitiga
<input type="radio" name="hitung" value="lingkaran">Lingkaran
<tr><td></td><td>
<input type="submit" name="submit" value="PROSES"> </td></tr>
</table>
</form>
<br>Tampilan Hasil Kalkulasi <br>
<?php
//MEMPROSES HASIL SUBMIT  DARI FORM
if (isset($_POST['submit'])){

//menangkap input type
if(isset($_POST['var1'])) {$var1=$_POST['var1'];}else{$var1= '';}
if(isset($_POST['var2'])) {$var2=$_POST['var2'];}else{$var2= '';}
if(isset($_POST['var3'])) {$var3=$_POST['var3'];}else{$var3= '';}
if(isset($_POST['var4'])) {$var4=$_POST['var4'];}else{$var4= '';}


//MENAMPILKAN HASIL SUBMITe
echo "$var1 <br> $var2 <br> $var3 <br> $var4";

}

?>


