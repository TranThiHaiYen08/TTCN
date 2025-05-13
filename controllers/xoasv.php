<?php
$MaSinhVien = $_GET['MaSinhVien'];
$conn->query("DELETE FROM sinhvien WHERE MaSinhVien = $MaSinhVien");
header("Location: index.php");
exit;
