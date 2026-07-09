<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการผู้เข้าพัก - สไตล์พาสเทล</title>
    <style>
        /* จัดตำแหน่งหน้าเว็บให้อยู่ตรงกลางและเปลี่ยนฟอนต์ */
        body {
            font-family: 'Kanit', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6; /* พื้นหลังสีเทาอมเขียวอ่อนๆ */
            color: #4A4A4A;
            padding: 50px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* กล่องครอบตารางเพื่อให้มีมิติโค้งมนและเงาพาสเทลเบาๆ */
        .table-container {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(149, 157, 165, 0.15);
            overflow: hidden;
            padding: 10px;
        }

        /* ตกแต่งตัวตาราง */
        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 750px;
            font-size: 15px;
        }

        /* หัวตารางสีฟ้าพาสเทลนุ่มๆ */
        thead tr {
            background-color: #EBF4FA; /* สีฟ้าพาสเทลอ่อน */
            color: #5B7B9C; /* สีตัวอักษรน้ำเงินอมเทา */
            font-weight: 600;
        }

        th, td {
            padding: 16px 20px;
            text-align: center;
            border-bottom: 1px solid #F0F4F8; /* เส้นคั่นแถวสีจางๆ */
        }

        /* ใช้ชื่อผู้เข้าพักเป็นตัวหนา */
        .guest-name {
            font-weight: 600;
            color: #333333;
        }

        /* ไฮไลท์แถวเมื่อเมาส์ชี้ผ่านด้วยสีชมพูพาสเทลจางๆ */
        tbody tr:hover {
            background-color: #FFF0F5; /* Lavender Blush Pastel */
            transition: background-color 0.3s ease;
        }

        /* ตกแต่งรูปภาพชินจังและรูปอื่นๆ ให้ละมุนขึ้น */
        img {
            border-radius: 12px; /* ทำมุมมน */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06); /* ใส่เงาบางๆ */
            object-fit: cover;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    
<?php
    include "action/connect.php";

    $sql = "SELECT * FROM orderss";
    $result = mysqli_query($con, $sql);
    
    // ลบ var_dump($result) ออกให้ถาวรแล้วครับ หน้าเว็บจะไม่มีตัวหนังสือแปลกๆ ด้านบนแล้ว!
?>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>รหัสรายการ</th>
                <th>ชื่อผู้เข้าพัก</th>
                <th>ชำระเงิน</th>
                <th>ประเภท</th>
                <th>ห้อง</th>
                <th>ภาพ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $order){ ?>
            <tr>
                <td><?php echo $order["order_id"]; ?></td>
                <td class="guest-name"><?php echo $order["name"]; ?></td>
                <td><?php echo $order["Payment"]; ?></td>
                <td><?php echo $order["usage_type"]; ?></td>
                <td><?php echo $order["room_id"]; ?></td>
                <td><img src="<?php echo $order["image"]; ?>" width="100" height="75"></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>