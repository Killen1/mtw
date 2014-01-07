/*
	Gig Tabs
	By Nathan Killen
*/
function init_tabs(){
	if(!$('ul.tabs').length){
		return;
	}
	$('div.tab-content-wrap').each(function(){
		$(this).find('div.tab-content-wrap').show();
	});
	$('ul.tabs a').click(function(){
		if(!$(this).hasClass('current')){
			$(this).addClass('current').parent('li').siblings('li')
				.find('a.current').removeClass('current');

			$($(this).attr('href')).show().siblings('div.tab-content').hide();
		}
		this.blur();
		return false;
	});
}; 