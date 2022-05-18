<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD LKA</title>
  <style>
    .flex {
      width: 80%;
      display: flex;
      margin: auto;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .flex-start {
      width: 80%;
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: center;
    }
    .mx-24 {
      margin: 4em 24em;
      padding: 10px 0px;
    }
  </style>
</head>
<body>
<div class="flex">
    <h3>Belajar CRUD Sederhana | Mata Pelajaran LKA</h3>

    <h2>Data Pegawai</h2>
  </div>

  <br/>
  <br/>

  <a href="/guru" class="mx-24"> Kembali</a>
  <div class="flex-start">
  <form action="/guru/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Pendidikan <input type="text" name="pendidikan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
    </div>
</body>
</html>