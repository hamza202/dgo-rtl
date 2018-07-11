

<!-- Google Autocomplete -->
function initAutocomplete() {
    var input = document.getElementById('autocomplete-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }
    });

    if ($('.main-search-input-item')[0]) {
        setTimeout(function () {
            $(".pac-container").prependTo("#autocomplete-container");
        }, 300);
    }
}

$(document).ready(function() {
    var date1 = $('#date1');
    var date2 = $('#date2');
    date1.datepicker({
        beforeShow: function () {
            setTimeout(appendsomething, 10);
        },
        onChangeMonthYear: function () {
            setTimeout(appendsomething, 10);
        },
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        onClose: function( selectedDate ) {
            var date = $(this).datepicker("getDate");

            date2.datepicker("setDate", date);
            date2.datepicker( "show" );

        }
    });
    var appendsomething = function () {
        $(".ui-datepicker-title").append("<div class='something'>تاريخ المغادرة</div>");
    }
    date2.datepicker({

        onChangeMonthYear: function () {
            setTimeout(appendsomething1, 10);
        },
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        onClose: function( selectedDate ) {
            var date = $(this).datepicker("getDate");
            var formattedDate = $.datepicker.formatDate('mm/dd/yy', date);

            date1.val(date1.val() + " - " + formattedDate);
        }
    });
    var appendsomething1 = function () {
        $(".ui-datepicker-title").append("<div class='something'>تاريخ الوصول</div>");
        $("#ui-datepicker-div").addClass("datepicker-blue");
    }
});



function pageLoadScript() {

    _stepEffect = $('#stepEffect').val();
    _style = 'style7_borderTop_circle';
    _stepTransition = $('#stepTransition').is(':checked');
    _showButtons = $('#showButtons').is(':checked');
    _showStepNum = $('#showStepNum').is(':checked');


    tsf1 = $('.tsf-wizard-1').tsfWizard({
        stepEffect: _stepEffect,
        stepStyle: _style,
        // navPosition: 'left',
        validation: true,
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        prevBtn: 'السابق<i class="fa fa-chevron-left"></i>  ',
        nextBtn: '<i class="fa fa-chevron-right"></i> التالي ',
        finishBtn: 'انهاء',
        height: 'auto'
    });


}
$(function () {
    pageLoadScript();
});
function pageLoadScript2() {
    _stepTransition = $('#stepTransition').is(':checked');
    _showButtons = $('#showButtons').is(':checked');
    _showStepNum = $('#showStepNum').is(':checked');


    tsf1 = $('.tsf-wizard-2').tsfWizard({
        stepEffect: 'basic',
        stepStyle: 'style1',
        navPosition: 'top',
        validation: false,
        rtl:true,
        stepTransition: _stepTransition,
        showButtons: _showButtons,
        showStepNum: _showStepNum,
        prevBtn: 'السابق<i class="fa fa-chevron-left"></i>  ',
        nextBtn: '<i class="fa fa-chevron-right"></i> التالي ',
        finishBtn: 'انهاء',
        height: 'auto',
    });


}
$(function () {
    pageLoadScript2();
});
// Also see: https://www.quirksmode.org/dom/inputfile.html

var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
    customInput(inputs[i])
}

function customInput(el) {
    const fileInput = el.querySelector('[type="file"]')
    const label = el.querySelector('[data-js-label]')

    fileInput.onchange =
        fileInput.onmouseout = function () {
            if (!fileInput.value) return

            var value = fileInput.value.replace(/^.*[\\\/]/, '')
            el.className += ' -chosen'
            label.innerText = value
        }
}
if ($(window).width() < 768) {
    $('.tsf-wizard-btn').click(function () { // on button click
        $("html, body").animate({ // catch the html, body
            scrollTop: 320 // make their scrollTop property 0, to go at the top
        }, 1000); // in 1000 ms (1 second)
    });
}
$('#add-drive-form').parsley();