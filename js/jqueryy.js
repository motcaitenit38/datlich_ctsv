function myFunction() {        
        var x = Number(document.getElementById("thu").value);
        if (moment().day() > x) x += 7;
        var ketqua = moment().day(x).format("DD/MM/YYYY");
        document.getElementById("ngay").value=ketqua;
        document.getElementById("demo1").innerHTML=ketqua;         
    }
function checkradio(){
        if (document.getElementById("radiochecksang").checked == true)
           {
                document.getElementById("timesang").style.display = "block";
                document.getElementById("timechieu").style.display = "none";
                // alert('time sang');
                
            }
            else if (document.getElementById("radiocheckchieu").checked == true)
           {
                document.getElementById("timechieu").style.display = "block";
                document.getElementById("timesang").style.display = "none";
                // alert('time chieu');
            }
            
        }

 	$('#myForm').validate({
    hoten: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Vui lòng điền họ và tên'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Điền địa chỉ email của bạn'
                    },
                    emailAddress: {
                        message: 'Định dạng email không đúng'
                    }
                }
            },
            dt: {
                validators: {                    
                    notEmpty: {
                        message: 'Vui lòng điền số điện thoại của bạn'
                    },
                    phone: {
                        country: 'VI',
                        message: 'Số điện thoại không đúng'
                    }
                }
            },
            msv: {
                validators: {
                     stringLength: {
                        min: 5,
                    },
                    notEmpty: {
                        message: 'Vui lòng điền mã sinh viên của bạn'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            thu: {
                validators: {
                    notEmpty: {
                        message: 'Vui lòng chọn ngày bạn muốn đặt lịch'
                    }
                }
            },
            ngay: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            noidung: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 500,
                        message:'Vui lòng nhập nội dung có độ dài từ 10 đến 500 ký tự'
                    },
                    notEmpty: {
                        message: 'Bạn chưa ghi nội dung cần hỗ trợ'
                    }
                    }
                },
            
            submitHandler:function(form) { 

        $hoten = $('#hoten').val(); 
        $email = $('#email').val(); 
        $dt = $('#dt').val(); 
        $msv = $('#msv').val(); 
        $ngay = $('#ngay').val(); 
        $noidung = $('#noidung').val(); 

        $thu = $('select#thu').val();
        $buoi = $('.radiocheck:checked').val();
        $timesang = $('.radiochecktimesang:checked').val();
        $timechieu = $('.radiochecktimechieu:checked').val();

        // kiem tra check buoi
        
        
        // kiem tra check buoi
        if($hoten =="" || $email =="" || $dt =="" || $msv =="" || $thu =="" || $ngay =="" || $buoi =="" || $noidung =="")
        {
            $('#kinlich1').show();

        }  
         else{
            
            $.isLoading({ text: "Loading" });
            $('#kinlich1').hide();

            if($thu == 2){
                $thu = "Thứ 3";
            }else if( $thu == 4){
                $thu = "Thứ 5";
            }
            if($buoi == "sang"){
                $buoi = "Buổi sáng";
                $time=$timesang;
                

            }
            else if($buoi == "chieu"){
                $buoi = "Buổi chiều";
                $time = $timechieu;
            }

            
            
            $.ajax({
                url: 'Datlich/ajax',
                type: 'POST',
                dataType: 'json',
               
                data: {
                    hoten: $('#hoten').val(),
                    email: $('#email').val(),
                    dt: $('#dt').val(),
                    msv: $('#msv').val(),
                    thu: $thu,
                    ngay: $('#ngay').val(),
                    buoi: $buoi,
                    time: $time,
                    noidung: $('#noidung').val()
                },

            })
                      
            .done(function(truong) {
                
                $.isLoading( "hide" );
                $("#myModal").modal({
                  backdrop: 'static',
                  keyboard: false
                });                
                document.getElementById("truong").innerHTML=$('#hoten').val();
                document.getElementById("truong1").innerHTML=$buoi;
                document.getElementById("truong2").innerHTML=$thu;
                document.getElementById("thoigian").innerHTML=$time;
                document.getElementById("truong3").innerHTML=$('#ngay').val();
                
                $("input").val("");
            })
            
            .fail(function(dm) {
                
                $.isLoading( "hide" );
                // console.log("error");
                $('#kinlich').show();
                // document.getElementById("kinlich").css('display','block');
                document.getElementById("truong4").innerHTML=$thu;
                document.getElementById("truong5").innerHTML=$buoi;
                document.getElementById("truong6").innerHTML=$('#ngay').val();
            })                   

        } 
    }

});
 