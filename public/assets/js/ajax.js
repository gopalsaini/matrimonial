 

//toster
function showMsg(type,msg){
    if(type=='error'){
        $('.toast-body').html('<i class="fa fa-times-circle red"></i> '+msg);
    }else if(type=='success'){
        $('.toast-body').html('<i class="fa fa-check-circle green"></i> '+msg);
    }else{
        $('.toast-body').html('<i class="fa fa-exclamation-circle warning"></i> '+msg);
    }

    $(".toast").toast({ delay: 5000 });
    $('.toast').toast('show');
}

$('.toast').mouseleave(function(){
    $('.toast').toast('hide');
});


//form submit
$("form#test").submit(function(e){
    e.preventDefault();
    
    var formId=$(this).attr('id');
    var formAction=$(this).attr('action');
    var formLoader=$(this).data('loader');
    
    $.ajax({
        url: formAction,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
        },
        data: new FormData(this),
        type: 'post',
        dataType:'json',
        beforeSend: function(){
            $('.'+formLoader).css('display','inline-block');
             $('.button_'+formLoader).prop('disabled', true);
        },
        error:function(xhr,textStatus){
            if (textStatus == 'timeout') {
                showMsg('warning', xhr.status + ': ' + xhr.statusText);
            }else{
                showMsg('error', xhr.status + ': ' + xhr.statusText);
            }
            $('.'+formLoader).css('display','none');
             $('.button_'+formLoader).prop('disabled', false);
        },
        success: function(data){
            $('.button_'+formLoader).prop('disabled', false);
            $('.'+formLoader).css('display','none');
            
            if(data.error){
                showMsg('error',data.msg);
            }else{

                if(data.user_verify){
                    showMsg('success',data.msg);
                    location.href="/dashboard";
                }else{
                    showMsg('success',data.msg);

                    var mobile=$("input[name=mobile]").val();
                    $('#last4digit').html(mobile.substring(6,10));

                    jQuery('#otpsubmitform').show();
                    $("input[name=dig1]").focus();
                    jQuery('#regform').hide();
                    var resendOtpTime=30;
                    interval= setInterval(() => {
                        if(resendOtpTime>0){
                            resendOtpTime--;
                            $('#timer_left').html("00:"+("0" + resendOtpTime).slice(-2));
                        }else{
                            $('#timer_left').css('display','none');
                            $('.otp_registration_resend').css('display','inline-block');
                            clearInterval(interval);
                        }
                    }, 1000);
                }
            }
            
            
        },
        cache:false,
        contentType:false,
        processData:false, 
    });
});

//otp send 
$(document).ready(function(){
    $(".otp_send").on("click", function () {
        var mobile = $("#mobile").val();
        var formAction =base_path+"/user/sendotp";
        var formdata=new FormData();
        formdata.append('mobile', mobile); 
        if(mobile ==''){
            showMsg('error','Please Enter Mobile Number');
        }else{
            var formId="load_register";
            var formLoader=$(this).data('loader');

            $.ajax({
                url: formAction,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                },
                dataType:'json',
                data : formdata,
                type: 'POST',
                beforeSend: function(){
                    $('.'+formLoader).css('display','inline-block');
                    $('.button_'+formLoader).prop('disabled', true);
                    //for resend code
                    $('#'+formLoader).css('display','inline-block');
                    $('#button_'+formLoader).prop('disabled', true);
                },
                error:function(xhr,textStatus){
                    if (textStatus == 'timeout') {
                        showMsg('warning', xhr.status + ': ' + xhr.statusText);
                    }else{
                        showMsg('error', xhr.status + ': ' + xhr.statusText);
                    }
                    $('.'+formLoader).css('display','none');
                    $('.button_'+formLoader).prop('disabled', false);
                    //for resend code
                    $('#'+formLoader).css('display','none');
                    $('#button_'+formLoader).prop('disabled', false);
                },
                success: function(data){ 
                    if(data.error){
                        showMsg('error',data.msg);
                    }else{

                        if(data.user_verify){
                            showMsg('success',data.msg);
                            location.href="/dashboard";
                        }else{
                            showMsg('success',data.msg);
    
                            var mobile=$("input[name=mobile]").val();
                            $('#last4digit').html(mobile.substring(6,10));
    
                            jQuery('#otpsubmitform').show();
                            $("input[name=dig1]").focus();
                            jQuery('#regform').hide();
                            $('#timer_left').css('display','inline-block');
                            $('.otp_registration_resend').css('display','none');
                            var resendOtpTime=30;
                            interval= setInterval(() => {
                                if(resendOtpTime>0){
                                    resendOtpTime--;
                                    $('#timer_left').html("00:"+("0" + resendOtpTime).slice(-2));
                                }else{
                                    $('#timer_left').css('display','none');
                                    $('.otp_registration_resend').css('display','inline-block');
                                    clearInterval(interval);
                                }
                            }, 1000);
                        
                    }
                }
                    $('.button_'+formLoader).prop('disabled', false);
                    $('.'+formLoader).css('display','none');

                    //resend code
                    $('#button_'+formLoader).prop('disabled', false);
                    $('#'+formLoader).css('display','none');
                },
                cache:false,
                contentType:false,
                processData:false,
                timeout: 5000
            });

        }
        
    });
});


