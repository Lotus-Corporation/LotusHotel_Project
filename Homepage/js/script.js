// mobile
		if (imagesPerPage == 1) {
			$(this).addClass('first');
		}
	

	var _current = 0;
	$('#gallery-photo ul').css('left',0);
	if(pages > 1) {
		$('#gallery-photo span.shadow span').show();
		$('#gallery-photo span.shadow.left span').hide();
	} else {
		$('#gallery-photo span.shadow').hide();
	}
	function galleryMoveLeft() {
		_current--;
		var _self = $(this);
		$('#gallery-photo span.shadow').hide();
		if(_is_mobile && _current < 0) {
			_current = nImages - 1;
		}
		$('#gallery-photo ul').stop(true, true).animate({'left' : -$($('#gallery-photo li.first').get(_current)).position().left}, function() {
			$('#gallery-photo span.shadow, #gallery-photo span.shadow span').show();
			if(_current <= 0) {
				_self.hide();
			}
		});
	}
	function galleryMoveRight() {
		_current++;
		var _self = $(this);
		$('#gallery-photo span.shadow').hide();
		if(_is_mobile && _current >= nImages) {
			_current = 0;
		}
		$('#gallery-photo ul').stop(true, true).animate({'left' : -$($('#gallery-photo li.first').get(_current)).position().left}, function() {
			$('#gallery-photo span.shadow, #gallery-photo span.shadow span').show();
			if (pages === _current +1) {
				_self.hide();
				$(' #gallery-photo span.shadow.right').hide();
			}
		});
	}
	$('#gallery-photo span.shadow.left span').unbind('click', galleryMoveLeft);
	$('#gallery-photo span.shadow.right span').unbind('click', galleryMoveRight);
	if(pages > 1) {
		$('#gallery-photo span.shadow.left span').bind('click', galleryMoveLeft);
		$('#gallery-photo span.shadow.right span').bind('click',galleryMoveRight);
		$('#gallery-photo > div').on('swipeleft', galleryMoveRight);
		$('#gallery-photo > div').on('swiperight', galleryMoveLeft);
	}


