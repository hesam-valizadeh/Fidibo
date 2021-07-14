        $(document).ready(function () {

            var owl = $('.owl-carousel');

            owl.owlCarousel({

                loop: true,

                margin: 10,

                navRewind: false,

                responsive: {

                    0: {

                        items: 1

                    },

                    550: {

                        items: 2

                    },

                    900: {

                        items: 3

                    },

                    1200: {

                        items: 4

                    }

                }

            });

        });
        //-----------------------------------------------login
 $(document).ready(function () {

    $(".btn4").click(function () {
      $(".p4").slideToggle(0);
  });
});
