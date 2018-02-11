$(document).ready(function () {

    //click-event for the mobilemenu
    $('.header__hamburger').click(function () {
        
        $('.menu').show('slide', {
            direction: 'right'
        }, 1000);

        $('html').css({
            overflow: 'hidden',
            height: '100%'
        });

    });

    $('.menu__icon').click(function () {
       
        $('.menu').hide('slide', {
            direction: 'right'
        }, 1000);
      
        $('html').css({
            overflow: 'auto',
            height: 'auto'
        });

    });

    //click-event for the accordian in the footer
    $('.footer__menu-item').click(function () {
        $('.footer__menu-item-container').slideUp();
        $('.footer__heading-container').removeClass('active');

        if ($(this).find('.footer__menu-item-container').is(':visible')) {
            $(this).find('.footer__menu-item-container').slideUp(500);
            
        } else {
            $(this).find('.footer__menu-item-container').slideDown(500);
            $(this).find('.footer__menu-item-container').css({
                display: 'block'
            });
        }
    });

    //carousel
    //array that holds all the images
    var images = $('.gallery__image').map(function () {
        return $(this).attr('src');
    }).get();

    //makes sure that the big image above gallery is the first one in images
    $('.carousel__image').attr('src', images[0]);

    //hides the previous button including background when carousel starts
    $('.navigation__background--previous').css('display', 'none');

    //counts and saves the images array's lenght
    var numberOfImages = images.length;

    //sets the current images to 0, since the carousel hasnt been clicked yet
    var currentImage = 0;

    //click-event for the next button
    $('.carousel__next-btn').click(function () {
        $('.carousel__image').fadeOut('slow', function () {
            currentImage = Math.min(currentImage + 1, numberOfImages - 1);

            //sets the upcoming picture to the current image and places it
            //in the fullview
            $('.carousel__image').attr('src', images[currentImage]);

            //if current image is the last in the array, hide the next button
            if (currentImage >= numberOfImages - 1) {
                $('.navigation__background--next').css('display', 'none');
            } else {
                $('.navigation__background--next').css('display', 'block');
            }

            //if the current image is the first image in the array, hide the previous button
            if (currentImage === 0) {
                $('.navigation__background--previous').css('display', 'none');
            } else {
                $('.navigation__background--previous').css('display', 'block');
            }

        }).fadeIn(200);
    });

    //click-event for the previous button
    $('.carousel__previous-btn').click(function () {
        $('.carousel__image').fadeOut('slow', function () {

            //makes sure that current image cant below 0 ie the first index in array
            currentImage = Math.max(currentImage - 1, 0);

            $('.carousel__image').attr('src', images[currentImage]);

            //if current image is the last in the array, hide the next button
            if (currentImage >= numberOfImages - 1) {
                $('.navigation__background--next').css('display', 'none');
            } else {
                $('.navigation__background--next').css('display', 'block');
            }

            //if the current image is the first image in the array, hide the previous button
            if (currentImage === 0) {
                $('.navigation__background--previous').css('display', 'none');
            } else {
                $('.navigation__background--previous').css('display', 'block');
            }

        }).fadeIn(200);
    });

    //click-event for the pictures
    $('.gallery__image').click(function () {

        //gets the clicked image image src
        var imageSrc = $(this).attr('src');

        //and gets it's index in the array
        currentImage = images.indexOf(imageSrc);

        $('.carousel__image').fadeOut('easeIn', function () {

            $('.carousel__image').attr('src', images[currentImage]);

            //if current image is the last in the array, hide the next button
            if (currentImage >= numberOfImages - 1) {
                $('.navigation__background--next').css('display', 'none');
            } else {
                $('.navigation__background--next').css('display', 'block');
            }

            //if the current image is the first image in the array, hide the previous button
            if (currentImage === 0) {
                $('.navigation__background--previous').css('display', 'none');
            } else {
                $('.navigation__background--previous').css('display', 'block');
            }

        }).fadeIn(200);
    });
});

