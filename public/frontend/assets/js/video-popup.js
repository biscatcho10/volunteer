///////////////////////// start popup video home /////////////////////////

  $('.popup-btn').on('click', function(){
    //
    $('.video-popup').fadeIn('slow');
    mySrc = $(this).attr('source')
    if ($(this).attr('typeOf') == 'video') {
        $('#myImgs').hide()
        $('.youtube-video').show().attr('src', mySrc);
    }else{
        $('.youtube-video').hide()
        $('#myImgs').show().attr('src', mySrc);
    }
    return false;
  });

  $('.popup-bg').on('click', function(){
    $('.video-popup').fadeOut('slow');
    $('.youtube-video').attr('src', '');
    return false;
  });

  $('.close-btn').on('click', function(){
    $('.video-popup').fadeOut('slow');
    $('.youtube-video').attr('src', '');
      return false;
  });

///////////////////////// start popup video home /////////////////////////
