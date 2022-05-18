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

      <h2>Data guru</h2>
  </div>

  <br/>
  <br/>

  <a href="/guru" class="mx-24"> Kembali</a>

  @foreach($guru as $g)
    <form action="/guru/update" method="post" class="flex-start">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $g->guru_id }}"> <br/>
      Nama <input type="text" required="required" name="nama" value="{{ $g->guru_nama }}"> <br/>
      Pendidikan <input type="text" required="required" name="pendidikan" value="{{ $g->guru_pendidikan }}"> <br/>
      Umur <input type="number" required="required" name="umur" value="{{ $g->guru_umur }}"> <br/>
      Alamat <textarea required="required" name="alamat">{{ $g->guru_alamat }}</textarea> <br/>
      <input type="submit" value="Simpan Data">
    </form>
  @endforeach
</body>
</html>