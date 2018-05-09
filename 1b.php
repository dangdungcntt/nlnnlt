<?php
/**
 * Created by PhpStorm.
 * User: dangdung
 * Date: 03/04/2018
 * Time: 10:25
 */

$conn = mysqli_connect('localhost', 'root', 'password', 'QuanLySV');

$query = "SELECT tblMonhoc.TenMon, tblMonhoc.SoTC 
          FROM tblLopMonHoc JOIN tblMonhoc
          ON tblLopMonHoc.MonHoc = tblMonhoc.Mamon 
          WHERE tblLopMonHoc.Malop = 'K55-CNTT-3'";

$result = mysqli_query($conn, $query);

?>
<html>
<head>
    <title>Cau 1B</title>
</head>
<body>
<div class="container">
    <table>
        <thead>
        <tr>
            <th>Tenmon</th>
            <th>SoTC</th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><? echo $row['Tenmon'] ?></td>
                <td><? echo $row['SoTC'] ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