function isNumberKey(evt){  

    //var e = evt || window.event;

    var charCode = (evt.which) ? evt.which : evt.keyCode

    if (charCode != 46 && charCode > 31

    && (charCode < 48 || charCode > 57))

    return false;

    return true;

}




$('img').on("error", function() {
  $(this).attr('src', base_url+'images/default-image.png');
});

$('img').on("error", function() {
  $(this).attr('src', base_url+'images/default-image.png');
});

$(document).ready(function(){
    $('#otpFormShow').click(function() {
      $('.otpFormShow').toggle();
    });
});

$(document).ready(function(){ 
    $('body').on('keyup', 'input', function(e){ 
        var inputs = $('input'); 
        if(e.keyCode == 8){
            var index = inputs.index(this);
            if (index != 0)
                inputs.eq(index - 1).val('').focus();    
        }else{
            if($(this).val().length === this.size){
            inputs.eq(inputs.index(this) + 1).focus();
            }
        }  
    });
});

//page scroll ajax
var notscrolly=true;
var notEmptyPost=true;
var newData=true;
var offset=0;

function setSortOrder(){
    offset=0;
    notEmptyPost=true;
    newData=true; 
    $('#productScroll').html('');
    getProductData(); 
}


$(function() {
    $( "#product-range-slider" ).slider({
        range:true,
        min: 0,
        max: 250,
        values: [ 0,250 ],
        slide: function( event, ui ) {
            $('#min_price').val(ui.values[ 0 ]);
            $('#max_price').val(ui.values[ 1 ]);
            $( "#product-range-amount" ).val( "AED." + ui.values[ 0 ] + " - AED." + ui.values[ 1 ] );
        },
        change: function( event, ui ) {
            $('#min_price').val(ui.values[ 0 ]);
            $('#max_price').val(ui.values[ 1 ]);
            
            setSortOrder();
        },
        
    });
    $( "#product-range-amount" ).val( "AED " + $( "#product-range-slider" ).slider( "values", 0 ) +
       " - AED " + $( "#product-range-slider" ).slider( "values", 1 ) );
});

//short by desc 
$(".sort_order").click(function() {
    setSortOrder();
});

$(document).ready(function(){

 $(window).scroll(function(){
    var divheight = $('#productScroll').outerHeight();
    
    if(notscrolly==true && notEmptyPost==true && $(window).scrollTop() + $(window).height()/2 >= divheight){   
        
        getProductData();
    }

 });

});

function getProductData(){ 
    var categorySlug=$('#categorySlug').val();
    var orderBy=$('.sort_order:checked').val();
    var minPrice=$('#min_price').val();
    var maxPrice=$('#max_price').val();

    $.ajax({
        url: base_path+'/products',
        dataType: 'json',
        type: 'GET',
        data: {"offset":offset,"limit":"12","category_slug":categorySlug,"sort_order":orderBy,"min_price":minPrice,"max_price":maxPrice},
        beforeSend:function(){
            notscrolly=false;
            $('.listingloader').show();
        },
        error:function(xhr){
            showMsg('error',"Error: " + xhr.status + ": " + xhr.statusText); 
            $('.listingloader').hide();
        },
        success: function(response){
            if(response.status){
                if(response.total!='12'){
                    notEmptyPost=false;
                }else{
                    offset+=12;
                }

                if(newData){
                    $('#productScroll').html(response.html); 
                    $('#productsTotal').html(response.total);
                    newData=false;
                }else{
                    $('#productScroll').append(response.html); 
                    $('#productsTotal').append(response.total);
                }
                notscrolly=true;
            }
            $('.listingloader').hide();
        }
    });
}

//checkout ajax

