(function ($) {
    $(document).ready(function () {
        // When the user scrolls the page, execute myFunction

        // function removeActiveClass() {
        //     if ($('.is-active').length > 1) {
        //         $('.is-active').removeClass('is-active');
        //         console.log('444');
        //     }
        // }

        // $(document).on('click', function (e) {
        //     // Перевіряємо, чи клік був поза nav.nav-mob
        //     if (!$(e.target).hasClass('nav-mob') && !$(e.target).hasClass('menu-toggle')) {
        //         removeActiveClass();
        //     }
        // });

        $('.grid-image').fancybox({
            buttons: ['zoom', 'slideShow', 'fullScreen', 'thumbs', 'close'],
            loop: true,
        });
        window.onscroll = function () {
            myFunction();
        };
        var header = document.querySelector('header');
        var sticky = header.offsetTop;
        function myFunction() {
            if (window.pageYOffset > 30) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        }
        $('#accordion').accordion({
            collapsible: true,
            header: '> div > h3',
            heightStyle: 'content',
            active: false,
        });

        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 2,
            spaceBetween: 8,

            pagination: {
                clickable: true,
            },
            breakpoints: {
                767: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
            autoplay: {
                delay: 5000,
            },
            loop: true,
        });

        $('.header .menu-toggle, .header nav.nav-mob .close').click(function (e) {
            $('.header .menu-toggle, .header nav.nav-mob').toggleClass('is-active');
            $('body').toggleClass('is-active');
        });

        $('.header nav ul li.menu-item-has-children .icon').click(function () {
            const listItem = $(this).parent('li');
            $(this).toggleClass('rotate');
            listItem.toggleClass('is-active');
            if ($(this).hasClass('rotate')) {
                $(this).next().addClass('toggled');
            } else {
                $(this).next().removeClass('toggled');
            }
        });
        $('.header nav ul li.menu-item').click(function () {
            $('.header .menu-toggle, .header nav.nav-mob').toggleClass('is-active');
            $('body').toggleClass('is-active');
        });

        $('.header .side-bar-toggle').click(function (e) {
            $('body').addClass('fixed');
            $('body .side-bar').addClass('show');
        });

        $('body .side-bar .close-sidebar').click(function (e) {
            $('body').removeClass('fixed');
            $('body .side-bar').removeClass('show');
        });
		});
	
		
})(jQuery);

document.addEventListener(
    'wpcf7mailsent',
    function (event) {
        window.location.href = '/thanks';
    },
    false,
);
