<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Đặt lịch hỗ trợ </title>
  <meta property="og:image" content="<?= base_url() ?>images/cover.jpg">
  <meta property="og:image:width" content="720">
  <meta property="og:image:height" content="378">
  <!-- <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script> -->
  <link rel='stylesheet prefetch' href='<?php echo base_url() ?>css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='<?php echo base_url() ?>css/bootstrap-theme.min.css'>
  <link rel='stylesheet prefetch' href='<?php echo base_url() ?>css/bootstrapValidator.min.css'>
  <link rel='stylesheet prefetch' href='<?php echo base_url() ?>css/font-awesome.css'>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">

  <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>

<body>
 <div class="container">
  <div class="row">
  <div class="input-group" style="margin-top:50px;padding-left: 685px;margin-bottom: -60px;padding-right: 226px;">
    <span class="input-group-addon"><i class="glyphicon glyphicon-print"></i></span>
    <input type="button" onclick="printData()" id="cmd" class="form-control btn-success" value="Click vào đây để in giấy hẹn" >
  </div>
  </div>
</div>
<div class="container" id="myTable" style="padding-left: 50px; padding-right: 30px;"> 
  <?php foreach ($khoa as $value): ?>            

   <div class="row"  style="margin-top: 100px; position: relative;" >
    <span class="anh" style="width: 100%;  float: left; position: absolute; top: 150px; opacity: 0.3; transform: rotate(17deg); -webkit-transform: rotate(345deg);-ms-transform: rotate(17deg);-moz-transform: rotate(17deg);font-size: 55px;}">Phong CTSV - HUMG -  <?= $value['id'] ?></span>
    <div class="col-xs-3 col-xs-offset-2" style="float: left; clear: both; z-index: 999">

     <div class="phongban" style="text-align: center;">
       <div class="truong">
         TRƯỜNG ĐẠI HỌC MỎ - ĐỊA CHẤT
       </div>
       <div class="phong">
         <b>PHÒNG CÔNG TÁC SINH VIÊN</b>
       </div>
     </div>

   </div>
   <div class="col-xs-4 col-xs-offset-1" style="float: right;">
     <div class="phongban" style="text-align: center;">
       <div class="truong">
         <b>Cộng hòa xã hội chủ nghĩa Việt Nam</b>
       </div>
       <div class="phong">
         <b>Độc lập - Tự do - Hạnh phúc</b>
       </div>
     </div>
   </div>    
 </div> 
 <div class="khoangcach" style="margin-bottom: 50px;clear: both;"></div>
 <div class="row giayhen"  style="">
   <div class="col-md-12">
     <div class="giayhen1"  style="text-align: center;">
       <h2>GIẤY HẸN TIẾP SINH VIÊN</h2>

     </div>
   </div>  
 </div>
 <div class="row noidung">
   <div class="col-md-12">
     <div class="noidung1">
       <div class="noidung2" style="text-indent: 30px;">
         Phòng Công tác sinh viên đã nhận được phiếu đăng ký hỗ trợ của Anh/Chị: <b><?= $value['hoten'] ?></b>
         <p style="text-indent: 30px;">Mã sinh viên: <b><?= $value['msv'] ?></b> </p>
         <p style="text-indent: 30px;">Điện thoại: <b><?= $value['dt'] ?></b></p> 

       </div>
       <div class="noidung2" style="text-indent: 30px;">
         Phòng Công tác sinh viên đề nghị Anh/Chị: <b><?= $value['hoten'] ?></b> có mặt tại phòng A113, thời gian từ <b><?= $value['time'] ?></b>, ngày <b><?= $value['ngay'] ?></b> để được hỗ trợ. 
       </div>
       <div class="noidung2" style="text-indent: 30px;">
        Khi đi đề nghị mang theo:
         <ul style="list-style-type: none;" >
          <li>- Giấy hẹn</li>
          <li>- Thẻ sinh viên</li>
        </ul>
      </div>
    </div>
  </div>  
</div>

<?php endforeach ?>
</div>

<script src='<?php echo base_url() ?>js/jquery.min.js'></script>
<script src='<?php echo base_url() ?>js/bootstrap.min.js'></script>
<script src='<?php echo base_url() ?>js/bootstrapvalidator.min.js'></script>
<script src="<?php echo base_url() ?>js/moment.js"></script>
<script src="<?php echo base_url() ?>js/jquery.isloading.min.js"></script>
<script src="<?php echo base_url() ?>js/index.js"></script>

<script type="text/javascript">
  function printData()
  {
   var divToPrint=document.getElementById("myTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
 }

</script>


</body>

</html>