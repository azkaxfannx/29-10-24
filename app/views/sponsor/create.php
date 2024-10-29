<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sponsor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Sponsor Baru</h2>
        <form action="index.php?controller=sponsor&action=create" method="POST">
            <div class="form-group">
                <label>Event</label>
                <select name="event_id" class="form-control" required>
                    <option value="">Pilih Event</option>
                    <?php foreach ($events as $event): ?>
                        <option value="<?= $event['id'] ?>"><?= htmlspecialchars($event['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label>Nama Sponsor</label>
                <input type="text" name="sponsor_name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label>Kontribusi</label>
                <textarea name="contribution" class="form-control" required></textarea>
            </div>
            
            <div class="form-group">
                <label>Jumlah Kontribusi</label>
                <input type="number" name="contribution_amount" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="../sponsor" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
