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

  <a href="/guru/tambah" class="mx-24"> + Tambah Guru Baru</a>
  <div class="flex">
    <table border="1">
      <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
      </tr>
      @foreach($guru as $g)
      <tr>
        <td>{{ $g->guru_nama }}</td>
        <td>{{ $g->guru_pendidikan }}</td>
        <td>{{ $g->guru_umur }}</td>
        <td>{{ $g->guru_alamat }}</td>
        <td>
          <a href="/guru/edit/{{ $g->guru_id }}">Edit</a>
          |
          <a href="/guru/hapus/{{ $g->guru_id }}">Hapus</a>
        </td>
      </tr>
      @endforeach
    </table>
    </div>
</body>
</html>