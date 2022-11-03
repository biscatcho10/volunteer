let showInput = $('.show_input')

$('.input_Other_checkbox').change(function() {
    $(this).parent().siblings('.inp_Other').attr('disabled',!this.checked)

    if (this.checked) {
        $(this).parent().parent().prevAll().find('input').prop('checked', false).attr('disabled',true)
    }else{
        $(this).parent().parent().prevAll().find('input').attr('disabled',false)
    }

});

if (showInput.val() == '') {
    $('.input_ input[type="text"]:not(.show_input)').attr('disabled','')
}

// start event keyup all input
$('.singl_question_text input[type="text"]').keyup(function(e) {

    $('.singl_question_text input[type="text"].show_input').val()

    // select element this Prev All input && this Next All input && this Next input
    fristInput = $(this).parent().siblings('.input_').children('input.show_input')
    thisPrevAll = $(this).parent().prevAll('.input_').children('input')
    thisNextAll = $(this).parent().nextAll('.input_').children('input')
    thisNext = $(this).parent().next('.input_').children('input')

    // chick frist input vlaue not empty
    if (fristInput.val() != '' || ($(this).hasClass('show_input') && $(e).val != '') || showInput.val() != '') {
        // chick this input vlaue not empty
        if ($(this).val() != '') {

            // chick this Prev All input vlaue not empty
            if (thisPrevAll.val() != '' || showInput == $(this)) {

                thisNext.removeAttr('disabled') // show next input

                // next input vlaue not empty show all input value not empty
                let prevElement = []
                thisNextAll.each( e => {
                    prevElement.push(thisNextAll[e])
                })
                prevElement.filter(e => {
                    if (e.value != '') {
                        e.removeAttribute('disabled')
                        $(e).parent().next('.input_').children('input').removeAttr('disabled')
                    }
                });

            }else {

                thisNext.attr('disabled')

            }

        }else{

            thisNextAll.attr('disabled','')

        }

    }
    else{

        thisNextAll.attr('disabled','')

    }

});

