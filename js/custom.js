/*

Template: Medileaf - Health and Medical HTML Template
Author: potenzaglobalsolutions
Design and Developed by: potenzaglobalsolutions.com

NOTE: This file contains all scripts for the actual Template.

*/

/*================================================
[  Table of contents  ]
================================================

:: Menu
:: Sticky
:: Tooltip
::counter
::Owl carousel
:: Swiper slider
::Slickslider
::Magnific Popup
::Shuffle
::Range Slider
::Countdown
::Back to top
::Progressbar

======================================
[ End table content ]
======================================*/
//POTENZA var

(function ($) {
  "use strict";
  var POTENZA = {};

  /*************************
    Predefined Variables
  *************************/
  var $window = $(window),
    $document = $(document),
    $body = $('body'),
    $progressBar = $('.skill-bar'),
    $countdownTimer = $('.countdown'),
    $counter = $('.counter');
  //Check if function exists
  $.fn.exists = function () {
    return this.length > 0;
  };

  /*************************
        Menu
    *************************/
  POTENZA.dropdownmenu = function () {
    if ($('.navbar').exists()) {
      $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
          $('.dropdown-submenu .show').removeClass("show");
        });
        return false;
      });
    }
  };

  /*************************
           Sticky
  *************************/

  POTENZA.isSticky = function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 150) {
        $('.header-sticky').addClass('is-sticky');
      } else {
        $('.header-sticky').removeClass('is-sticky');
      }
    });
  };



  /*************************
       Tooltip
  *************************/
  POTENZA.Tooltip = function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  }

  /*************************
        Popover
  *************************/
  POTENZA.Popover = function () {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
  }

  /*************************
         Counter
  *************************/
  POTENZA.counters = function () {
    var counter = jQuery(".counter");
    if (counter.length > 0) {
      $counter.each(function () {
        var $elem = $(this);
        $elem.appear(function () {
          $elem.find('.timer').countTo();
        });
      });
    }
  };

  /*************************
       Owl carousel
  *************************/
  POTENZA.carousel = function () {
    var owlslider = jQuery("div.owl-carousel");
    if (owlslider.length > 0) {
      owlslider.each(function () {
        var $this = $(this),
          $items = ($this.data('items')) ? $this.data('items') : 1,
          $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
          $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
          $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
          $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
          $autospeed = ($this.attr('data-autospeed')) ? $this.data('autospeed') : 5000,
          $smartspeed = ($this.attr('data-smartspeed')) ? $this.data('smartspeed') : 1000,
          $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
          $space = ($this.attr('data-space')) ? $this.data('space') : 30,
          $animateOut = ($this.attr('data-animateOut')) ? $this.data('animateOut') : false;

        $(this).owlCarousel({
          loop: $loop,
          items: $items,
          responsive: {
            0: {
              items: $this.data('xx-items') ? $this.data('xx-items') : 1
            },
            480: {
              items: $this.data('xs-items') ? $this.data('xs-items') : 1
            },
            768: {
              items: $this.data('sm-items') ? $this.data('sm-items') : 2
            },
            980: {
              items: $this.data('md-items') ? $this.data('md-items') : 3
            },
            1200: {
              items: $items
            }
          },
          dots: $navdots,
          autoplayTimeout: $autospeed,
          smartSpeed: $smartspeed,
          autoHeight: $autohgt,
          margin: $space,
          nav: $navarrow,
          navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
          autoplay: $autoplay,
          autoplayHoverPause: true
        });
      });
    }
  }

  /*************************
        Swiper slider
  *************************/
  POTENZA.swiperAnimation = function () {
    var siperslider = jQuery(".swiper-container");
    if (siperslider.length > 0) {
      var swiperAnimation = new SwiperAnimation();
      var swiper = new Swiper(".swiper-container", {
        init: true,
        direction: "horizontal",
        effect: "slide",
        loop: true,
        keyboard: {
          enabled: true,
          onlyInViewport: true
        },
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        on: {
          init: function () {
            swiperAnimation.init(this).animate();
          },
          slideChange: function () {
            swiperAnimation.init(this).animate();
          }
        }
      });
    }
  }

  /*************************
        Slickslider
  *************************/
  POTENZA.slickslider = function () {
    if ($('.slider-for').exists()) {
      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true
      });
    }
  };

  /*************************
      Magnific Popup
  *************************/
  POTENZA.mediaPopups = function () {
    if ($(".popup-single").exists() || $(".popup-gallery").exists() || $('.modal-onload').exists() || $(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
      if ($(".popup-single").exists()) {
        $('.popup-single').magnificPopup({
          type: 'image'
        });
      }
      if ($(".popup-gallery").exists()) {
        $('.popup-gallery').magnificPopup({
          delegate: 'a.portfolio-img',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          }
        });
      }
      if ($(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,
          fixedContentPos: false
        });
      }
      var $modal = $('.modal-onload');
      if ($modal.length > 0) {
        $('.popup-modal').magnificPopup({
          type: 'inline'
        });
        $(document).on('click', '.popup-modal-dismiss', function (e) {
          e.preventDefault();
          $.magnificPopup.close();
        });
        var elementTarget = $modal.attr('data-target');
        setTimeout(function () {
          $.magnificPopup.open({
            items: {
              src: elementTarget
            },
            type: "inline",
            mainClass: "mfp-no-margins mfp-fade",
            closeBtnInside: !0,
            fixedContentPos: !0,
            removalDelay: 500
          }, 0)
        }, 1500);
      }
    }
  }

  /*************************
      Shuffle
  *************************/
  POTENZA.shuffle = function () {
    if ($('.my-shuffle-container').exists()) {
      var Shuffle = window.Shuffle;
      var element = document.querySelector('.my-shuffle-container');
      var sizer = element.querySelector('.my-sizer-element');
      var shuffleInstance = new Shuffle(element, {
        itemSelector: '.grid-item',
        sizer: sizer, // could also be a selector: '.my-sizer-element'
        speed: 700,
        columnThreshold: 0
      });
      jQuery(document).ready(function () {
        jQuery(".btn-filter").on('click', function () {
          var data_group = jQuery(this).attr('data-group');
          if (data_group != 'all') {
            shuffleInstance.filter([data_group]);
          } else {
            shuffleInstance.filter();
          }
        });
        $(".filters-group .btn-filter").on('click', function () {
          $(".filters-group .btn-filter").removeClass("active");
          $(this).addClass("active");
        });
      });
    }
  }

  /*************************
      Range Slider
  *************************/
  POTENZA.rangesliders = function () {
    if ($('.cost-price , .shop-price-slider').exists()) {
      var rangeslider = jQuery(".rangeslider-wrapper");
      $("#cost-price-1").ionRangeSlider({
        min: 0,
        max: 32,
        from: 4,
        to: 100,
        hide_min_max: true,
        hide_from_to: false
      });

      //slider-6
      $("#price-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 10000,
        from: 1000,
        to: 8000,
        prefix: "$",
        hide_min_max: true,
        hide_from_to: false
      });

    }
  };

  /*************************
           Countdown
  *************************/
  POTENZA.countdownTimer = function () {
    if ($countdownTimer.exists()) {
      $countdownTimer.downCount({
        date: '12/25/2022 12:00:00', // Month/Date/Year HH:MM:SS
        offset: -4
      });
    }
  }

  /*************************
       Back to top
  *************************/
  POTENZA.goToTop = function () {
    var $goToTop = $('#back-to-top');
    $goToTop.hide();
    $window.scroll(function () {
      if ($window.scrollTop() > 100) $goToTop.fadeIn();
      else $goToTop.fadeOut();
    });
    $goToTop.on("click", function () {
      $('body,html').animate({
        scrollTop: 0
      }, 1000);
      return false;
    });
  }

  /*************************
          Progressbar
  *************************/
  POTENZA.progressBar = function () {
    if ($progressBar.exists()) {
      $progressBar.each(function (i, elem) {
        var $elem = $(this),
          percent = $elem.attr('data-percent') || "100",
          delay = $elem.attr('data-delay') || "100",
          type = $elem.attr('data-type') || "%";

        if (!$elem.hasClass('progress-animated')) {
          $elem.css({
            'width': '0%'
          });
        }
        var progressBarRun = function () {
          $elem.animate({
            'width': percent + '%'
          }, 'easeInOutCirc').addClass('progress-animated');

          $elem.delay(delay).append('<span class="progress-type animated fadeIn">' + type + '</span><span class="progress-number animated fadeIn">' + percent + '</span>');
        };
        $(elem).appear(function () {
          setTimeout(function () {
            progressBarRun();
          }, delay);
        });
      });
    }
  };

  /****************************************************
       POTENZA Window load and functions
  ****************************************************/
  //Window load functions
  $window.on("load", function () {
    POTENZA.shuffle(),
      POTENZA.progressBar();
  });

  //Document ready functions
  $document.ready(function () {
    POTENZA.counters(),
      POTENZA.slickslider(),
      POTENZA.dropdownmenu(),
      POTENZA.carousel(),
      POTENZA.isSticky(),
      POTENZA.Tooltip(),
      POTENZA.Popover(),
      POTENZA.goToTop(),
      POTENZA.countdownTimer(),
      POTENZA.mediaPopups(),
      POTENZA.swiperAnimation(),
      POTENZA.rangesliders();
  });


  var text_History = [
    {
      "model": "gpt-4o",
      "messages": [
        { "role": 'system', "content": 'U are a doctor which define the illness depends on the symptoms. Give short the results' }
      ]
    }
  ];
  var image_History = [{
    "model": "gpt-4o",
    "messages": [
      { "role": 'system', "content": 'You are a biologist which find only name of the insects with 1 image.' }
    ]
  }];
  var chat_history = [
    { "role": 'assistant', "content": 'Hello! How can I assist you? If you share your symptoms, I will try to help you.' }
  ];

  showChatHistory();

  function showChatHistory() {
    $('.chat-container').empty();
    chat_history.forEach(function (message) {
      var messageElement;

      if (message.content && message.content.startsWith && message.content.startsWith('data:image/jpeg;base64,')) {
        var imgElement = $('<img>').attr('src', message.content).addClass('image-preview').css('width', '100px');
        messageElement = '<div class="' + message.role + '-message"><div class="' + message.role + '-message-inside"></div></div>';
        var $messageElement = $(messageElement);
        $messageElement.find('.' + message.role + '-message-inside').append(imgElement);
        $('.chat-container').append($messageElement);
      } else {
        messageElement = `
              <div class="${message.role}-message">
                  <div class="${message.role}-message-inside">
                      <p>${message.content}</p>
                      ${message.role === 'assistant' ? `
                          <div style="display: flex; flex-direction: row-reverse;">
                              <button class="play-btn d-block" data-message-id="${message.id}">
                                  <i class="fa-solid fa-play"></i>
                              </button>
                              <button class="pause-btn d-none">
                                  <i class="fa-solid fa-pause"></i>
                              </button>
                          </div>
                      ` : ''}
                  </div>
              </div>
          `;
        var $messageElement = $(messageElement);
        $('.chat-container').append($messageElement);

        if (message.role === 'assistant') {
          $messageElement.find('.play-btn').on('click', function (event) {
            window.speechSynthesis.cancel()
            $('.pause-btn').removeClass('d-block').addClass('d-none');
            $('.play-btn').removeClass('d-none').addClass('d-block');
            // Tıklanan butonun parent'ını bul
            var $parentDiv = $(this).closest('.assistant-message-inside');
            // Bu parent içindeki play butonlarını gizle
            $parentDiv.find('.play-btn').removeClass('d-block').addClass('d-none');
            // Bu parent içindeki pause butonlarını göster
            $parentDiv.find('.pause-btn').removeClass('d-none').addClass('d-block');

            // Burada diğer işlemleri gerçekleştirin
            const modalText = event.currentTarget.parentElement.parentNode.children[0].innerHTML;
            const sentences = modalText.match(/[^\.!\?]+[\.!\?]+/g);

            const speakSentences = (sentences, index = 0) => {
              if (index < sentences.length) {
                const utterance = new SpeechSynthesisUtterance(sentences[index]);
                utterance.lang = 'en-US';
                utterance.onend = () => speakSentences(sentences, index + 1);
                window.speechSynthesis.speak(utterance);
              } else {
                var $parentDiv2 = $(this).closest('.assistant-message-inside');
                // Bu parent içindeki play butonlarını gizle
                $parentDiv2.find('.pause-btn').removeClass('d-block').addClass('d-none');
                // Bu parent içindeki pause butonlarını göster
                $parentDiv2.find('.play-btn').removeClass('d-none').addClass('d-block');
              }
            };



            // Start speaking sentences
            speakSentences(sentences);
          });

          $messageElement.find('.pause-btn').on('click', function (event) {
            // Tıklanan butonun parent'ını bul
            var $parentDiv3 = $(this).closest('.assistant-message-inside');
            // Bu parent içindeki play butonlarını gizle
            $parentDiv3.find('.pause-btn').removeClass('d-block').addClass('d-none');
            // Bu parent içindeki pause butonlarını göster
            $parentDiv3.find('.play-btn').removeClass('d-none').addClass('d-block');

            window.speechSynthesis.cancel()

          });
        }
      }
    });


  }

  function fileToBase64(file, callback) {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
      const base64String = reader.result.split(',')[1];
      callback(base64String);
    };
    reader.onerror = error => console.error('Hata:', error);
  }

  function sendToOpenAI(data) {
    console.log("Gönderilen veri:", data);
    fetch('https://api.openai.com/v1/chat/completions', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer sk-proj-4viwb8warMb0M9rgxNjTT3BlbkFJHdJW6eCK1dNwIgIZsK2u'
      },
      body: JSON.stringify(data)
    })
      .then(response => response.json())
      .then(response_data => {
        console.log("Alınan yanıt:", response_data);
        var assistant_message = response_data.choices[0].message.content;

        chat_history.push({
          'role': 'assistant',
          'content': assistant_message
        });

        text_History[0].messages.push({
          'role': 'assistant',
          'content': assistant_message
        });

        image_History = [{
          "model": "gpt-4o",
          "messages": [
            { "role": 'system', "content": 'You are a biologist which find only biological name of the insects with 1 image. Also Find only diseased area if the image is an MRI image.' }
          ]
        }];

        showChatHistory();

        let myFormData = new FormData();
        myFormData.append('message', JSON.stringify(chat_history));
        myFormData.append('chatId', $("#chatId").val())

        let historySave = $("#saveHistory")[0].checked;


        if (historySave) {

          $.ajax({
            type: 'post',
            data: myFormData,
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            url: 'save_chat_history.php',
            success: function (response) {
              console.log(response);
            }
          });

        }

      })
      .catch(error => {
        console.error('Hata:', error);
        console.log('Hatanın detayı:', error.message);
      });
  }

  $('#upload').click(function (event) {
    event.preventDefault();
    $('#fileInput').click();
  });

  $('#fileInput').change(function () {
    const selectedFile = this.files[0];

    if (selectedFile && selectedFile.type.startsWith('image/')) {
      fileToBase64(selectedFile, function (base64Image) {
        var preview = $('<img>').attr('src', `data:image/jpeg;base64,${base64Image}`).addClass('image-preview');

        preview.css('width', '60px');

        chat_history.push({
          'role': 'user',
          'content': `data:image/jpeg;base64,${base64Image}`
        });

        image_History[0].messages.push({
          "role": "user",
          "content": [
            {
              "type": "image_url",
              "image_url": {
                "url": `data:image/jpeg;base64,${base64Image}`
              }
            }
          ]
        });

        showChatHistory();

        sendToOpenAI(image_History[0]);
      });
    }
  });

  $('#submit-btn').click(function (event) {
    event.preventDefault();

    if (!$('#selected-image').is(':empty') && $('#selected-image').attr('src')) {
      chat_history.push({
        'role': 'user',
        'content': $('#selected-image').attr('src')
      });
    }

    var userMessage = $('#userMessage').val().trim();
    if (userMessage !== '') {
      chat_history.push({
        'role': 'user',
        'content': userMessage
      });
      text_History[0].messages.push({
        'role': 'user',
        'content': userMessage
      });
    }

    showChatHistory();

    sendToOpenAI(text_History[0]);

    $('#userMessage').val('');

    $('#selected-image').attr('src', '').hide();



  });


})(jQuery);
