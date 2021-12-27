// Click to Chat - Group
(function ($) {

    var is_mobile = (screen.width > 1024) ? "no" : "yes";

    // ready
    $(function () {

        var ht_ctc_group = document.querySelector('.ht-ctc-group');

        // display, click
        if (ht_ctc_group) {
            display(ht_ctc_group);

            ht_ctc_group.addEventListener('click', function () {

                // link
                var base_link = 'https://chat.whatsapp.com/';
                var group_id = ht_ctc_group.getAttribute('data-group_id');
                window.open(base_link + group_id, '_blank', 'noopener');

                ht_ctc_group_analytics(values);

            });
        }

        // click shortcode
        $('.ht-ctc-sc-group').click(function () {

            data_link = this.getAttribute("data-ctc-link");
            data_link = encodeURI(data_link);
            window.open(data_link, '_blank', 'noopener');

            analytics(this);

        });

        function analytics(values) {
            // analytics 
            try {
                // (app.js fn)
                id = values.getAttribute('data-group_id');
                ht_ctc_analytics(values, id);
            } catch (e) { }
        }


        // Hide based on device
        function display(p) {
            if (is_mobile == 'yes') {
                var display_mobile = p.getAttribute('data-display_mobile');
                if ('show' == display_mobile) {

                    // remove desktop style
                    var rm = document.querySelector('.ht_ctc_desktop_' + p.getAttribute('data-return_type'));
                    (rm) ? rm.remove() : '';

                    var css = p.getAttribute('data-css');
                    var position_mobile = p.getAttribute('data-position_mobile');
                    p.style.cssText = position_mobile + css;
                    group_display(p)
                }
            } else {
                var display_desktop = p.getAttribute('data-display_desktop');
                if ('show' == display_desktop) {

                    // remove mobile style
                    var rm = document.querySelector('.ht_ctc_mobile_' + p.getAttribute('data-return_type'));
                    (rm) ? rm.remove() : '';

                    var css = p.getAttribute('data-css');
                    var position = p.getAttribute('data-position');
                    p.style.cssText = position + css;
                    group_display(p)
                }
            }
        }


        function group_display(p) {

            try {
                var dt = parseInt(p.getAttribute('data-show_effect'));
                $(p).show(dt);
            } catch (e) {
                p.style.display = "block";
            }

            // animations
            var animateclass = p.getAttribute('data-an_type')
            setTimeout(function () {
                p.classList.add('ht_ctc_animation', animateclass);
            }, 120);

            // hover effects
            $(".ht-ctc-group").hover(function () {
                $('.ht-ctc-group .ht-ctc-cta-hover').show(220);
            }, function () {
                $('.ht-ctc-group .ht-ctc-cta-hover').hide(100);
            });

        }


    });

})(jQuery);