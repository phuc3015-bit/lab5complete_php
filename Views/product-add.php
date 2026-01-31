<div class="container mt-5">
    <h3>Thêm sinh viên mới</h3>
    <form action="index.php?page=product-store" method="POST">
        <div class="mb-3">
            <label>Họ và Tên</label>
            <input type="text" name="fullname" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mã sinh viên</label>
            <input type="text" name="student_code" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
</div>