var galleryPopin = function(id, panel, category) {
	if (typeof category === 'undefined') {
		category = false;
	}
	$.ajax({
		type : "GET",
		data : { 'action' : 'gallery', 'lang' : ((_lang !== undefined) ? _lang : 'en'),  'test_rebrand': location.href.indexOf('test_rebrand') !== -1 ? 1 : undefined },
		url: ajax_url,
		error: function() {
			if(window.console && console.log) { console.log( "error while getting the gallery data !" ); }
		},
		success: function(gallery) {
			if( gallery !== 'error' ) {	gallery_html = gallery; }
			else { if(window.console && console.log) { console.log( "error during success while getting the gallery data !" ); } }
		},
		complete: function() {
			if(gallery_html !== undefined) {

				$('.main_slideshow ul.cycle').cycle('pause');

				var gallery_current = 0;

				$('html, body').css('overflow', 'hidden');
				$('#gallery_popin').html(gallery_html);

				$('#gallery_categories li').each(function() {
					$(this).on('click', function() {
						$('#gallery_categories li').removeClass('active');
						$(this).addClass('active');
						var _tag = $(this).data('tag');
						$container.width(_width);
						if(_tag !== undefined) { $container.isotope({filter : '.'+ _tag}); }
						else { $container.isotope({ filter: '*' }); }
						$('.gallery_info').text($(this).text());
						if(_is_mobile === true && $('html').hasClass('portrait')) {
							$('.gallery_menu').trigger('click');
						}
					});
				});

				var _width = $('#gallery_thumbnails_ctx li:visible').length * $('#gallery_thumbnails_ctx li:visible').outerWidth(true);
				var $container = $('#gallery_thumbnails_ctx > ul');
				$container.width(_width);
				$container.isotope({
					itemSelector : '.thumb',
					layoutMode : 'masonry',
					isOriginLeft : ($('body').hasClass('rtl')) ? false : true
				});
				$container.on('arrangeComplete', function( event, filteredItems ) {
					$('#gallery_caption i.gallery_total').text($('#gallery_thumbnails_ctx li[data-type!="video"]:visible').length - $('#gallery_thumbnails_ctx li[data-type="virtual"]:visible').length);
					gallery_current = 0;
					$($('#gallery_thumbnails_ctx li:visible').get(gallery_current)).trigger('click');
				});

				$('#gallery_thumbnails_ctx li').each(function() {
					$(this).on('click', function() {

						var _self = $(this);
						var _caption = _self.data('caption');
						var _category = _self.data('cat');
						gallery_current = $('#gallery_thumbnails_ctx li:visible').index(this);

						if(gallery_current <= 0) { $('.gallery_prev').hide(); $('.gallery_next').show(); }
						else if(gallery_current+1 >= $('#gallery_thumbnails_ctx li:visible').length) { $('.gallery_next').hide(); $('.gallery_prev').show(); }
						else { $('.gallery_next, .gallery_prev').show(); }

						$('#gallery_thumbnails_ctx li').removeClass('current');
						_self.addClass('current');

						$('#gallery_preview > img.resp, #gallery_preview > iframe').fadeOut(750, function() { $(this).remove(); });

						if(_self.data('type') == 'image') {
							var _img = new Image();
							_img.onload = function() {
								var _image = $(_img).addClass('resp');
								_image.prependTo($('#gallery_preview'));
								$('#gallery_preview').resizeCenter({onLoad: function() {
									$('#gallery_preview > img.resp').animate({'opacity' : 1});
									$('#gallery_caption').show();
									var _index = $('#gallery_thumbnails_ctx li[data-type!="video"]:visible').not( '[data-type="virtual"]' ).index(_self.get(0))+1;
									$('#gallery_caption i.gallery_current').text(_index);
									$('#gallery_caption strong').text(_caption);
									$('#gallery_caption span').text(_category);
									$('.gallery_info').text(_category);
								}});
							};
							_img.src = $(this).data('big');
						} else if(_self.data('type') == 'virtual') {
							$('#gallery_caption').hide();
							if(!($('#gallery_categories').hasClass('closed'))) {
								$('#gallery_categories').addClass('closed');
							}
							var _iframe = $('<iframe width="100%" height="100%" src="'+ _self.data('big') +'" style="border:0" frameborder="0" allowfullscreen></iframe>');
							if(_is_mobile === true && $('html').hasClass('portrait')) {
								var _mhv = $('#gallery_preview').innerHeight(), _mwv = $('#gallery_preview').innerWidth();
								_iframe.css({
									'width' : _mhv,
									'height' : _mwv,
									'left' : -(_mhv - _mwv) / 2,
									'bottom' : (_mhv - _mwv) / 2
								});
							}
							_iframe.prependTo($('#gallery_preview'));
						} else {
							$('#gallery_caption').hide();
							var _video = $('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+ _self.data('big') +'?showinfo=0&rel=0&modestbranding=1&autoplay=1&wmode=opaque" frameborder="0" allowfullscreen></iframe>');
							if(_is_mobile === true && $('html').hasClass('portrait')) {
								var _mhv = $('#gallery_preview').innerHeight(), _mwv = $('#gallery_preview').innerWidth();
								_video.css({
									'width' : _mhv,
									'height' : _mwv,
									'left' : -(_mhv - _mwv) / 2,
									'bottom' : (_mhv - _mwv) / 2
								});
							}
							_video.prependTo($('#gallery_preview'));
						}

						var _center = $('#gallery_thumbnails_ctx').innerWidth() / _self.outerWidth(true) / 2;
						$('#gallery_thumbnails_ctx').animate({scrollLeft : _self.position().left - _center*_self.innerWidth() });
					});
				});

				$('.gallery_menu').on('click', function() {
					if($('#gallery_categories').hasClass('closed')) {
						$('#gallery_categories').removeClass('closed');
						$('#gallery_preview').removeClass('closed');
					} else {
						$('#gallery_categories').addClass('closed');
						$('#gallery_preview').addClass('closed');
					}
				});
				$('.gallery_next').on('click', function() {
					gallery_current = gallery_current + 1;
					$('.gallery_prev, .gallery_next').show();
					$($('#gallery_thumbnails_ctx li:visible').get(gallery_current)).trigger('click');
				});
				$('.gallery_prev').on('click', function() {
					gallery_current = gallery_current - 1;
					$($('#gallery_thumbnails_ctx li:visible').get(gallery_current)).trigger('click');
				});
				$('#gallery_popin span.close').on('click', function() {
					$('#gallery_popin_ctx').fadeOut(750, function() {
						$('#gallery_popin').children().remove();
						$('#gallery_popin').html('').removeClass('shown');
						$('html, body').css('overflow', 'auto');
						$('.main_slideshow ul.cycle').cycle('resume');
					});
				});

				if(gallery_current == 0) { $('.gallery_prev').hide(); }
				if(gallery_current+1 >= $('#gallery_thumbnails_ctx li:visible').length) { $('.gallery_next').hide(); }
				if(id === undefined) { id = 0; }
				if(panel !== undefined) { $('.gallery_menu').trigger('click'); }

				$('#gallery_caption i.gallery_total').text($('#gallery_thumbnails_ctx li[data-type!="video"]:visible').length - $('#gallery_thumbnails_ctx li[data-type="virtual"]:visible').length);
				$($('#gallery_thumbnails_ctx li:visible').get(id)).trigger('click');

				$('#gallery_popin').addClass('shown');

				if (category) {
					$('#gallery_popin li[data-tag='+category+']').trigger('click');
				}

				$(window).resize(function() {
					if(_is_mobile === true && $('html').hasClass('portrait')) {
						var _mhv = $('#gallery_preview').innerHeight(), _mwv = $('#gallery_preview').innerWidth();
						$('#gallery_preview iframe').css({
							'width' : _mhv,
							'height' : _mwv,
							'left' : -(_mhv - _mwv) / 2,
							'bottom' : (_mhv - _mwv) / 2
						});
					}
				});

			}
		}
	});

}
