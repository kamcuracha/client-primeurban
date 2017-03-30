jQuery(document).ready(function($) {
    var util = {
        Global: {
            init: function() {
                this.anchorLinks(),
                this.imgdatahover(),
                this.stickyNav(),
                this.animate(),
                this.site(),
                this.gmap()
            },
            stickyNav: function() {
                $(window).scroll(function() {
                    clearTimeout($.data(this, "scrollCheck")), $.data(this, "scrollCheck", setTimeout(function() {
                        $(window).scrollTop() > 160 ? $("body").addClass("navbar-shrink").trigger('shrinked') : $("body").removeClass("navbar-shrink").trigger('unshrinked')
                    }, 10))
                })

                $('body').on('shrinked', function() {
                    $('.prime-urban-brand img').attr({
                        src: '/wp-content/themes/lmtheme/assets/images/logo-alt-prime-urban.png'
                    });
                });

                $('body').on('unshrinked', function() {
                    $('.prime-urban-brand img').attr({
                        src: '/wp-content/themes/lmtheme/assets/images/logo-prime-urban.png'
                    });
                });
            },
            imgdatahover: function() {
                var e = "";
                jQuery(".features-item").on("mouseover", function() {
                    var t = jQuery(this).attr("data-color");
                    jQuery(".features").removeClass(e), jQuery(".features").addClass(t), e = t
                })
            },
            anchorLinks: function() {
                jQuery(".anchor-links-v2").singlePageNav({
                    offset: 66,
                    filter: ":not(.external)",
                    updateHash: !0,
                    beforeStart: function() {},
                    onComplete: function() {}
                })
            },
            animate: function() {

            },
            site: function() {
                $('.tabs div a:first').addClass('active');
                $('.tabs div a:not(:first)').addClass('inactive');
                $('.section-about-vm .row, .section-services-xp .row .row').hide();
                $('.section-about-vm .row:first, .section-services-xp .row .row:first').show();

                $('.tabs div a').click(function(e) {
                    e.preventDefault();
                    var t = $(this).attr('id');

                    if ($(this).hasClass('inactive')) { //this is the start of our condition
                        $('.tabs div a').addClass('inactive');
                        $('.tabs div a').removeClass('active');
                        $(this).removeClass('inactive');
                        $(this).addClass('active');

                        $('.section-about-vm .row, .section-services-xp .row .row').hide();
                        $('#' + t + '-row').fadeIn('fast');
                    }
                });

                // $('body').on('shrinked', function() {
                //     $('.prime-urban-brand img').attr({
                //         src: '/wp-content/themes/lmtheme/assets/images/logo-alt-prime-urban.png'
                //     });
                // });
                //
                // $('body').on('unshrinked', function() {
                //     $('.prime-urban-brand img').attr({
                //         src: '/wp-content/themes/lmtheme/assets/images/logo-prime-urban.png'
                //     });
                // });
            },
            gmap: function() {
                if ( jQuery('#map-canvas').length != 0 ) {

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
            }
        }
    };

    $(window).load(function() {
        $("#preloader").fadeOut("slow", function() {
            $(this).remove()
        })
    });

    util.Global.init();

    $(".animatedParent").appear();

    $(document.body).on("appear", ".animatedParent", function(t, e) {
        var i = $(this).find(".animated"),
            s = $(this);
        if (void 0 != s.attr("data-sequence")) {
            var n = $(this).find(".animated:first").attr("data-id"),
                o = n,
                a = $(this).find(".animated:last").attr("data-id");
            $(s).find(".animated[data-id=" + o + "]").addClass("go"), o++, delay = Number(s.attr("data-sequence")), $.doTimeout(delay, function() {
                return $(s).find(".animated[data-id=" + o + "]").addClass("go"), ++o, a >= o ? !0 : void 0
            })
        } else i.addClass("go")
    }), $(document.body).on("disappear", ".animatedParent", function(t, e) {
        $(this).hasClass("animateOnce") || $(this).find(".animated").removeClass("go")
    }), $(window).load(function() {
        $.force_appear()
    }), "function" != typeof Object.create && (Object.create = function(t) {
        function e() {}
        return e.prototype = t, new e
    })





});

