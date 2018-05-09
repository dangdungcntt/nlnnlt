<?php
/**
 * Created by PhpStorm.
 * User: dangdung
 * Date: 03/04/2018
 * Time: 10:25
 */

$conn = mysqli_connect('localhost', 'root', 'password', 'QuanLySV');

$query = "SELECT Hodem, Ten, Ngaysinh, GioiTinh FROM tblHoso WHERE Malop = 'K55-CNTT-3'";

$result = mysqli_query($conn, $query);

?>
<html>
<head>
    <title>Cau 1A</title>
</head>
<body>
<div class="container">
    <table>
        <thead>
        <tr>
            <th>Hodem</th>
            <th>Ten</th>
            <th>Ngaysinh</th>
            <th>GioiTinh</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['Hodem'] ?></td>
                <td><?php echo $row['Ten'] ?></td>
                <td><?php echo $row['Ngaysinh'] ?></td>
                <td><?php echo $row['GioiTinh'] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