function save_to_cart(cart_id,newQuantity){ 
        newData=true;
        var qty = newQuantity

        if(qty){
            var qtys = newQuantity;
        }else{
            var qtys="1";
        }
        
        var loader=$('#cartLoader'+cart_id);
        $.ajax({
            type: "POST",
            dataType:"json",
            url: base_path+'/addtocartform',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
            },
            data:{
                product_id: cart_id, qty:qtys,        
            },
            beforeSend: function(){
                $('.listingloader').show();
            },
            error:function(xhr,textStatus){
                if (textStatus == 'timeout') {
                    showMsg('warning', xhr.status + ': ' + xhr.statusText);
                }else{
                    showMsg('error', xhr.status + ': ' + xhr.statusText);
                }
            },
            success: function(data){
                
                if(data.error){
                    showMsg('error',data.msg);
                    $('.listingloader').hide();
                }else{  
                    $('.listingloader').hide();
                    if(newData){
                        showMsg('success',data.msg);
                        $('.headerAddToCartShow').html(data.html); 
                        $('.productScroll').html(data.updatecart); 
                        newData=false;
                    }else{
                        
                        showMsg('success',data.msg);
                        $('.headerAddToCartShow').append(data.html); 
                        $('.productScroll').append(data.updatecart); 
                    }            
                    
                    
                }
                
                
                //cartList();
            }
        }); 
}
//get order ajax
function getOrderData(){ 
    $.ajax({
        url: base_path+'/user/checkout',
        dataType: 'json',
        type: 'GET',
        beforeSend:function(){
            notscrolly=false;
            $('.listingloader').show();
        },
        error:function(xhr){
            showMsg('error',"Error: " + xhr.status + ": " + xhr.statusText); 
            $('.listingloader').hide();
        },
        success: function(response){
            if(response.status){
                if(response.total!='12'){
                    notEmptyPost=false;
                }else{
                    offset+=12;
                }

                if(newData){
                    $('.productScroll').html(response.html); 
                    newData=false;
                }else{
                    $('.productScroll').append(response.html); 
                }
                notscrolly=true;
            }
            $('.listingloader').hide();
        }
    });
}


//shoppingcart order ajax
function shoppingCartData(){ 
    $.ajax({
        url: base_path+'/shoping-cart',
        dataType: 'json',
        type: 'GET',
        beforeSend:function(){
            notscrolly=false;
            $('.listingloader').show();
        },
        error:function(xhr){
            showMsg('error',"Error: " + xhr.status + ": " + xhr.statusText); 
            $('.listingloader').hide();
        },
        success: function(response){
            if(response.status){
                if(response.total!='12'){
                    notEmptyPost=false;
                }else{
                    offset+=12;
                }

                if(newData){
                    $('.productScroll').html(response.html); 
                    newData=false;
                }else{
                    $('.productScroll').append(response.html); 
                }
                notscrolly=true;
            }
            $('.listingloader').hide();
        }
    });
}


//cart delete item
$(document).ready(cartDeleteData); 
function cartDeleteData(){
$('.cartDeleteData').click(function(){
    var newData=true;
    var productId=$(this).data('product_id');
    $.ajax({
        url: base_path+'/checkoutdelete',
        dataType: 'json',
        type: 'GET',
        data:{"id":productId},
        beforeSend:function(){
            $('.listingloader').show();
        },
        error:function(xhr){
            showMsg('error',"Error: " + xhr.status + ": " + xhr.statusText); 
            $('.listingloader').hide();
        },
        success: function(data){
            if(data.error){
                showMsg('error',data.msg);
            }else{              
                showMsg('success',data.msg);
                $('.listingloader').hide();
                if(newData){
                    $('.headerAddToCartShow').html(data.html); 
                    $('.productScroll').html(data.removedata); 
                    newData=false;
                }else{
                    $('.headerAddToCartShow').append(data.html); 
                }
                if(data.total){
                    $('.ShowTotal').html(data.total); 
                }else{
                    $('.ShowTotal').html("0"); 
                }
            }
           
        }
    });
});
}

//cart delete item
$(document).ready(removeCartData); 
function removeCartData(){
$('.removeCartData').click(function(){
var newData=true;
var productId=$(this).data('product_id');
$.ajax({
    url: base_path+'/remove-cart',
    dataType: 'json',
    type: 'GET',
    data:{"id":productId},
    beforeSend:function(){
        $('.listingloader').show();
    },
    error:function(xhr){
        showMsg('error',"Error: " + xhr.status + ": " + xhr.statusText); 
        $('.listingloader').hide();
    },
    success: function(data){
        if(data.error){
            showMsg('error',data.msg);
        }else{              
            showMsg('success',data.msg);
            $('.listingloader').hide();
            if(newData){
                $('.productScroll').html(data.html); 
                $('.headerAddToCartShow').html(data.cartremove); 
                newData=false;
            }else{
                $('.productScroll').append(data.html); 
            }
            if(data.total){
                $('.ShowTotal').html(data.total); 
            }else{
                $('.ShowTotal').html("0"); 
            }
        }
       
    }
});
});
}

