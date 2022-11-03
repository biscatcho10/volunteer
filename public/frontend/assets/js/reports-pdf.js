$(document).ready(function () {

    document.querySelectorAll('.MyPdf').forEach(e => {

        e.addEventListener('click',function (f) {

            src = this.parentElement.getAttribute('source'); // get source pdf
            dir = (this.parentElement.getAttribute('dir-right').toLowerCase() === 'true'); //get direction pdf

            $(this.parentElement).flipBook({
                pdfUrl: src,
                rightToLeft: dir,
                btnDownloadPages : {enabled:false},
                btnDownloadPdf : {enabled:false},
                btnPrint : {enabled:false},
                lightBox:true,
                lightboxBackground:'url("' + './assets/images/pattern-eq4r.png' + '") repeat fixed center',
            });

        });

    })
})
