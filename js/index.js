  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
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
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});