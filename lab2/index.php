<!DOCTYPE html>
<html>

<head>
    <title>PHP Object Oriented Programming</title>
    <!-- Unicode Vietnamese -->
    <meta charset="utf-8">
    <meta name="author" content="HuynhThaiHung.com" />
    <!-- css definition file -->
    <link href="../lap1/style.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <div class="row">
            <?php
            require_once("member.php");
            // create new user info
            $sv = new member("Nguyen Van A", "email1@gmail.com", 12345);
            //output user info
            echo "<h2>-- Member information --</h2>";
            echo "Code: " . $sv->get_idmember() . "<br/>";
            echo "Fullname: " . $sv->get_fullname() . "<br/>";
            echo "Email: " . $sv->get_email() . "<br/>";
            ?>
            <?php
             $sv2 = new member("Nguyen Van B", "email2@gmail.com", 123456);
            echo "<h2>---More information--</h2>";
            echo "Code: " . $sv2->get_idmember() . "<br/>";
            echo "Fullname: " . $sv2->get_fullname() . "<br/>";
            echo "Email: " . $sv2->get_email() . "<br/>";
            ?>
        </div>
        <footer>
            <p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
        </footer>

    </div>
</body>

</html>

<?php
include("staff.php");

$staff1 = new staff("Nguyen Van A", 5678, "");
echo "<h2>--- Add: Object Oriented PHP --</h2>";
echo "Full name: " . $staff1->get_fullname() . "<br/>";
echo "Country code: " . $staff1->get_countrycode() . "<br/>";
?>

<?php
$staff2 = new staff("Nguyen Van B", 1234, "Guard");
echo "<h2>---Staff--</h2>";
echo "Mã nhân viên: " . $staff2->get_staffcode() . "<br/>";
echo "Họ tên: " . $staff2->get_fullname() . "<br/>";
echo "Mã QG: " . $staff2->get_countrycode() . "<br/>";
echo "Bộ phận: " . $staff2->get_part() . "<br/>";
?>
