<!DOCTYPE html>
<html>
<head>
    <title>Tambah Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Event Baru</h2>
        <form action="/events/simpan" method="POST">
            <div class="form-group">
                <label>Nama Event</label>
                <input type="text" name="nama_event" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="../events" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
