$("#datepicker,#datepicker1,#datepicker2").datepicker({
    autoclose: true,
    todayHighlight: true,
    useCurrent: false,
    // format: "dd-mm-yyyy",
    format: "yyyy-mm-dd",
    showTodayButton: true,
});

// Validte Name 
function validateName(name) {
    var re = /^^[a-zA-Z ]*[a-zA-Z][a-zA-Z ]*$/;
    return re.test(String(name).toLowerCase());
}

function validateName(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    // var x = '^[a-zA-z]+[a-zA-z ]*$'
    // var regex = /^[a-zA-z]+[a-zA-z ]*$/gm;
    // if (!regex.test(key)) {
    //     theEvent.returnValue = false;
    //     if (theEvent.preventDefault) theEvent.preventDefault();
    // }
}


// Validte Email 
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


// Validte Phone 
function validatePhone(evt) {
    var theEvent = evt || window.event;
    var value = $('#phone').val();
    if (value.length > 14) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}


// Validte Survey Form 
function submit_survey() {
    $('.error-validate').remove();
    var area = $("#area").val();
    var disease = $("#disease").val();
    // First Row
    var target = $("#target").val();
    var topic1 = $("#topic1").val();
    var datepicker = $("#datepicker").val();
    // Second Row
    var target2 = $("#target2").val();
    var topic2 = $("#topic2").val();
    var datepicker1 = $("#datepicker1").val();
    // Last Row
    var target3 = $("#target3").val();
    var topic3 = $("#topic3").val();
    var datepicker2 = $("#datepicker2").val();

    var text = $("#text").val();
    var name = $("#name").val();
    var phone = $("#phone").val();
    var email = $("#email").val();

    var valid = true;
    $('.error-validate').remove();
    if (area == null || area == 0) {
        $('#area').closest('.form-group').append('<span class="error-validate">The therapeutic area field is required.</span>');
        valid = false;
        console.log('not valid area');
    } else if (disease == null || disease == 0) {
        $('#disease').closest('.form-group').append('<span class="error-validate">The disease field is required.</span>');
        valid = false;
        console.log('not valid disease ');
    } else if (target == null || target == 0) {
        $('#target').closest('.form-group').append('<span class="error-validate">The target field is required.</span>');
        valid = false;
        console.log('not valid target ');
    } else if (topic1 == null || topic1 == 0) {
        $('#topic1').closest('.form-group').append('<span class="error-validate">The topic field is required.</span>');
        valid = false;
        console.log('not valid topic1 1');
    } else if (datepicker == null || datepicker == "") {
        $('#datepicker').closest('.form-group').append('<span class="error-validate">The date field is required.</span>');
        valid = false;
        console.log('not valid datepicker ');
    } else if (target2 == null || target2 == 0) {
        $('#target2').closest('.form-group').append('<span class="error-validate">The target field is required.</span>');
        valid = false;
        console.log('not valid target 2');
    } else if (topic2 == null || topic2 == 0) {
        $('#topic2').closest('.form-group').append('<span class="error-validate">The topic field is required.</span>');
        valid = false;
        console.log('not valid topic1 2');
    } else if (datepicker1 == null || datepicker1 == "") {
        $('#datepicker1').closest('.form-group').append('<span class="error-validate">The date field is required.</span>');
        valid = false;
        console.log('not valid datepicker 1');
    } else if (target3 == null || target3 == 0) {
        $('#target3').closest('.form-group').append('<span class="error-validate">The target field is required.</span>');
        valid = false;
        console.log('not valid target 3');
    } else if (topic3 == null || topic3 == "") {
        $('#topic3').closest('.form-group').append('<span class="error-validate">The topic field is required.</span>');
        valid = false;
        console.log('not valid topic 3');
    } else if (datepicker2 == null || datepicker2 == "") {
        $('#datepicker2').closest('.form-group').append('<span class="error-validate">The date field is required.</span>');
        valid = false;
        console.log('not valid datepicker 2');
    } else if (text == null || text == "") {
        $('#text').closest('.form-group').append('<span class="error-validate">The text field is required.</span>');
        valid = false;
        console.log('not valid text ');
    } else if (name == null || name == "") {
        $('#name').closest('.form-group').append('<span class="error-validate">The Name field is required.</span>');
        valid = false;
        console.log('not valid name ');
    } else if (name.length < 2) {
        $('#name').closest('.form-group').append('<span class="error-validate">The Name must be at least 2 characters.</span>');
        valid = false;
        console.log('not valid fname 2');
    }
    // else if (!validateName(name)) {
    //     $('#name').closest('.form-group').append('<span class="error-validate">The Name format is invalid.</span>');
    //     valid = false;
    //     console.log('not valid name 3');
    // }
    else if (phone == null || phone == "") {
        $('#phone').closest('.form-group').append('<span class="error-validate">The phone field is required.</span>');
        valid = false;
        console.log('not valid phone ');
    } else if (phone.length < 8) {
        $('#phone').closest('.form-group').append('<span class="error-validate">The phone format is too short.</span>');
        valid = false;
        console.log('not valid phone');
    } else if (phone.length > 14) {
        $('#phone').closest('.form-group').append('<span class="error-validate">The phone format is too big.</span>');
        valid = false;
        console.log('not valid phone');
    } else if (email == null || email == "") {
        $('#email').closest('.form-group').append('<span class="error-validate">The Email field is required.</span>');
        valid = false;
        console.log('not valid email');
    } else if (!validateEmail(email)) {
        $('#email').closest('.form-group').append('<span class="error-validate">The Email is Invalid.</span>');
        valid = false;
        console.log('not valid email');
    }
    //            else if (!$('#customRadio1').is(':checked')) {
    //                $('#customRadio1').parent().addClass('not_valid');
    //                valid = false;
    //                console.log('not valid customRadio1');
    //            } else if (!$('#customRadio2').is(':checked')) {
    //                $('#customRadio2').parent().addClass('not_valid');
    //                valid = false;
    //                console.log('not valid customRadio2');
    //            }


    if (valid) {
        $("body").addClass("overview_hidden");
        userTopics();
        $(".thanky-modal").show();

    } else {
        $('#loading').addClass('overlay-hidden');
    }

}
