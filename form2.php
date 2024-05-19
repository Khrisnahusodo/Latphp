<b>KALKULATOR </b>
<form name="frm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="metode" value="BBMA">
<table cellspacing="0" width="50%" id="datatable" class="table table-striped table-hover table-responsive">
<tr><td>NILAI 1</td><td><input type="text" size="20" name="var1"></td></tr>
<tr><td>NILAI 2</td><td><input type="text" size="20" name="var2"></td></tr>

<tr><td>RUMUS</td><td>
<select name="rumus">
<option value="kali">X : Perkalian  </option>
<option value="bagi">: : Pembagian  </option>
<option value="jumlah">+ : Penjumlahan  </option>
<option value="kurang">- : Pengurangan  </option>
</select>



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
if(isset($_POST['rumus'])) {$rumus=$_POST['rumus'];}else{$rumus= '';}


//MENAMPILKAN HASIL SUBMITE
echo "$rumus <br> $var1 <br> $var2 <br> ";

}

?>


