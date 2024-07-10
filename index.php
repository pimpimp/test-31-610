<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางข้อมูล</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>ตารางข้อมูล</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>ห้อง</th>
        </tr>
        <?php
        // สร้างข้อมูลสำหรับตาราง
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td> พิมพ์ชนก </td>";
            echo "<td> สุขนุ่ม </td>";
            echo "<td> 6/10 </td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
        $a = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,
        21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40);
                echo "มีนักเรียนจำนวน".count($a);
    ?>
</body>
</html>