//newsletter form submit
$("form#news").submit(function(e){
e.preventDefault();

var formId=$(this).attr('id');
var formAction=$(this).attr('action');
var formLoader=$(this).data('loader');

$.ajax({
    url: formAction,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
    },
    data: new FormData(this),
    type: 'post',
    dataType:'json',
    beforeSend: function(){
        $('.'+formLoader).css('display','inline-block');
         $('.button_'+formLoader).prop('disabled', true);
    },
    error:function(xhr,textStatus){
        if (textStatus == 'timeout') {
            showMsg('warning', xhr.status + ': ' + xhr.statusText);
        }else{
            showMsg('error', xhr.status + ': ' + xhr.statusText);
        }
        $('.'+formLoader).css('display','none');
         $('.button_'+formLoader).prop('disabled', false);
    },
    success: function(data){
        if(data.error){
            showMsg('error',data.msg);
            $('.button_'+formLoader).prop('disabled', false);
                $('.'+formLoader).css('display','none');
        }else{
                showMsg('success',data.msg);
                $('.button_'+formLoader).prop('disabled', false);
                $('.'+formLoader).css('display','none');
                $('#'+formId)[0].reset();
        }
        
    },
    cache:false,
    contentType:false,
    processData:false, 
});
});


//checkout ajax

function save_etopup(topup_id,newQuantity){ 
var qtys = newQuantity;
var loader=$('#cartLoader'+topup_id);
$.ajax({
    type: "POST",
    dataType:"json",
    url: base_path+'/addtotopupform',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
    },
    data:{
        amount: topup_id, qty:qtys,       
    },
    beforeSend: function(){
        $('.listingloader').show();
    },
    error:function(xhr,textStatus){
        $('.listingloader').hide();
        if (textStatus == 'timeout') {
            showMsg('warning', xhr.status + ': ' + xhr.statusText);
        }else{
            showMsg('error', xhr.status + ': ' + xhr.statusText);
        }
    },
    success: function(data){
        
        if(data.error){
            $('.listingloader').hide();
            showMsg('error',data.msg);
        }else{              
            $('.listingloader').hide();
            $('#etopup').html(data.html);
        }
        
        
        //cartList();
    }
}); 
}


//get blogs scroll 
var notscrolly=true;
var notEmptyPost=true;
var newData=true;
var offset=0;


$(document).ready(function(){
$(window).scroll(function(){
var divheight = $('#productScroll').outerHeight();
if(notscrolly==true && notEmptyPost==true && $(window).scrollTop() + $(window).height()/2 >= divheight){   
    getblogsData();
}
});
});

function getblogsData(){ 
var tagSlug=$('#tagSlug').val();
var cateSlug=$('#cateSlug').val();
$.ajax({
    url: base_path+'/blogs',
    dataType: 'json',
    type: 'GET',
    data: {"offset":offset,"limit":"12","tagSlug":tagSlug,"cateSlug":cateSlug},
    beforeSend:function(){
        notscrolly=false;
        $('.listingloader').show();
    },
    error:function(xhr){
        showMsg('error',"Error: " + xhr.status + ": " + xhr.statusText); 
        $('.listingloader').hide();
    },
    success: function(response){
        if(response.status){
            if(response.total!='12'){
                notEmptyPost=false;
            }else{
                offset+=12;
            }
            if(newData){
                $('#productScroll').html(response.html); 
                newData=false;
            }else{
                $('#productScroll').append(response.html); 
            }
            notscrolly=true;
        }
        $('.listingloader').hide();
    }
});
}



//google login 
function Google_signIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var register_type = 2;
    var data = {name: profile.getName(),email: profile.getEmail(),register_type: register_type};
    socialLogin_data(data);
}
//facebook login 
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '160044472704891', // FB App ID
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.2' // use graph api version 2.8
    });
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
            getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
    function (response) {
        var data = {name: response.first_name+' '+response.last_name,email: response.email,register_type:'3'};
        socialLogin_data(data);
    });
}


function socialLogin_data(data)
{   
    $.ajax({
        type: "POST",
        dataType: 'json',
        data: data,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
        },
        url: base_path+'/social-login',
        success: function(data) {
            if(data.error)
            {
                showMsg('error',data.msg);
            }else{
                showMsg('success',data.msg);
                    location.href="/";
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function () {
                });
            }
        }
    });
} 



//live search  Blog
$('.productSearch').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
    type: 'POST',
    url: base_path+'/search',
    datatype: "html",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
    },
    data: {search: $value},
    success: function(data){
        console.log(data);
        if(data){
        $('.search_body').html(data);
        $('.searchDisplay').show();
        }else{
            
            $('.searchDisplay').hide();
            $('.search_body').html('');
        }
    }
    });
});

