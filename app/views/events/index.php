<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Event</h2>
        <a href="/events/create" class="btn btn-primary mb-3">Tambah Event</a>
        
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Event</th>
                </tr>
            </thead>
            <tbody>
            <?php if(empty($events)): ?>
                <tr>
                    <td colspan="6" class="text-center">Belum ada data event</td>
                </tr>
            <?php else: ?>
                <?php foreach ($event as $index => $event): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($sponsor['nama_event']) ?></td>
                        <td>
                            <a href="index.php?controller=sponsor&action=edit&id=<?= $event['id'] ?>" 
                            class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?controller=sponsor&action=delete&id=<?= $event['id'] ?>" 
                            class="btn btn-sm btn-danger" 
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
    <?php endforeach; ?>
<?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <div class="container mt-4">
        <a href="../" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>