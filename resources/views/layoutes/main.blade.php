<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ url('/img/quran.png') }}">
    <title>
        Friends with Quran
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ url('/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ url('/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('/Owlcarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('/Owlcarousel/css/owl.theme.default.min.css') }}">
</head>

<body class="g-sidenav-show bg-gray-100">
    @yield('content')

    <!--   Core JS Files   -->
    <script src="{{ url('/js/core/popper.min.js') }}"></script>
    <script src="{{ url('/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ url('/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ url('/Owlcarousel/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#carousel-0').owlCarousel({
                loop: false,
                margin: 10,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3

                    }
                }
            })
            $('#carousel-1').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 2.5

                    }
                }
            })
            $('#carousel-2').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $('#carousel-3').owlCarousel({
                loop: false,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $("#carousel-3 .owl-dots").css({
                'justify-self': 'end'
            });
        });

        function playAudio(id) {
            var $audio = $("#myAudio" + id);
            $audio[0].play();
        }
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var scale = 1 + (scroll / 3000);
            $("#zoom").css({
                transform: "scale(" + scale + ")"
            });
            scale = Math.min(scale, 1.3);
            $(".title").css({
                transform: "scale(" + scale + ")"
            });
            $(".fade-in").each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var windowTop = $(window).scrollTop();
                var windowBottom = windowTop + $(window).height();
                if (elementBottom > windowTop && elementTop < windowBottom) {
                    $(this).addClass("visible");
                } else {
                    $(this).removeClass("visible");
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('multiStepForm');
            const steps = form.querySelectorAll('.step');
            const prevButton = form.querySelector('.prev');
            const nextButton = form.querySelector('.next');
            let currentStep = 0;

            updateButtons();

            nextButton.addEventListener('click', () => {
                if (validateForm()) {
                    steps[currentStep].classList
                        .remove('active');
                    currentStep++;
                    steps[currentStep].classList
                        .add('active');
                    updateButtons();
                }
            });

            prevButton.addEventListener('click', () => {
                steps[currentStep].classList
                    .remove('active');
                currentStep--;
                steps[currentStep].classList
                    .add('active');
                updateButtons();
            });

            form.addEventListener('submit', (event) => {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });

            function validateForm() {
                const currentInputs = steps[currentStep]
                    .querySelectorAll('input, textarea');
                let valid = true;
                currentInputs.forEach(input => {
                    if (!input.checkValidity()) {
                        input.reportValidity();
                        valid = false;
                    }
                });
                return valid;
            }

            function updateButtons() {
                if (currentStep === 0) {
                    prevButton.style.display = 'none';
                } else {
                    prevButton.style.display = 'inline-block';
                }

                if (currentStep === steps.length - 1) {
                    nextButton.style.display = 'none';
                    form.querySelector('button[type="submit"]')
                        .style.display = 'inline-block';
                } else {
                    nextButton.style.display = 'inline-block';
                    form.querySelector('button[type="submit"]')
                        .style.display = 'none';
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("select#surah").change(function() {
                let no = $("select#surah").val();
                console.log($("select#surah").val());
                $('#ayat').empty(); // Clear dropdown
                $('#textArab').text(''); // Clear previous ayat text
                $('#terjemahan').text('');
                $('#noayat').text('');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    data: {
                        name: name
                    },
                    url: "https://equran.id/api/v2/surat/" + no,
                    success: function(data) {
                        console.log('Get Success');
                        console.log(data['data']['ayat']);
                        let dataSurah = data['data']['ayat']
                        let $arrayDisplay = $('#ayat');
                        dataSurah.forEach(function(item, index) {
                            $arrayDisplay.append('<option value="' + index + '">' + item
                                .nomorAyat + ' || ' + item.teksArab +
                                '</span></option>');
                        });
                        $("select#ayat").change(function() {
                            let noAyat = $("select#ayat").val();
                            $('#textArab').text(dataSurah[noAyat].teksArab);
                            $('#terjemahan').text(dataSurah[noAyat].teksIndonesia);
                            $('#noayat').text("ayat no - " + dataSurah[noAyat]
                                .nomorAyat);
                        });
                    }
                });
            });
            if ($(window).width() < 768) {
                $('.typing-effect').removeClass('typing-effect');
                $('.title').removeClass('title').addClass('fade-in-element visible');

            }
            var text = $(".typing-effect").text(); // Get the text inside the element
            $(".typing-effect").text(""); // Clear the text initially

            var i = 0;
            var typingSpeed = 50; // Adjust typing speed here
            var typingInterval = setInterval(function() {
                $(".typing-effect").append(text.charAt(i)); // Append one character at a time
                i++;
                if (i > text.length) {
                    clearInterval(typingInterval); // Stop typing once all characters are typed
                }
            }, typingSpeed);
            $(".fade-in-element").addClass("visible");


        });
    </script>
</body>

</html>
