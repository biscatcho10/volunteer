@if ($page == 'home')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- video popup  -->
    <script defer src="{{ asset('frontend/assets/js/video-popup.js') }}"></script>

    <!-- carousel slider -->
    <script defer src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>

    <!-- Parallax native js -->
    <script defer src="{{ asset('frontend/assets/js/Parallax.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- home js  -->
    <script defer src="{{ asset('frontend/assets/js/home.js') }}"></script>
@elseif ($page == 'about')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- video popup  -->
    <script defer src="{{ asset('frontend/assets/js/video-popup.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/nav-page-about.js') }}"></script>
@elseif ($page == 'services')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@elseif ($page == 'show-service')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- video popup  -->
    <script defer src="{{ asset('frontend/assets/js/video-popup.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script>
        let allImg = document.querySelectorAll('#singl_services .grid_card > *:not(:first-child) img'),
            fristImg = document.querySelector('#singl_services .grid_card > .singl_card:first-child img')
        minTmg = document.querySelector('#singl_services .grid_card > .singl_card:nth-child(2) img')

        fristImg.src = minTmg.src
        allImg.forEach(e => {
            e.addEventListener('click', function() {
                fristImg.src = this.src
            })
        })
    </script>
@elseif ($page == 'reports')
    <script src="{{ asset('frontend//assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend//assets/js/aos.min.js') }}"></script>

    <!-- main js  -->
    <script src="{{ asset('frontend//assets/js/main.js') }}"></script>
    <!-- font awesome  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/js/all.min.js"></script>

    <!-- flipbook  -->
    <script src="{{ asset('frontend/assets/js/flipbook/flipbook.min.js') }}"></script>

    <!-- script flipbook page reports -->
    <script type="text/javascript">
        var url = "{{ asset('frontend/assets/images/pattern-eq4r.png') }}";
        $(document).ready(function() {

            document.querySelectorAll('.MyPdf').forEach(e => {

                e.addEventListener('click', function(f) {

                    src = this.parentElement.getAttribute('source'); // get source pdf
                    dir = (this.parentElement.getAttribute('dir-right').toLowerCase() ===
                        'true'); //get direction pdf

                    $(this.parentElement).flipBook({
                        pdfUrl: src,
                        rightToLeft: dir,
                        btnDownloadPages: {
                            enabled: false
                        },
                        btnDownloadPdf: {
                            enabled: false
                        },
                        btnPrint: {
                            enabled: false
                        },
                        lightBox: true,
                        lightboxBackground: 'url("' + url + '") repeat fixed center',
                    });

                });

            })
        })

        $(".downloadBtn").click(function () {
            let report = $(this).data("report");
            $.ajax({
                type: "POST",
                url: "{{ route('count.downloads') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    report : report,
                },
                dataType: "json",
                success: function (response) {
                }
            });
        });

        $(".previewBtn").click(function () {
            let report = $(this).data("report");
            $.ajax({
                type: "POST",
                url: "{{ route('count.previews') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    report : report,
                },
                dataType: "json",
                success: function (response) {
                }
            });
        });


    </script>
@elseif ($page == 'volunteers')
    <!-- jquery plugin -->
    <script  src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- main js  -->
    <script  src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- start volunteer js -->
    <script  src="{{ asset('frontend/assets/js/volunteer.js') }}"></script>
@elseif ($page == 'donations')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>
    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script>
        document.querySelectorAll('.myRadio').forEach(e => {
            e.addEventListener('click', function(e) {
                elem = this.getAttribute('myText')
                document.querySelectorAll('.myDonation').forEach(w => {
                    w.classList.remove('active')
                })
                document.querySelector(elem).classList.add('active')
            })
        })
    </script>
@elseif ($page == 'contact')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@elseif ($page == 'thanks')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@elseif ($page == 'media')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>

    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@elseif ($page == 'show-media')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- video popup  -->
    <script defer src="{{ asset('frontend/assets/js/video-popup.js') }}"></script>
    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>
    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@elseif ($page == 'news')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>
    <!-- video popup  -->
    <script defer src="{{ asset('frontend/assets/js/video-popup.js') }}"></script>
    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@elseif ($page == 'sub-services')
    <!-- jquery plugin -->
    <script defer src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- aos animation plugin -->
    <script src="{{ asset('frontend/assets/js/aos.min.js') }}"></script>
    <!-- main js  -->
    <script defer src="{{ asset('frontend/assets/js/main.js') }}"></script>
@endif
