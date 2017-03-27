var util={Global:{init:function(){this.ajaxSubmit(),this.masterheadEffects(),this.anchorLinks(),this.stickyNav(),this.selectColor(),this.imgdatahover(),this.contact()},ajaxSubmit:function(){$("#contact-form").submit(function(e){e.preventDefault();var t=$(this).validationEngine("validate");if(t)return $.ajax({url:"includes/contact-form.php",type:"post",data:$(this).serialize(),dataType:"json",asynce:!1,beforeSend:function(){$("div.main-content").before('<span class="loading"></span>')},success:function(e){return"ok"===e.result?(setTimeout(function(){$("#contact-form").get(0).reset()},1500),$("#contact-form").hide(),$("span.loading").remove(),$("#contact-message").addClass("is-success"),void $("#contact-message").html("<p>Thank you for your interest. One of our friendly customer service officers will get back to you as soon as possible.</p>").show()):void 0}}),!1})},contact:function(){$(".contact-form .form-control").focus(function(){$(this).parent().removeClass("round"),$(this).parent().addClass("focused")}).blur(function(){$(this).parent().removeClass("focused"),$(this).parent().addClass("round")})},imgdatahover:function(){var e="";$(".features-item").on("mouseover",function(){var t=$(this).attr("data-color");$(".features").removeClass(e),$(".features").addClass(t),e=t})},stickyNav:function(){$(window).scroll(function(){clearTimeout($.data(this,"scrollCheck")),$.data(this,"scrollCheck",setTimeout(function(){$(window).scrollTop()>160?$("body").addClass("navbar-shrink").trigger('shrinked'):$("body").removeClass("navbar-shrink").trigger('unshrinked')},10))})},anchorLinks:function(){$(".anchor-links").singlePageNav({offset:66,filter:":not(.external)",updateHash:!0,beforeStart:function(){},onComplete:function(){}})},selectColor:function(){$("#colorselector_1").colorselector({callback:function(e){$(".device-colorselector-color").css({background:"url(img/detector-colors/"+e+".png)"})}}),$("#colorselector_2").colorselector({callback:function(e,t){$(".device-colorselector-holder").css("background-color",t)}})},masterheadEffects:function(){function e(){$(".masterhead").css({height:a-40}),$(".masterhead-img").css("height",a),$(".masterhead-detector img").mouseleave(function(){$(".masterhead-img-hover").animate({height:a},200)})}function t(){return $("body").addClass("masterhead-detector-hovered"),$(".masterhead-intro-front .animated").removeClass("go"),$(".masterhead-intro-back .animated").addClass("go"),$(".masterhead-img-hover").animate({height:0,opacity:1},200),!1}function o(){return $("body").removeClass("masterhead-detector-hovered"),$(".masterhead-intro-front .animated").addClass("go"),$(".masterhead-intro-back .animated").removeClass("go"),$(".masterhead-img-hover").animate({height:a},300),!1}var a=$(window).height();$(document).ready(function(){e()}),window.onresize=function(){e()},$(window).load(function(){function e(){o(),$(".masterhead-detector").mouseenter(function(){t()}),$(".masterhead-detector").mouseleave(function(){o()})}t(),window.setTimeout(e,5e3)})}}};$(window).ready(function(){util.Global.init()}),jQuery(document).ready(function($){$(window).load(function(){$("#preloader").fadeOut("slow",function(){$(this).remove()})})});
if ( jQuery('#map-canvas').length != 0 ) {

    // if (!document.getElementById('map-canvas')) return;

    var $el = jQuery('#map-canvas'),
        lat = parseInt($el.data('lat')) != 0 ? $el.data('lat'): -25.363882,
        lng = parseInt($el.data('lng')) != 0 ? $el.data('lng'): 131.044922,
        title = $el.data('title'),
        myLatlng = new google.maps.LatLng(lat, lng),
        mapOptions = {
            zoom: 15,
            center: myLatlng
        },
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions),
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: title
        });

    var infowindow = new google.maps.InfoWindow({
        content: title
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

}

$(document).ready(function() {    

    $('.tabs div a:first').addClass('active');
    $('.tabs div a:not(:first)').addClass('inactive');
    $('.section-about-vm .row, .section-services-xp .row .row').hide();
    $('.section-about-vm .row:first, .section-services-xp .row .row:first').show();
        
    $('.tabs div a').click(function(e){
        e.preventDefault();
        var t = $(this).attr('id');

        if($(this).hasClass('inactive')){ //this is the start of our condition 
            $('.tabs div a').addClass('inactive');
            $('.tabs div a').removeClass('active');      
            $(this).removeClass('inactive');
            $(this).addClass('active');

            $('.section-about-vm .row, .section-services-xp .row .row').hide();
            $('#'+ t + '-row').fadeIn('fast');
        }
    });

    $('body').on('shrinked', function() {
        $('.prime-urban-brand img').attr({
            src: 'http://prime.urban/wp-content/themes/lmtheme/assets/images/logo-alt-prime-urban.png'
        });
    });

    $('body').on('unshrinked', function() {
        $('.prime-urban-brand img').attr({
            src: 'http://prime.urban/wp-content/themes/lmtheme/assets/images/logo-prime-urban.png'
        });
    });


    var $container = $('.card-holder'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector : '.card',
        layoutMode : 'masonry'
    });

    //Add the class selected to the item that is clicked, and remove from the others
    var $optionSets = $('.card-filter'),
    $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('active') ) {
            return false;
        }

        var $optionSet = $this.parents('#filters');
        $optionSets.find('.active').removeClass('active');
        $this.addClass('active');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        $container.isotope('reLayout');

        return false;
    });

});