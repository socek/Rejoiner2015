(function ($) {
    // Request a demo
    $("#request_demo").submit(function (event) {
        // Stop form from submitting normally
        event.preventDefault();
        // Get some values from elements on the page:
        var $form = $(this),
            name = $form.find("input[id='name']").val(),
            website = $form.find("input[id='website']").val(),
            email = $form.find("input[id='email']").val(),
            location = $form.find("input[id='location']").val(),
            date = $form.find("input[id='date']").val(),
            time = $form.find("select[id='op_time'] option:selected").text(),
            url = $form.attr("action");

        // Form validation
        var isValid = true;
        $form.find("input").each(function () {
            if (!validateRequestDemoForm(this)) {
                isValid = false;
            }
        });
        if (!isValid)
            return;

        // Send the data using post
        var posting = $.post(url,
            {
                your_name: name,
                company_email: email,
                website_url: website,
                location: location,
                preferred_time: time,
                preferred_date: date
            });

        $("#progress-bar-req").animate({width: '245px'}, {
            'done': function () {
                $("#seehow").text("request has been received");
            }
        });
    });
    function validateRequestDemoForm(field) {
        switch (field.id) {
            case "email":
                if (!validateEmail($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "website":
                if (!validateWebsite($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "name":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "location":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            default:
                return true;
        }
    }

    $("#request_demo > .col > input").change(function () {
        validateRequestDemoForm(this);
    });
    $("#seehow").click(function (e) {
        $("#request_demo").submit();
        e.preventDefault();
    });

    /*
     SUBSCRIPTION FORM (ebooks)
     */
    $("form[id*='_form_']").submit(function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            fullname = $form.find("input[name='fullname']").val(),
            email = $form.find("input[name='email']").val(),
            url = $form.attr("action");

        // Form validation
        var isValid = true;
        $form.find("input").each(function () {
            if (!validateSubscriptionForm(this)) {
                isValid = false;
            }
        });
        if (!isValid)
            return;

        // Send the data using post
        var posting = $.post(url, {your_name: fullname, email_address: email});

        if ($form.attr('id') == "_form_course") {
            // Email course
            $("#progress-bar-course").animate({width: '250px'}, {
                'done': function () {
                    $("#start-course").attr("value", "your are enrolled");
                    $("#start-course-tick").css("display", "inline-block");
                }
            });
        }
        else {
            // Ebooks
        }
    });

    /*
     GENERAL SUBSCRIPTION FORM
     */
    $("#subform").submit(function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            email = $form.find("input[name='email']").val(),
            url = $form.attr("action");

        // Form validation
        var isValid = true;
        $form.find("input").each(function () {
            if (!validateSubscriptionForm(this)) {
                isValid = false;
            }
        });
        if (!isValid)
            return;

        // Send the data using post
        var posting = $.post(url, {email: email});

        $form.find(".option-hits").attr("value", "request sent");
        $("#blog-tick").css("display", "inline-block");
    });

    // Validation for general and ebook subscription form
    function validateSubscriptionForm(field) {
        switch (field.name) {
            case "email":
                if (!validateEmail($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "fullname":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            default:
                return true;
        }
    }

    // Inputs of ebook and general form
    $("._option > input").change(function () {
        validateSubscriptionForm(this);
    });

    /*
     DEMO FORM (/pricing)
     */
    $("form[id^='demoform']").submit(function (event) {
        // Stop form from submitting normally
        event.preventDefault();
        // Get some values from elements on the page:
        var $form = $(this),
            demoNameInput = $form.find("input[id='demoNameInput']").val(),
            demoEmailInput = $form.find("input[id='demoEmailInput']").val(),
            demoWebsiteInput = $form.find("input[id='demoWebsiteInput']").val(),
            exampleRecipientInput = $form.find("select[id='exampleRecipientInput'] option:selected").text(),
            url = $form.attr("action");

        // Form validation
        var isValid = true;
        $form.find("input").each(function () {
            if (!validateDemoForm(this)) {
                isValid = false;
            }
        });
        if (!isValid)
            return;

        // Send the data using post
        var posting = $.post(url,
            {
                your_name: demoNameInput,
                company_email: demoEmailInput,
                website_url: demoWebsiteInput,
                revenue: exampleRecipientInput
            });

        if ($form.attr('id') == "demoformodal") {
            $form.find(".progress-bar").animate({width: '461px'}, {
                'done': function () {
                    $("#schedule-my-demo").attr("value", "your request has been received");
                    $(".demo-popup-content > #demo-form-info").text("a member of our team will be in touch shortly")
                    $(".demo-popup-content > #demo-form-info").css("display", "inline");
                }
            });
        }
        else {
            $form.find(".progress-bar").animate({width: '100%'}, {
                'done': function () {
                    $("#submit_demoform").text("your request has been received")
                    $(".pricing-demo-text > #demo-form-info").text("a member of our team will be in touch shortly")
                    $(".pricing-demo-text > #demo-form-info").css("display", "inline");
                }
            });
        }
    });
    function validateDemoForm(field) {
        switch (field.id) {
            case "demoEmailInput":
                if (!validateEmail($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "demoWebsiteInput":
                if (!validateWebsite($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "demoNameInput":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            default:
                return true;
        }
    }

    $("form[id^='demoform'] > input").change(function () {
        validateDemoForm(this);
    });
    $("#submit_demoform").click(function (e) {
        $("#demoform").submit();
        e.preventDefault();
    });

    /*
     CONTACT FORM
     */
    $("#contactform").submit(function (event) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:
        var $form = $(this),
            name = $form.find("input[name='name']").val(),
            email = $form.find("input[name='email']").val(),
            website = $form.find("input[name='website']").val(),
            company = $form.find("input[name='company']").val(),
            comments = $form.find("textarea[name='comments']").val(),
            url = $form.attr("action");

        // Form validation
        var isValid = true;
        $form.find("input, textarea").each(function () {
            if (!validateContactForm(this)) {
                isValid = false;
            }
        });
        if (!isValid)
            return;

        // Send the data using post
        var posting = $.post(url,
            {
                name: name,
                email: email,
                website: website,
                company: company,
                comments: comments
            });

        $form.find(".progress-bar").animate({width: '263px'}, {
            'done': function () {
                $("#submit_contactform").text("your request has been sent");
                $form.find(".tick").css("display", "inline-block");
            }
        });
    });
    function validateContactForm(field) {
        switch (field.name) {
            case "email":
                if (!validateEmail($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "website":
                if (!validateWebsite($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "name":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "comments":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            case "company":
                if (!isNotEmpty($(field).val())) {
                    mark_as_invalid($(field));
                } else {
                    mark_default($(field));
                    return true;
                }
                break;
            default:
                return true;
        }
    }

    $("#contactform > input, #contactform > textarea").change(function () {
        validateContactForm(this);
    });
    $("#submit_contactform").click(function (e) {
        $("#contactform").submit();
        e.preventDefault();
    });

    function mark_as_invalid(field) {
        field.css({
            "background-color": "#fcf2f0",
            "border-color": "#ea8e75",
            "color": "#ea8e75",
            "background-image": "url('img/forms/warning-error-icn.png')",
            "background-repeat": "no-repeat",
            "background-position": "right 20px center"
        });
    }

    function mark_default(field) {
        field.css({
            "background-color": "",
            "border-color": "",
            "color": "",
            "background-image": "",
            "background-repeat": "",
            "background-position": ""
        });
    }

    /*
     VALIDATION UTILS
     */
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    function validateWebsite(website) {
        var re = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
        return re.test(website);
    }

    function isNotEmpty(value) {
        ;
        return value.trim() != "";
    }
})(jQuery);