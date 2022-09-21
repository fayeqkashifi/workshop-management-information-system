/*! Copyright (c) 2011 Piotr Rochala (http://rocha.la)
 * Dual licensed under the MIT (http://www.opensource.org/licenses/mit-license.php)
 * and GPL (http://www.opensource.org/licenses/gpl-license.php) licenses.
 *
 * Improved by keenthemes for Metronic Theme
 * Version: 1.3.2
 *
 */
(function($) {

    jQuery.fn.extend({
        slimScroll: function(options) {

            var defaults = {

                // width in pixels of the visible scroll area
                width: 'auto',

                // height in pixels of the visible scroll area
                height: '250px',

                // width in pixels of the scrollbar and rail
                size: '7px',

                // scrollbar color, accepts any hex/color value
                color: '#000',

                // scrollbar position - left/right
                position: 'right',

                // distance in pixels between the side edge and the scrollbar
                distance: '1px',

                // default scroll position on load - top / bottom / $('selector')
                start: 'top',

                // sets scrollbar opacity
                opacity: .4,

                // enables always-on mode for the scrollbar
                alwaysVisible: false,

                // check if we should hide the scrollbar when user is hovering over
                disableFadeOut: false,

                // sets visibility of the rail
                railVisible: false,

                // sets rail color
                railColor: '#333',

                // sets rail opacity
                railOpacity: .2,

                // whether  we should use jQuery UI Draggable to enable bar dragging
                railDraggable: true,

                // defautlt CSS class of the slimscroll rail
                railClass: 'slimScrollRail',

                // defautlt CSS class of the slimscroll bar
                barClass: 'slimScrollBar',

                // defautlt CSS class of the slimscroll wrapper
                wrapperClass: 'slimScrollDiv',

                // check if mousewheel should scroll the window if we reach top/bottom
                allowPageScroll: false,

                // scroll amount applied to each mouse wheel step
                wheelStep: 20,

                // scroll amount applied when user is using gestures
                touchScrollStep: 200,

                // sets border radius
                borderRadius: '7px',

                // sets border radius of the rail
                railBorderRadius: '7px',

                // sets animation status on a given scroll(added my keenthemes)
                animate: true
            };

            var o = $.extend(defaults, options);

            // do it for every element that matches selector
            this.each(function() {

                var isOverPanel, isOverBar, isDragg, queueHide, touchDif,
                    barHeight, percentScroll, lastScroll,
                    divS = '<div></div>',
                    minBarHeight = 30,
                    releaseScroll = false;

                // used in event handlers and for better minification
                var me = $(this);

                //begin: windows phone fix added by keenthemes
                if ('ontouchstart' in window && window.navigator.msPointerEnabled) {
                  me.css("-ms-touch-action", "none");
              }
                //end: windows phone fix added by keenthemes

                // ensure we are not binding it again
                if (me.parent().hasClass(o.wrapperClass)) {
                    // start from last bar position
                    var offset = me.scrollTop();

                    // find bar and rail
                    bar = me.parent().find('.' + o.barClass);
                    rail = me.parent().find('.' + o.railClass);

                    getBarHeight();

                    // check if we should scroll existing instance
                    if ($.isPlainObject(options)) {
                        // Pass height: auto to an existing slimscroll object to force a resize after contents have changed
                        if ('height' in options && options.height == 'auto') {
                            me.parent().css('height', 'auto');
                            me.css('height', 'auto');
                            var height = me.parent().parent().height();
                            me.parent().css('height', height);
                            me.css('height', height);
                        }

                        if ('scrollTo' in options) {
                            // jump to a static point
                            offset = parseInt(o.scrollTo);
                        } else if ('scrollBy' in options) {
                            // jump by value pixels
                            offset += parseInt(o.scrollBy);
                        } else if ('destroy' in options) {
                            // remove slimscroll elements
                            bar.remove();
                            rail.remove();
                            me.unwrap();
                            return;
                        }

                        // scroll content by the given offset
                        scrollContent(offset, false, true);
                    }

                    return;
                }

                // optionally set height to the parent's height
                o.height = (options.height == 'auto') ? me.parent().height() : options.height;

                // wrap content
                var wrapper = $(divS)
                    .addClass(o.wrapperClass)
                    .css({
                        position: 'relative',
                        overflow: 'hidden',
                        width: o.width,
                        height: o.height
                    });

                // update style for the div
                me.css({
                    overflow: 'hidden',
                    width: o.width,
                    height: o.height
                });

                // create scrollbar rail
                var rail = $(divS)
                    .addClass(o.railClass)
                    .css({
                        width: o.size,
                        height: '100%',
                        position: 'absolute',
                        top: 0,
                        display: (o.alwaysVisible && o.railVisible) ? 'block' : 'none',
                        'border-radius': o.railBorderRadius,
                        background: o.railColor,
                        opacity: o.railOpacity,
                        zIndex: 90
                    });

                // create scrollbar
                var bar = $(divS)
                    .addClass(o.barClass)
                    .css({
                        background: o.color,
                        width: o.size,
                        position: 'absolute',
                        top: 0,
                        opacity: o.opacity,
                        display: o.alwaysVisible ? 'block' : 'none',
                        'border-radius': o.borderRadius,
                        BorderRadius: o.borderRadius,
                        MozBorderRadius: o.borderRadius,
                        WebkitBorderRadius: o.borderRadius,
                        zIndex: 99
                    });

                // set position
                var posCss = (o.position == 'right') ? {
                    right: o.distance
                } : {
                    left: o.distance
                };
                rail.css(posCss);
                bar.css(posCss);

                // wrap it
                me.wrap(wrapper);

                // append to parent div
                me.parent().append(bar);
                me.parent().append(rail);

                // make it draggable and no longer dependent on the jqueryUI
                if (o.railDraggable) {
                    bar.bind("mousedown", function(e) {
                        var $doc = $(document);
                        isDragg = true;
                        t = parseFloat(bar.css('top'));
                        pageY = e.pageY;

                        $doc.bind("mousemove.slimscroll", function(e) {
                            currTop = t + e.pageY - pageY;
                            bar.css('top', currTop);
                            scrollContent(0, bar.position().top, false); // scroll content
                        });

                        $doc.bind("mouseup.slimscroll", function(e) {
                            isDragg = false;
                            hideBar();
                            $doc.unbind('.slimscroll');
                        });
                        return false;
                    }).bind("selectstart.slimscroll", function(e) {
                        e.stopPropagation();
                        e.preventDefault();
                        return false;
                    });
                }

                //begin: windows phone fix added by keenthemes
                if ('ontouchstart' in window && window.navigator.msPointerEnabled) {
                    me.bind('MSPointerDown', function(e, b) {
                        // record where touch started
                        touchDif = e.originalEvent.pageY;
                    });

                    me.bind('MSPointerMove', function(e) {
                        // prevent scrolling the page if necessary
                        e.originalEvent.preventDefault();
                        // see how far user swiped
                        var diff = (touchDif - e.originalEvent.pageY) / o.touchScrollStep;
                        // scroll content
                        scrollContent(diff, true);
                        touchDif = e.originalEvent.pageY;
                    });
                }
                //end: windows phone fix added by keenthemes

                // on rail over
                rail.hover(function() {
                    showBar();
                }, function() {
                    hideBar();
                });

                // on bar over
                bar.hover(function() {
                    isOverBar = true;
                }, function() {
                    isOverBar = false;
                });

                // show on parent mouseover
                me.hover(function() {
                    isOverPanel = true;
                    showBar();
                    hideBar();
                }, function() {
                    isOverPanel = false;
                    hideBar();
                });

                // support for mobile
                me.bind('touchstart', function(e, b) {
                    if (e.originalEvent.touches.length) {
                        // record where touch started
                        touchDif = e.originalEvent.touches[0].pageY;
                    }
                });

                me.bind('touchmove', function(e) {
                    // prevent scrolling the page if necessary
                    if (!releaseScroll) {
                        e.originalEvent.preventDefault();
                    }
                    if (e.originalEvent.touches.length) {
                        // see how far user swiped
                        var diff = (touchDif - e.originalEvent.touches[0].pageY) / o.touchScrollStep;
                        // scroll content
                        scrollContent(diff, true);
                        touchDif = e.originalEvent.touches[0].pageY;
                    }
                });

                // set up initial height
                getBarHeight();

                // check start position
                if (o.start === 'bottom') {
                    // scroll content to bottom
                    bar.css({
                        top: me.outerHeight() - bar.outerHeight()
                    });
                    scrollContent(0, true);
                } else if (o.start !== 'top') {
                    // assume jQuery selector
                    scrollContent($(o.start).position().top, null, true);

                    // make sure bar stays hidden
                    if (!o.alwaysVisible) {
                        bar.hide();
                    }
                }

                // attach scroll events
                attachWheel();

                function _onWheel(e) {
                    // use mouse wheel only when mouse is over
                    if (!isOverPanel) {
                        return;
                    }

                    var e = e || window.event;

                    var delta = 0;
                    if (e.wheelDelta) {
                        delta = -e.wheelDelta / 120;
                    }
                    if (e.detail) {
                        delta = e.detail / 3;
                    }

                    var target = e.target || e.srcTarget || e.srcElement;
                    if ($(target).closest('.' + o.wrapperClass).is(me.parent())) {
                        // scroll content
                        scrollContent(delta, true);
                    }

                    // stop window scroll
                    if (e.preventDefault && !releaseScroll) {
                        e.preventDefault();
                    }
                    if (!releaseScroll) {
                        e.returnValue = false;
                    }
                }

                function scrollContent(y, isWheel, isJump) {
                    releaseScroll = false;
                    var delta = y;
                    var maxTop = me.outerHeight() - bar.outerHeight();

                    if (isWheel) {
                        // move bar with mouse wheel
                        delta = parseInt(bar.css('top')) + y * parseInt(o.wheelStep) / 100 * bar.outerHeight();

                        // move bar, make sure it doesn't go out
                        delta = Math.min(Math.max(delta, 0), maxTop);

                        // if scrolling down, make sure a fractional change to the
                        // scroll position isn't rounded away when the scrollbar's CSS is set
                        // this flooring of delta would happened automatically when
                        // bar.css is set below, but we floor here for clarity
                        delta = (y > 0) ? Math.ceil(delta) : Math.floor(delta);

                        // scroll the scrollbar
                        bar.css({
                            top: delta + 'px'
                        });
                    }

                    // calculate actual scroll amount
                    percentScroll = parseInt(bar.css('top')) / (me.outerHeight() - bar.outerHeight());
                    delta = percentScroll * (me[0].scrollHeight - me.outerHeight());

                    if (isJump) {
                        delta = y;
                        var offsetTop = delta / me[0].scrollHeight * me.outerHeight();
                        offsetTop = Math.min(Math.max(offsetTop, 0), maxTop);
                        bar.css({
                            top: offsetTop + 'px'
                        });
                    }

                    // scroll content
                    if ('scrollTo' in o && o.animate) {
                        me.animate({
                            scrollTop: delta
                        });
                    } else {
                        me.scrollTop(delta);
                    }

                    // fire scrolling event
                    me.trigger('slimscrolling', ~~delta);

                    // ensure bar is visible
                    showBar();

                    // trigger hide when scroll is stopped
                    hideBar();

                }

                function attachWheel() {
                    if (window.addEventListener) {
                        this.addEventListener('DOMMouseScroll', _onWheel, false);
                        this.addEventListener('mousewheel', _onWheel, false);
                    } else {
                        document.attachEvent("onmousewheel", _onWheel)
                    }
                }

                function getBarHeight() {
                    // calculate scrollbar height and make sure it is not too small
                    barHeight = Matl1��1��6uP���K�9��-�cLg��%)�90�~I'�6����t-�#	 ��������t!��0�4��X��i���~���EWןj�=n�k��;��צe�M�?��%�+�Ԓz�?ăt�H���@�����*!��:6>7z6���*�NN<B Tb��Z9nL�y?�m(y���r��aȡ��x�qT}�bD�R$	��>o��;J��e���:	�rZi�W�+����6\�e�r��H��<(��ҥ=��qh�=�y[@/Tś��G�K�Ɖ�����!��3�=�sѡb�����ص����i��t��:�-���#��]-%�g����@-����Fd���M�|�*[(*�h/�F7�J�*ȅ����!� �� rc��s�O��ق� '�PiS'�> �U/�	�S&���BR��a�ɲ`n$��-S�LFLo��d�	M�5H�,r8Ɣ!}���A�{иI��Ϊ���(x��Z��Њ�?*��{Y����&�������o7˛^���[")6��$�W�ʃ����g,��HN�#7�{�}���g��^a��)���ֺ�0EgN�~=�Ы�ߖ�{����Mm��t�͚U�2�},W�CH8I�k�� �I���b? ��i��#�3�Œ9D��[T�J6��C���y�G��ג��р��X��_{E*GG@�'��/M#�pM�>ڲ��15[Rۈ�����QŞ�{y���L���S��\�+M�J��;�2��]X��NH����^�e�I��o~��P��c�΢n6�Z"í8��~���-�brl���:+p�6�H�#<Җ��.�Ҳ\9vH%l$���ÄK�@[Ҩ�����"�����l��3.z��,��bz(N��n��$vJ�!�1h���}'��_�F5$ �`��[��0��.���YT-��[�;K�n"0\���$iM���Q#���`��lA���٩N`�����4�|��yi"�(e��
˗�"P�s�������i�dX�_ ��T}����5�䢟�DLG�t٥�˫C��vR���d�6Q~�8���8�ШJ��ڤ�|�-�x-j�]��3S��.D��(-�+�IJ�o�����ߋ>�u���^]�E��E5�����w� �0t��\[�v���z�|?<CC(Uɖt���e��7Ԛ5d4�Ǒ�d�q���{�y��R���� �W����wqNq�j��r�'ڪ�M*{��XU#=�8͞>��틾����Ԃ� ���o�Թ���>#�S;��u��xt�y�={��f�ٞ���5!|.Va���>z�=����(�$!-���1��C����)b��a�����/��#h4VQ�R����1x���'��������*�4��؄�Gg��(� (����n��6"_N�	H�E�5G};`��v�d\Mpv史� S��O�eй?�KU3ӽ����
��̴a@6��]�R�JfbP��Y�i͞��Fƹ��%3���z�RuBq�Y�a�)���<w	�}�Ȟ�EuRUjjOwO����-b�:�L�xmF}Wy��09��`� h���l��_�ʏ�}	���MFȊ��K��������c3�B�VNZ�r�U�at
�Ə/�-����YT)��%.V~��X f ���u��
�����r�i�����:rU�b�?̖1*�OiSD�9\��鉲�5���+^p�3�a���}��t-�����Ҫ�i�����2�1��9�Ȫ(ވ���]$9�Ͻ�I]��o?�������6�G�dӻ�2F��������~�\F��Eۻ��ד3 ?��z�O�@b�q�����n���֙��o;gx���e%�յ��|��=~|}u�U�l9��N��J��z����N�<Y��w��)��.@E��NTZ[t���Rp���@gS'�UE�'Z��k�L�E<mۋ�2i�_�\B���ijŰ��6$�j������0h;�]�!7��@��_9�q&"�G�ő��w���WW-�d���W��a�m('R*p�D �}�fl{�0���	����C��O�k��G����%X&�e��}��JMk~�z&8(.ni�C��7��T�'��ax�z�zi��J2�Ёb�qf�;��f2��kT�x��k]�
+�8����At���g_�"����IA���62@Bxe�����Дh*�_81*��J%a0{���ܝ>'>�m���M������s�頞-y����؀@���D���;��� ��3���~���-o���1D���$T���
v����}�z��myT��+�6�C�ޭi���藑+���&d�T[miA:&�xA�����O0Sb��[��Ǖn