$(() => {
	
	var observer = new MutationObserver(function(mutations_list) {
		mutations_list.forEach(function(mutation) {
			mutation.addedNodes.forEach(function(added_node) {
				//console.log($(added_node));
				if($(added_node).is('.fancybox-container') 
					&& $(added_node).find('.slider-gallery').length) {
					if(isMobile()){
						$(added_node).attr('style', '');
						$(added_node).find('.slider-gallery .slider-image').each((k, val) => {
							$(val).attr('src', $(val).attr('data-mobile-src'));
						})
					}
					//console.log('#child has been added');
					$(added_node).find('.slider-gallery').slick({
						dots: true,
						infinite: true,
						speed: 300,
						slidesToShow: 1,
						centerMode: false,
						//variableWidth: true,
						//adaptiveHeight: true,
						arrows: true,
						//respondTo: 'slider',
						responsive: [
							{
								breakpoint: 992,
								settings: {
									slidesToShow: 1.5,
								}
							},
							{
								breakpoint: 680,
								settings: {
									slidesToShow: 1.2,
								}
							},
							{
								breakpoint: 576,
								settings: {
									slidesToShow: 1,
								}
							},
							{
								breakpoint: 480,
								settings: {
									slidesToShow: 1,
									//variableWidth: false,
									//variableHeight: false,
									respondTo: 'slider',
								}
							},
						],
						prevArrow: '<a href="javascript: void(0);" class="arrow arrow__prev"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M0.35164 11.8548L8.29662 19.8C8.52341 20.0268 8.82568 20.1512 9.14799 20.1512C9.47065 20.1512 9.77275 20.0266 9.99954 19.8L10.7209 19.0784C10.9475 18.852 11.0723 18.5495 11.0723 18.2271C11.0723 17.9048 10.9475 17.5921 10.7209 17.3657L6.0859 12.7205L20.8115 12.7205C21.4754 12.7205 22 12.2007 22 11.5366L22 10.5166C22 9.85247 21.4754 9.28029 20.8115 9.28029L6.03332 9.28029L10.7207 4.60918C10.9473 4.38238 11.0722 4.08815 11.0722 3.76567C11.0722 3.44354 10.9473 3.14502 10.7207 2.91841L9.99937 2.19921C9.77257 1.97242 9.47048 1.84882 9.14781 1.84882C8.82551 1.84882 8.52323 1.97403 8.29644 2.20082L0.35146 10.1458C0.124129 10.3733 -0.000893718 10.677 8.0004e-07 10.9999C-0.000714484 11.3238 0.124129 11.6277 0.35164 11.8548Z"/></g></svg></span></a>',
						nextArrow: '<a href="javascript: void(0);" class="arrow arrow__next"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M21.6484 10.1452L13.7034 2.20004C13.4766 1.97324 13.1743 1.84875 12.852 1.84875C12.5293 1.84875 12.2273 1.97342 12.0005 2.20004L11.2791 2.92156C11.0525 3.148 10.9277 3.45045 10.9277 3.77293C10.9277 4.09524 11.0525 4.40789 11.2791 4.63433L15.9141 9.27951H1.18853C0.524597 9.27951 0 9.79928 0 10.4634V11.4834C0 12.1475 0.524597 12.7197 1.18853 12.7197H15.9667L11.2793 17.3908C11.0527 17.6176 10.9278 17.9118 10.9278 18.2343C10.9278 18.5565 11.0527 18.855 11.2793 19.0816L12.0006 19.8008C12.2274 20.0276 12.5295 20.1512 12.8522 20.1512C13.1745 20.1512 13.4768 20.026 13.7036 19.7992L21.6485 11.8542C21.8759 11.6267 22.0009 11.323 22 11.0001C22.0007 10.6762 21.8759 10.3723 21.6484 10.1452Z"/></g></svg></span></a>',
					});
					observer.disconnect();
				}
			});
		});
	});
	
	observer.observe(document.querySelector('body'), { subtree: false, childList: true });

	let link = location.href.match(/#detail_\d+/);
	if( link && $(`[data-src="${link}"]`).length ) {
		$(`[data-src="${link}"]`).trigger('click');
	}
});