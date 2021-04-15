

$('.complete-right .btn-start').click(function(){
    $('.complete-right .container').addClass('container1');
    $('.complete-left .item-group-2').addClass('active');
})


$('#btn-down').click(function(){
    $('.complete-right .container').removeClass('container1');
    $('.complete-right .container').addClass('container2');
    $('.complete-left .item-group-3').addClass('active');
})

$('.complete-left .item-group-1').click(function(){
    $('.complete-left .item-group-2').removeClass('active');
    $('.complete-left .item-group-3').removeClass('active');
    $('.complete-right .container').removeClass('container1');
    $('.complete-right .container').removeClass('container2');
})

$('.complete-left .item-group-2').click(function(){
    $('.complete-left .item-group-2').addClass('active');
    $('.complete-left .item-group-3').removeClass('active');
    $('.complete-right .container').addClass('container1');
    $('.complete-right .container').removeClass('container2');
})

$('.complete-left .item-group-3').click(function(){
    $('.complete-left .item-group-2').addClass('active');
    $('.complete-left .item-group-3').addClass('active');
    $('.complete-right .container').removeClass('container1');
    $('.complete-right .container').addClass('container2');
})
