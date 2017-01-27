$("marquee").hover(function () { 
        this.stop();
    }, function () {
        this.start();
    });


    var nt_title = $('#nt-title').newsTicker({
        row_height: 40,
        max_rows: 1,
        duration: 3000,
        pauseOnHover: 0
    });
    var nt_example1 = $('#nt-example1').newsTicker({
        row_height: 80,
        max_rows: 3,
        duration: 3000,
        prevButton: $('#nt-example1-prev'),
        nextButton: $('#nt-example1-next')
    });
    var nt_example2 = $('#nt-example2').newsTicker({
        row_height: 80,
        max_rows: 3,
        duration: 3000,
        prevButton: $('#nt-example2-prev'),
        nextButton: $('#nt-example2-next')
    });

    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
          transitionStyle : "fade",
          autoPlay: 3000,
          slideSpeed : 300,
          pagination: false,
          singleItem:true,
          dots: false,
      });
      var owl = $("#owl-demo");

               // Custom Navigation Events
               $(".next").click(function(){
                owl.trigger('owl.next');
            })
               $(".prev").click(function(){
                owl.trigger('owl.prev');
            })

           });
