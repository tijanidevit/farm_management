/*
tinc project builder
jsFile create on 18.03.2019 10:02:44
*/

$(window).on("load", function() {
    $(".headChart").addClass("active")
})

$(document).ready(function () {

    var ua = detect.parse(navigator.userAgent);
    $("html").addClass(ua.device.type + " " + ua.device.family + " " + ua.os.family + " " + ua.browser.family);


    if ($(".modalsScroll").length > 0) {
        openMod();
    }

    if ($("[data-modal-tab]").length > 0) {
        $("[data-modal-tab]").on("click", function () {
            var tab = $(this).attr("data-modal-tab"),
                index = $(".startTabs").find("#" + tab).index();

            $(".startTabs").tabs({
                active: index
            })
        })
    }

    if ($(".clock").length > 0) {
        function clock() {        
            var date = new Date(),
                utc = date.getTime() + (date.getTimezoneOffset()*60000 + 60000*60),
                date = new Date(utc),
                day = date.getDate(),
                month = date.getMonth(),
                monthArr = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
                year = date.getFullYear(),
                hour = date.getHours(),
                min = date.getMinutes(),
                sec = date.getSeconds();                

            if (day < 10) day = '0' + day;
            if (hour < 10) hour = '0' + hour;
            if (min < 10) min = '0' + min;
            if (sec < 10) sec = '0' + sec;

            document.getElementById("date").innerHTML = day + ' ' + monthArr[month] + ' ' + year;
            document.getElementById("time").innerHTML = hour + ':' + min + ':' + sec;
        }

        var timer;

        function clockStart() {
            timer = setInterval(clock, 1000);
            clock();
        }

        clockStart();
    }

    $(".menuBtn").on("click", function() {
        $(".menu").slideToggle(500)
    })

    $(".cabMenuBtn").on("click", function() {
        $(".cabNav").slideToggle(500)
    })

    if ($('select').length > 0) {
        $('select').map(function () {
            $(this).selectric()
        })
    }

    /*$('.enterNum').bind("change keyup input click", function () {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });*/

    var faqHead = $('.dropItem > .head'),
        faqContent = $('.dropItem > .content');

    if ($('.dropItem').length > 0) {
        $('.dropItem').map(function () {
            var el = $(this)
            if (el.find(faqHead).length > 0 && el.find(faqContent).length > 0) {

                el.find(faqHead).on('click', function () {
                    var el = $(this),
                        cont = el.siblings(faqContent);

                    if (el.hasClass('active')) {
                        cont.stop().slideUp(500, function () {
                            el.removeClass('active');
                            el.parent().removeClass('active');
                        });

                    } else {
                        cont.stop().slideDown(500, function () {
                            el.addClass('active');
                            el.parent().addClass('active');
                        });
                    }
                })
            }
        })
    }

    if ($(".tabs").length > 0) {
        $(".tabs").map(function () {
            $(this).tabs({
                show: {
                    effect: "fadeIn",
                    duration: 300
                },
                hide: {
                    effect: "fadeOut",
                    duration: 300
                }
            })
        })

        $(".bannerTabs").tabs({
            active: 0
        })

        $(".faqTabs").tabs({
            active: 1
        })
    }

    if ($(".copyLink").length > 0) {
        new ClipboardJS(".copyLink");
    }

    $(".setDate").datepicker({
        dateFormat: "MM-dd-yy",
        monthNames: ["Jan", "Feb", "Mar", "Ap", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
    })
})