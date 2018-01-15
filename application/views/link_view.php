<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    background-color: blue;
    color: white;
}
	</style>
</head>
<body>
	<div class="email" style="font-size: 20px">
		<p> Phòng Công tác Sinh viên xác nhận bạn: <?= $hoten ?> đã đặt lịch thành công.</p>
		<p>Bạn click vào <b><a href="<?= base_url() ?>Giayhen/intgh/<?= $id ?>" style="background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;">ĐÂY</a> </b> để in giấy hẹn làm việc</p>
		<p>Khi đi, yêu cầu mang theo giấy hẹn và đeo thẻ sinh viên.</p>
		<p>Lưu ý: Đi đúng khung giờ <b><?= $time ?></b> đã đăng ký (ngoài thời gian <b><?= $time ?></b> phòng không làm việc).</p>
	</div>
	
	<a href="<?= base_url() ?>Giayhen/intgh/<?= $id ?>" style="background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;">IN GIẤY HẸN</a>
</body>
</html>