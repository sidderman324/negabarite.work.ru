jQuery(document).ready(function() {
  // подмена картинок в типе техники
  jQuery('.type__item').hover(
    function() {
      var hoverImg = jQuery(this).find('.type__img').attr('data-hover-img');
      jQuery(this).find('.type__img').attr('src', hoverImg);
    },
    function() {
      var unhoverImg = jQuery(this).find('.type__img').attr('data-unhover-img');
      jQuery(this).find('.type__img').attr('src', unhoverImg);
    });
  // подмена картинок в типе услуг
  jQuery('.service-card').hover(
    function() {
      var hoverImg = jQuery(this).find('.service-card__img').attr('data-hover-img');
      jQuery(this).find('.service-card__img').attr('data-hover-img');
      jQuery(this).find('.service-card__img').attr('src', hoverImg);
    },
    function() {
      var unhoverImg = jQuery(this).find('.service-card__img').attr('data-unhover-img');
      jQuery(this).find('.service-card__img').attr('data-unhover-img');
      jQuery(this).find('.service-card__img').attr('src', unhoverImg);
    });

  jQuery('.page-header__burger-wrapper').on('click', function() {
    jQuery(this).find('.page-header__burger').toggleClass('page-header__burger--active');
    jQuery('.main-menu').slideToggle(300);
    jQuery('.submenu').fadeOut(300);
    jQuery('.main-menu__marker').removeClass('main-menu__marker--active');
  });

  jQuery('.main-menu__marker').on('click', function() {
    jQuery(this).siblings('.submenu').slideToggle(300);
    jQuery(this).toggleClass('main-menu__marker--active');
  });

  jQuery(function() {
    jQuery("a[href*='#*']").bind('click', function() {
      var _href = jQuery(this).attr("href");
      jQuery("html, body").animate({
        scrollTop: jQuery(_href).offset().top + "px"
      }, 800);
      return false;
    });
  });

  function menuHideShow() {
    var windowsWidth = jQuery(window).width();
    if (windowsWidth > 768) {
      jQuery('.main-menu').fadeIn(300);
      jQuery('.page-header__burger').removeClass('page-header__burger--active');
    }
  };

  jQuery(document).ready(menuHideShow);
  jQuery(document).scroll(menuHideShow);
  jQuery(window).resize(menuHideShow);

  jQuery('.contacts__link').on('click', function(e) {
    e.preventDefault();
    var activeLink = jQuery(this).hasClass('contacts__link--active');
    if (activeLink == true) {
      var mapScroll = jQuery('#map_wrapper').offset().top - 50;
      jQuery("html, body").animate({
        scrollTop: mapScroll + "px"
      }, 800);
      return false;
    } else {
      var mapLink = jQuery(this).attr('href');
      jQuery('.contacts__link').removeClass('contacts__link--active');
      jQuery(this).addClass('contacts__link--active');
      jQuery('#map_wrapper').attr('src', mapLink);
      var mapScroll = jQuery('#map_wrapper').offset().top - 50;
      jQuery("html, body").animate({
        scrollTop: mapScroll + "px"
      }, 800);
      return false;
    }
  });

  jQuery('.catalog-filter__sticker').on('click', function() {
    var filter_position = parseInt(jQuery('.catalog-filter').css('left'));
    if (filter_position != 0) {
      jQuery('.catalog-filter').animate({
        left: "0px"
      }, 500);
    } else {
      jQuery('.catalog-filter').animate({
        left: "-220px"
      }, 500);
    }
  });

  jQuery('.gallery__nav').on('click', function() {
    var navImageSrc = jQuery(this).attr('src');
    jQuery('.gallery__big').attr('src', navImageSrc);
  });

  jQuery('.pagination').on('click', function() {
    jQuery("html, body").animate({
      scrollTop: "0px"
    }, 1000);
  });


  jQuery('.btn_popup').on('click',function(e){
    e.preventDefault();
    jQuery('.feedback-form').fadeIn(300);
    jQuery('.feedback-form__bgr-mask').fadeIn(300);
  });
  jQuery('.feedback-form__bgr-mask').on('click',function(e){
    e.preventDefault();
    jQuery('.feedback-form').fadeOut(300);
    jQuery('.feedback-form__bgr-mask').fadeOut(300);
  });




  jQuery('.wpuf-submit-button').on('click', function(){
    var srcImgArr = [];
    jQuery(".attachment-name").each(function(indx, element){
      srcImgArr.push(jQuery(element).find("img").attr("src"));
      jquery("#gallery_photo_list_93").attr("value", srcImgArr);
      console.log(srcImgArr);
    });
  });

  jQuery('#rent_info_year_made_327').html('type','number');
  jQuery('#rent_info_operation_time_327').html('type','number');
  jQuery('#rent_info_price_93').html('type','number');
  jQuery('#rent_info_price_327').html('type','number');
  jQuery('#rent_info_year_made_93').html('type','number');
  jQuery('#rent_info_operation_time_93').html('type','number');
  jQuery('.wpuf-submit-button').val("Отправить");
  jQuery('#rent_info_year_made_327').html('type','number');


  jQuery(function($){
    jQuery("#phone").mask("+7 (999) 999-9999");
  });

  
  jQuery('.good-info__features-btn').on('click', function(e){
    e.preventDefault();
    jQuery('.good-info__features-phone--left').fadeIn(200);
    jQuery('.good-info__features-btn').css('display','none');
  });



  function form_logic() {
    // Массивы брендов для категорий
    /* Бульдозеры */
    var brand_for_cat_1 = ['Caterpillar','Hbxg','Komatsu','Shantui','Shehwa','Xcmg','Xgma','Zoomlion','Четра','ЧЗПТ','ЧТЗ','Четра'];
    /* автокраны */
    var brand_for_cat_18 = ['Daewoo','Dongyang','Grove','Hino','Isuzu','Kobelco','Liebherr','Mitsubishi','Nissan','Potain','Sany','Sennebogen','Soosan','Tadano','Tatra','Xcmg','Zoomlion','Галичанин','Ивановец','КамАЗ','Клинцы','МАЗ','Ульяновец','Урал','Челябинец','ЧТЗ'];
    /* Экскаваторы */
    var brand_for_cat_15 = ['Case','Caterpillar','Doosan','Hitachi','Hyundai','IHI','Isuzu','JCB','John Deere','Kobelco','Komatsu','Kubota','New Holland','Sdlg','Tatra','Terex','Volvo','Yanmar','ДЭМ','ЕлАЗ','Твэкс','ЭО','Эксмаш'];
    /* Буровые */
    var brand_for_cat_21 = ['Sunward','Casagrande','УАЗ','Урал','ЗИЛ','ГеоМаш','Bauer','Casagrande','Drillto'];
    /* Самосвалы */
    var brand_for_cat_17 = ['Baw','Beifang Benchi','Bell','Camc','Changan','Citroen','Daewoo','DAF','Dongfeng','FAW','Fiat','Ford','Forward','Foton','Freightliner','Hino','Howo"','Hyundai','International','Isuzu','Iveco','Kenworth','Kia','Liebherr','MAN','Mazda','Mercedes-Benz','Mitsubishi','Nissan','Peterbilt','Peugeot','Renault','Scania','Shaanxi Shacman','Tatra','Toyota','Volkswagen','Volvo','АгроТехМаш','ГАЗ','ЗИЛ','КамАЗ','Краз','МАЗ','Мзкт','Нефаз','САЗ','Стройдормаш','УАЗ','Урал'];
    /* Катки */
    var brand_for_cat_19 = ['Ammann','Bomag','Caterpillar','Claas','Dynapac','Gomaco','Hamm','HBM-Nobas','Mitsubishi','Sakai','Sdlg','TSS','Volvo','Xcmg','Zoomlion','Брянский арсенал','ДЗ','Завод ДМ','Моаз','Раскат','Спецдормаш','ХТЗ','ЧКЗ','ЮМЗ'];
    /* Погрузчики */
    var brand_for_cat_16 = ['ANT','Atlet','Balkancar','Bobcat','Bull','Case','Changlin','Dieci','Doosan','Genie','Gros','Hangcha','HBM-Nobas','Heli','Heracles','Hitachi','Hyster','Hyundai','HZM','JAC','JCB','John Deere','Komatsu','Kumpan','Laigong','Linde','Liugong','Lonking','Manitou','Megamax','Mitsuber','Mitsubishi','Mustang','NEO','Nissan','Sdlg','Sumitomo','Sunward','Tarsus','TCM','Terex','TOR','Toyota','Vmax','Xcmg','Xgma','Xilin','Амкодор','Барс','Брянский арсенал','МТЗ','Плавский','Урал','Уралвагонзавод'];
    /* Асфальтоукладчики */
    var brand_for_cat_20 = ['Caterpillar','Bomag','Mitsubishi','HAMM','Vogele','Titan'];

    // Проверка выбранной категории
    var category = jQuery('#category').val();
    console.log('Категория: ' + category);
    jQuery('#brand').empty();
    var current_brand = [];
    // Выбор массива с брендами
    switch(category){
      case "buldozer": current_brand = brand_for_cat_1; break; 
      case "burovaya_ustanovka": current_brand = brand_for_cat_21; break; 
      case "road_ratok": current_brand = brand_for_cat_19; break; // 
      case "pogruzchik": current_brand = brand_for_cat_16; break; // Погрузчики
      case "samosval": current_brand = brand_for_cat_17; break; 
      case "excavator": current_brand = brand_for_cat_15; break;
      case "autokran": current_brand = brand_for_cat_18; break; 
      case "asphaltoukladchik": current_brand = brand_for_cat_20; break; // Асфальтоукладчики
      default: current_brand = brand_for_cat_1;
    }
    for (var i = 0; i < current_brand.length; i++) {
      var option_item = "<option class='brand_item' value="+current_brand[i]+">"+current_brand[i]+"</option>";
      jQuery('#brand').html(function(indx, oldHtml){
        return oldHtml + option_item;
      });
    }
  }

  jQuery(document).ready(form_logic);
  jQuery('#category').click(form_logic);



  // jQuery('.upload_image_button').click(function(){
  //   function handlerRequest(image_type, image_url, user_id){
  //     $.ajax({
  //       url: '/wp-content/themes/theme/include/profile/forms-handler.php',
  //       type: 'POST',
  //       data: {
  //         image_type: image_type, 
  //         image_url: image_url, 
  //         user_id: user_id
  //       },
  //       success: function(data, textStatus, xhr) {
  //           //called if success
  //         },
  //         error: function(xhr, textStatus, errorThrown) {
  //           //called when there is an error
  //         }
  //       });
  //   }
  //   var send_attachment_bkp = wp.media.editor.send.attachment;
  //   var button = jQuery(this);
  //   var user_id = jQuery(button).siblings('#user_id').val();
  //   wp.media.editor.send.attachment = function(props, attachment) {
  //     console.log(attachment);
  //     jQuery(button).siblings('#upload_photo-path').val(attachment.url);
  //     wp.media.editor.send.attachment = send_attachment_bkp;
  //     // handlerRequest('upload_photo', attachment.url, user_id);
      
  //   }
    
  //   wp.media.editor.open(button);
  //   return false;
  // });










  var form = jQuery('.form-send-mail'),
  action = form.attr('action'),
  pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;

  form.find('.req-field').addClass('empty-field');

  function checkInput() {
    form.find('.req-field').each(function () {
      var el = jQuery(this);
      if (el.hasClass('rf-mail')) {
        if (pattern.test(el.val())) {
          el.removeClass('empty-field');
        } else {
          el.addClass('empty-field');
        }
      } else if (el.val() != '') {
        el.removeClass('empty-field');
      } else {
        el.addClass('empty-field');
      }
    });
  }

  function lightEmpty() {
    form.find('.empty-field').addClass('rf-error');
    setTimeout(function () {
      form.find('.rf-error').removeClass('rf-error');
    }, 1000);
  }

  jQuery(document).on('submit', '.form-send-mail', function (e) {
    var formData = {
      photo: jQuery('#multiFiles').prop('value'),
    };

    $.ajax({
      type: 'POST',
      url: action,
      data: formData,
      beforeSend: function () {
        form.addClass('is-sending');
      },
      error: function (request, txtstatus, errorThrown) {
        console.log(request);
        console.log(txtstatus);
        console.log(errorThrown);
      },
      success: function () {
        form.removeClass('is-sending').addClass('is-sending-complete');
      }
    });
    e.preventDefault();
  });

  jQuery(document).on('click', '.form-send-mail button[type="submit"]', function (e) {
    checkInput();
    var errorNum = form.find('.empty-field').length;
    if (errorNum > 0) {
      lightEmpty();
      e.preventDefault();
    }
  });

  jQuery(document).on('click', '.form-is-more button', function () {
    form.find('input').val('');
    form.find('textarea').val('');
    form.removeClass('is-sending-complete');
  });
});
