$("#slide_to").fitText(1.3, {minFontSize: '14px'});
$(".downloads a").fitText(1.115);
$(".downloads a:last-child").fitText(1.215);
$(".price_table tr").fitText(1.875);
$("article").fitText(1.875);
$("#ftid").fitText(1.37);
$('#fb_open_div').fitText(2.37);


$(".fb").fancybox();
$(".fb_open").fancybox({
    openEffect : 'fade',
    padding: 0,
    overflow: 'none'
});
//
$('.close_fb_open_div').on('click', function(){
    $('.fancybox-overlay').css('display', 'none');
});