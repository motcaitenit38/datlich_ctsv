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
    

    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</head>

<body>
    
    <div class="container-fluid">        
            <div class="well form-horizontal" id="contact_form">
            <fieldset>                
                <legend>Lọc danh sách theo ngày, theo buổi. (ví dụ, ngày 28/11/2017, buổi sáng.)

                </legend>          
                <div class="form-group">
                    <label class="col-md-2 control-label">Chọn ngày hỗ trợ</label>
                    <div class="col-md-3 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select id="thu" name="thu" class="form-control selectpicker" onchange="myFunction()">
                                <option value="">Chọn ngày</option>
                                <option value="2">Thứ 3</option>
                                <option value="4">Thứ 5</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 inputGroupContainer">
                        <div class="input-group">
                        	<span>Ngày: </span>
                            <label class=" control-label alert alert-danger" id="demo1">Chưa chọn ngày</label>
                            <input name="ngay" placeholder="dd/mm/yy" class="form-control" type="hidden" id="ngay">
                        </div>
                    </div>
                    <div class="col-md-3" id="radioabc">
                        	<span class="buoi">Buổi:</span>
                            <label>                            	
                                <input type="radio" id="sang" class="radiocheck" name="buoi" value="sang" /> Sáng
                            </label>                        
                            <label>                            	
                                <input type="radio" id="chieu" class="radiocheck" name="buoi" value="chieu" /> Chiều
                            </label>                            
                        </div>                  
                </div>                
            </fieldset>

            <table class="table table-bordered table-inverse table-hover" id="myTable" border="1" cellpadding="5" cellspacing="0">
            	<thead>
            		<tr style="border: 0;">
            			<th colspan="10">Danh sách đăng ký lịch hỗ trợ <a href="#" class="btn btn-danger" onClick="printData()" style="float: right;"><i class="glyphicon glyphicon-print""></i></a></th>
                        
            		</tr>
            	</thead>
            	<tbody id="chenvao">
            		<tr>
            			<th>ID</th>
                        <th>Họ tên</th>
            			<th>Điện thoại</th>
            			<th>Email</th>
            			<th>MSV</th>
            			<th>Thứ</th>
            			<th>Ngày</th>
                        <th>Buổi</th>
            			<th>Thời gian</th>
                        <th>Nội dung</th>
            			<th>Tác vụ</th>
            		</tr>
            		<?php foreach ($khoa as $value): ?>
            			<tr>
                        <td><?= $value['id'] ?></td>                     
            			<td><?= $value['hoten'] ?></td>            			
            			<td><?= $value['dt'] ?></td>            			
            			<td><?= $value['email'] ?></td>            			
            			<td><?= $value['msv'] ?></td>            			
            			<td><?= $value['thu'] ?></td>            			
            			<td class="dm1"><?= $value['ngay'] ?></td>            			
            			<td class="dm"><?= $value['buoi'] ?></td>            			
                        <td><?= $value['time'] ?></td>
                        <td><?= $value['noidung'] ?></td>
                                               
            			<td><button type="submit" onclick="xoadulieu(<?= $value['id'] ?>)" class="btn btn-danger glyphicon glyphicon-remove nutajax"></button></td>            			
            		</tr>
            		<?php endforeach ?>
            		
            	</tbody>
            </table>
        </div>
    </div>
    <!-- /.container -->

    <script src='<?php echo base_url() ?>js/jquery.min.js'></script>
    <script src='<?php echo base_url() ?>js/bootstrap.min.js'></script>
    <script src='<?php echo base_url() ?>js/bootstrapvalidator.min.js'></script>
    <script src="<?php echo base_url() ?>js/moment.js"></script>
    <script src="<?php echo base_url() ?>js/index.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.table2excel.min.js"></script>
    
 </script>
    
    <script>
    function myFunction() {        
        var x = Number(document.getElementById("thu").value);
    if (moment().day() > x) x += 7;
    var ketqua = moment().day(x).format("DD/MM/YYYY");
        document.getElementById("ngay").value=ketqua;
        document.getElementById("demo1").innerHTML=ketqua;  
      $(':radio').prop('checked', false); // uncheck radio
      $("#radioabc").css("color","red");
    	$('tr').each(function() {
        var src1 = $(this).find('.dm1').text();       
        if ((src1 == ketqua)){
            $(this).show();


        } else if (src1 !=''){
            $(this).hide();
        }
    });
     }

 </script>

 <script type="text/javascript">
 	 // aaaaaaaaaaaa
        $('input[type="radio"]').change(function () {
            $("#radioabc").css("color","black");
 		   var val1 = $('[name=buoi]:checked').val();    		
    		if(val1 =="sang"){
    			val1 ="Buổi sáng";
    		}
    		else if(val1=="chieu"){
    			val1 ="Buổi chiều"; 
    			}
    			var ketqua = $("#ngay").val();
    $('tr').each(function() {
        var src = $(this).find('.dm').text();
        var src1 = $(this).find('.dm1').text();     

        if ((src == val1) && (src1 == ketqua)){
            $(this).show();


        } else if (src !='' && src1 != ''){
            $(this).hide();
        }
    });
 	});
 </script>	
   

<script type="text/javascript">
    // aaaaaaaaaaaa
             function xuat(){
           $("#myTable").table2excel({
            exclude: ".noExl", // mytable is the table ID or Div ID
            name: "Excel Document Name",
            filename: "my excel file", // my excel file is the name of download file name, you can change it
            fileext: ".xls",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true
        });
    }
            // bbbbbbbbbbbbbb
            function printData()
{
   var divToPrint=document.getElementById("myTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

</script>
<script type="text/javascript">
    function xoadulieu(id) {
        // body...
        $.ajax({
            url: 'Xoa/xoa1',
            type: 'POST',
            dataType: 'json',
            data: {
                id: id
        },
        })
        .done(function() {
            location.reload();
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    }
</script>
    
</body>

</html>