<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลห้องพัก - สไตล์พาสเทล</title>
    <style>
        body {
            font-family: 'Kanit', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #4A4A4A;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .table-container {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(149, 157, 165, 0.15);
            overflow: hidden;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 750px;
            font-size: 15px;
        }

        /* หัวตารางโทนสีเขียวพาสเทลมินิมอล แยกจากหน้าแรกที่เป็นสีฟ้า */
        thead tr {
            background-color: #E8F5E9; /* สีเขียวพาสเทลอ่อน */
            color: #4E6E52; /* สีตัวอักษรเขียวเข้มอมเทา */
            font-weight: 600;
        }

        th, td {
            padding: 16px 20px;
            text-align: center;
            border-bottom: 1px solid #F0F4F8;
        }

        .room-id {
            font-weight: 600;
            color: #333333;
        }

        /* ไฮไลท์แถวเมื่อเมาส์ชี้ผ่านด้วยสีเหลืองพาสเทลจางๆ */
        tbody tr:hover {
            background-color: #FFFDE7; 
            transition: background-color 0.3s ease;
        }

        /* ตกแต่งตัวเลขราคาให้เด่นขึ้น */
        .price-tag {
            color: #2E7D32;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<?php
    // ดึงไฟล์เชื่อมต่อฐานข้อมูลตัวเดิมเข้ามาใช้งาน
    include "action/connect.php";

    // เปลี่ยนคำสั่ง SQL ดึงข้อมูลจากตาราง rooms
    $sql = "SELECT * FROM rooms";
    $result = mysqli_query($con, $sql);
?>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>รหัสห้อง (room_id)</th>
                <th>อนุญาตให้สูบบุหรี่ (smoke)</th>
                <th>อ่างอาบน้ำ (bathtub)</th>
                <th>ราคา (price)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $room){ ?>
            <tr>
                <td class="room-id"><?php echo $room["room_id"]; ?></td>
                <td><?php echo $room["smoke"]; ?></td>
                <td><?php echo $room["bathtub"]; ?></td>
                <td class="price-tag"><?php echo number_format($room["price"]); ?> บาท</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>