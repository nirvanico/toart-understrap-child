jQuery(document).ready(function ($) {

    //search bar hover
    $("#search-trigger").on("mouseover", function (e) {


        $("#search-trigger").animate({
            left: "30px",
            opacity: 1,
            marginLeft: "10px",
            fontSize: "1em",
        }, "slow");

        $("#search-field").fadeIn();
    });
    $("#search-field").on("mouseleave", function (e) {
        $("#search-field").fadeOut();

        $("#search-trigger").animate({
            right: "30px",
            opacity: 1,
            marginLeft: "10px",
            fontSize: "1em",
        }, "slow");
    });

    //instagram feed widget
    var Feed = new Instafeed({
        get: 'user',
        userId: '6251195013',
        clientId: '77a5cbd5ab584ffba026cfc3bfce2925',
        accessToken: '6251195013.1677ed0.5130e42cefbb41c8b7980256a6890152',
        resolution: 'standard_resolution',
        sortBy: 'most-liked',
        limit: 10,
        template: '<div class="insta-item">' +

            '<img alt="{{user.full_name}}" src="{{image}}">' +
            '<div class="insta-overlay text-center" >' +
            '<div class="insta-middle">' +
            '<a class="image insta-image" href="{{link}}">' +
            '<i class="fa fa-heart insta-likes pt-2"></i>' +
            '<div class="insta-likes">{{likes}}</div>' +
            '</a>' +
            '</div>' +
            '</div>' +
            '</div>'

    });

    Feed.run();
    //inizializza masonry x il widget instagram
    jQuery(window).load(function () {
        var instafeed = document.querySelector('.instafeedrow');
        var instafeedmsnr = new Masonry(instafeed, {
            itemSelector: '.insta-item',
            columnWidth: '.insta-item ',
            isAnimated: true,
            transitionDuration: '0.8s'

        });
    });
    $instafeed.imagesLoaded().progress(function () {
        $instafeed.instafeedmsnr();
    });

    //timeline script
    jQuery('.timeline').timeline({
        verticalStartPosition: 'right',
        verticalTrigger: '30px'
    });
});
