<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Quản lý sinh viên</h2>
        <a href="index.php?page=product-add" class="btn btn-success">Thêm mới</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mã SV</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['ID'] ?></td>
                <td><?= $p['fullname'] ?></td>
                <td><?= $p['student_code'] ?></td>
                <td><?= $p['email'] ?></td>
                <td>
                    <a href="index.php?page=product-detail&id=<?= $p['ID'] ?>" class="btn btn-info btn-sm">Xem</a>
                    <a href="index.php?page=product-edit&id=<?= $p['ID'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="index.php?page=product-delete&id=<?= $p['ID'] ?>" 
                       onclick="return confirm('Chắc chắn xóa?')" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>