$(document).ready(function(){$('.navmain li').on('click',function(){$(this).siblings('li').removeClass('active');$(this).addClass('active');});var test=window.location.pathname;var newtext=test.split("/");var newurl="/#"+newtext[1];$('.navmain li').each(function(){var urllink=$(this).find('a').attr('href');if(urllink==newurl){$('.navmain li').removeClass('active');$('.navmain li').eq($(this).index()).addClass('active');}})})