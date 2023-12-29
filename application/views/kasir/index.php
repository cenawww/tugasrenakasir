<h2>Program Kasir Sederhana</h2>
<form method="post" action="<?php echo base_url('kasir/proses_pembayaran'); ?>">
    <label for="item">Nama Item:</label>
    <input type="text" name="item" required><br>

    <label for="harga">Harga Item:</label>
    <input type="number" name="harga" required><br>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required><br>

    <input type="submit" value="Proses Pembayaran">
</form>