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

$('.close_fb_open_div').fancybox({
    closeClick: true
});

$('.close_fb_open_div').on('click', function(){
    $('.fancybox-overlay').css('display', 'none');
});


//Cufon.replace('body', {fontFamily: 'Cuprum'});
Cufon.replace('header .contacts a', {fontFamily: 'Open Sans'});
Cufon.replace('#slide_to', {fontFamily: 'Open Sans'});
Cufon.replace('header .contacts', {fontFamily: 'PF Agora Sans Pro Medium'});
Cufon.replace('header .form form header', {fontFamily: 'Open Sans', fontWeight: 'bold'});
Cufon.replace('#slide_to', {fontFamily: 'Myriad Pro'});

Cufon.replace('.info_text', {fontFamily: 'PF Agora Sans Pro'});
Cufon.replace('.section_4 .last-chance', {fontFamily: 'PF Agora Sans Pro Medium', fontStyle: 'italic'});

//Cufon.replace('header .form form .sendBtn', {fontFamily: 'Myriad Pro'})
Cufon.replace('.rub', {fontFamily: 'PT Rouble Sans'});
