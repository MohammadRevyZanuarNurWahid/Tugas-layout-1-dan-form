<html>
<head>
		<title>form pada HTML</title>
</head>

<body>
<form>
	Nama : &nbsp &nbsp <input type="text" name="nama"></br>
	<p>Alamat : &nbsp <input tpye="text" name="alamat"></br/>
	<p>jurusan : &nbsp 
	<select>
		<option>Teknik Informatika</option>
		<option>Sistem Informasi</option>
		<option>Ilmu Komputer</option>
	</select>
	<br/>
	<p>Jenis Kelamin :
		<input type="radio" name="jk" value="laki-laki" checked /> 
			Laki - laki
		<input type="radio" name="jk" value="Perempuan" />
			Perempuan
		<br/>
	<p>Skill yang dikuasai :
		<input type="checkbox" name="php"> PHP
		<input type="checkbox" name="mobile"> MOBILE
		<input type="checkbox" name="desk"> DESKTOP
		<br/>


		<p><input type="submit" value="proses">
</form>
</body>
</html>