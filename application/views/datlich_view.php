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
    <div class="container-fluid">
       
        <form id="myForm">
            <div class="well form-horizontal" id="contact_form">
                <fieldset>
                    <!-- Form Name -->
                    <div class="alert alert-success" role="alert" id="success_message1">Lưu ý: <i class="glyphicon glyphicon-thumbs-up"></i> 
                        <ul>
                            <li>Vui lòng điền <b>đầy đủ</b>, <b>chính xác</b> thông tin cá nhân và yêu cầu.</li>
                            <li>Đăng ký thành công, truy cập vào email để in <b>Giấy hẹn</b></li>
                            <li>Khi đi nhớ mang theo <b>Giấy hẹn</b>, <b>Thẻ sinh viên</b></li>
                            <li>Phòng Công tác Sinh viên <b>KHÔNG</b> làm việc với sinh viên không đeo thẻ sinh viên và không có giấy hẹn</li>
                        </ul>
                    </div>                
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Họ và tên</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="hoten" placeholder="Nguyễn Văn A" class="form-control" id="hoten" type="text">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="E-Mail" class="form-control" type="text" id="email">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Số điện thoại</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="dt" placeholder="0987654321" class="form-control" type="text" id="dt">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Mã sinh viên</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="msv" placeholder="1421000000" class="form-control" type="text" id="msv">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Chọn ngày hỗ trợ</label>

                        <div class="col-xs-12 col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select id="thu" name="thu" class="form-control selectpicker" onchange="myFunction()">
                                    <option value="">Chọn ngày</option>
                                    <option value="2">Thứ 3</option>
                                    <option value="4">Thứ 5</option>          
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Ngày bạn đăng ký: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon alert alert-danger" id="demo1">Bạn chưa chọn ngày...</span>
                                <input name="ngay" placeholder="dd/mm/yy" class="form-control" type="hidden" id="ngay">
                            </div>
                        </div>
                    </div>
                    <!-- Text input-->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Buổi:</label>
                        <div class="col-md-4">
                            <div class="radio" id="checkbuoi1">
                                <label>
                                    <input type="radio" onclick="checkradio()" checked class="radiocheck"  id="radiochecksang" name="buoi" value="sang" /> Sáng (8h - 11h)
                                </label>
                            </div>
                            <div class="radio" id="checkbuoi2">
                                <label>
                                    <input type="radio" onclick="checkradio()" class="radiocheck" id="radiocheckchieu" name="buoi" value="chieu" /> Chiều (14h - 17h)
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- time buoi sang -->
                    <div class="form-group" id="timesang">
                        <label class="col-md-4 control-label">Thời gian:</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <div class="col-md-6">
                                    <label>
                                    <input type="radio" checked class="radiochecktimesang" name="timesang" value="8h-8h30" /> Từ 8h - 8h30
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimesang" name="timesang" value="8h30-9h" /> Từ 8h30 - 9h
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimesang" name="timesang" value="9h-9h30" /> Từ 9h - 9h30
                                </label>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                    <input type="radio" class="radiochecktimesang" name="timesang" value="9h30-10h" /> Từ 9h30 - 10h
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimesang" name="timesang" value="10h-10h30" /> Từ 10h - 10h30
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimesang" name="timesang" value="10h30-11h" /> Từ 10h30 - 11h
                                </label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- time buoi sang -->
                    <!-- time buoi chieu -->
                    <div class="form-group" id="timechieu" hidden>
                        <label class="col-md-4 control-label">Thời gian:</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <div class="col-md-6">
                                    <label>
                                    <input type="radio" checked class="radiochecktimechieu" name="timechieu" value="14h-14h30" /> Từ 14h - 14h30
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimechieu" name="timechieu" value="14h30-15h" /> Từ 14h30 - 15h
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimechieu" name="timechieu" value="15h-15h30" /> Từ 15h - 15h30
                                </label>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                    <input type="radio" class="radiochecktimechieu" name="timechieu" value="15h30-16h" /> Từ 15h30 - 16h
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimechieu" name="timechieu" value="16h-16h30" /> Từ 16h - 16h30
                                </label>
                                <label>
                                    <input type="radio" class="radiochecktimechieu" name="timechieu" value="16h30-17h" /> Từ 16h30 - 17h
                                </label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- time buoi chieu -->
                    <div class="alert alert-danger" id="kinlich" hidden>
                        <strong>Xin lỗi! </strong> Vào  <b id="truong5"></b>,  <b id="truong4"></b>, Ngày <b id="truong6"></b> đã kín lịch, hoặc bạn đã đặt lịch thành công. Bạn vui lòng chọn lịch vào thời gian khác, hoặc đến hỗ trợ và các ngày thứ 2, thứ 4. thứ 6.
                    </div>
                    <!-- Text area -->
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nội dung cần hỗ trợ</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                
                                <textarea class="form-control" name="noidung" id="noidung" placeholder="Nội dung, vấn đề bạn cần hỗ trợ"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Success message -->


                    <!-- Button -->
                    <div class="alert alert-danger" id="kinlich1" hidden>
                        <strong>Xin lỗi! </strong> Bạn vui lòng điền đầy đủ thông tin .
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-warning nutajax">Đặt lịch <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>

                </fieldset>
                       
      </div>
  </form>

<div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          
                          <h4 class="modal-title">Đăng ký thành công</h4>
                      </div>
                      <div class="modal-body">
                          <div class="alert alert-success" role="alert" id="success_message1">Hoàn thành  <i class="glyphicon glyphicon-thumbs-up"></i> Cảm ơn bạn <b id="truong"></b> đã đặt lịch hẹn hỗ trợ vào  <b id="truong1"></b>, <b id="truong2"></b>, ngày <b id="truong3"></b>, thời gian từ <b id="thoigian"></b>.</div>
                          <div class="alert alert-success" role="alert" id="success_message1">Bạn vui lòng vào mail bạn đã đăng ký để in giấy hẹn, Phòng CTSV chỉ làm việc khi bạn cầm giấy hẹn trên tay. </div>
                          <div class="alert alert-warning" role="alert" id="success_message1"> Lưu ý: Yêu cầu đeo thẻ sinh viên khi đến làm việc. <br> Chấp hành nội quy, quy định của nhà trường. </div>
                      </div>
                      <div class="modal-footer">
                          <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="btn btn-danger">Truy cập vào email...</a>                          
                      </div>
                  </div>

              </div>
          </div> 
          </div>  
  </div>


  <script src='<?php echo base_url() ?>js/jquery.min.js'></script>
  <script src='<?php echo base_url() ?>js/bootstrap.min.js'></script>
  <script src='<?php echo base_url() ?>js/bootstrapvalidator.min.js'></script>
  <script src="<?php echo base_url() ?>js/moment.js"></script>
  <script src="<?php echo base_url() ?>js/jquery.isloading.min.js"></script>
  <script src="<?php echo base_url() ?>js/index.js"></script>  
  <script src="<?php echo base_url() ?>js/a/jquery.validate.js"></script>
  <script src="<?php echo base_url() ?>js/a/jquery.form.js"></script>
  <script src="<?php echo base_url() ?>js/a/additional-methods.min.js"></script>
  <script src="<?php echo base_url() ?>js/jqueryy.js"></script>
</body>
</html>