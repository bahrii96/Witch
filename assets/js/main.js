(function ($) {

    $(document).ready(function () {

        // When the user scrolls the page, execute myFunction
        window.onscroll = function () { myFunction() };
        var header = document.querySelector("header");
        var sticky = header.offsetTop;
        function myFunction() {
            if (window.pageYOffset > 150) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }

        $('.header .menu-toggle, .header nav .close').click(function (e) {
            $('.header .menu-toggle, .header nav').toggleClass('is-active');
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

        $('.header .side-bar-toggle').click(function (e) {
            $('body').addClass('fixed');
            $('body .side-bar').addClass('show');
        });

        $('body .side-bar .close-sidebar').click(function (e) {
            $('body').removeClass('fixed');
            $('body .side-bar').removeClass('show');
        });

        const servicesAccordion = document.querySelectorAll("#rank-math-faq");
        servicesAccordion.forEach((el, index) => {
            el.setAttribute('id', 'rank-math-faq-' + index)
            const faq = document.querySelectorAll("#rank-math-faq-" + index);

            faq.forEach(accordion => {
                const faqQuestion = accordion.querySelectorAll('.rank-math-list-item .rank-math-question');
                faqQuestion.forEach(question => {
                    question.addEventListener("click", function () {
                        const isActive = this.classList.contains("active");
                        closeAllAccordionPanels(faq);

                        if (!isActive) {
                            this.classList.add("active");
                            const panel = this.nextElementSibling;
                            panel.style.display = "block";
                        }
                    });
                })
            });

            function closeAllAccordionPanels(faq) {
                faq.forEach(accordion => {
                    const faqQuestion = accordion.querySelectorAll('.rank-math-list-item .rank-math-question');
                    faqQuestion.forEach(remove => {
                        remove.classList.remove("active");
                        const panel = remove.nextElementSibling;
                        panel.style.display = "none";
                    })

                });
            }
        })

        $('.gform_wrapper h2').each(function () {
            let h2Text = $(this).html();
            let h3Element = $('<h5 class="gform_title">' + h2Text + '</h5>');
            $(this).replaceWith(h3Element);
        });
    });

})(jQuery);

