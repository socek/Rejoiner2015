(function( $ ) {
		// Request a demo
		$( "#request_demo" ).submit(function( event ) {
				// Stop form from submitting normally
				event.preventDefault();
				// Get some values from elements on the page:
				var $form = $( this ),
					name = $form.find( "input[id='name']" ).val(),
					website = $form.find( "input[id='website']" ).val(),
					email = $form.find( "input[id='email']" ).val(),
					location = $form.find( "input[id='location']" ).val(),
					date = $form.find( "input[id='date']" ).val(),
					time = $form.find( "select[id='op_time'] option:selected" ).text(),
					url = $form.attr( "action" );
				// Send the data using post
				var posting = $.post( url,
					{
						your_name: name,
						company_email: email,
						website_url: website,
						location: location,
						preferred_time: time,
						preferred_date: date,
					} );
		});
		$("#seehow").click(function(e) {
			$("#request_demo").submit();
			e.preventDefault();
		});

		// Resources (ebooks)
        $( "form[id*='_form_']" ).submit(function( event ) {

          // Stop form from submitting normally
          event.preventDefault();

          // Get some values from elements on the page:
          var $form = $( this ),
            fullname = $form.find( "input[name='fullname']" ).val(),
            email = $form.find( "input[name='email']" ).val(),
            url = $form.attr( "action" );

          // Send the data using post
          var posting = $.post( url, { your_name: fullname, email_address: email } );
        });

        // Subscription form
        $( "#subform" ).submit(function( event ) {

          // Stop form from submitting normally
          event.preventDefault();

          // Get some values from elements on the page:
          var $form = $( this ),
            email = $form.find( "input[name='email']" ).val(),
            url = $form.attr( "action" );

          // Send the data using post
          var posting = $.post( url, { email: email } );
        });


        // Demo form (/pricing)
		$( "form[id^='demoform']" ).submit(function( event ) {
				// Stop form from submitting normally
				event.preventDefault();
				// Get some values from elements on the page:
				var $form = $( this ),
					demoNameInput = $form.find( "input[id='demoNameInput']" ).val(),
					demoEmailInput = $form.find( "input[id='demoEmailInput']" ).val(),
					demoWebsiteInput = $form.find( "input[id='demoWebsiteInput']" ).val(),
					exampleRecipientInput = $form.find( "select[id='exampleRecipientInput'] option:selected" ).text(),
					url = $form.attr( "action" );
				// Send the data using post
				var posting = $.post( url,
					{
						your_name: demoNameInput,
						company_email: demoEmailInput,
						website_url: demoWebsiteInput,
						revenue: exampleRecipientInput,
					} );
		});
		$("#submit_demoform").click(function(e) {
			$("#demoform").submit();
			e.preventDefault();
		});

		// Contact form
        $( "#contactform" ).submit(function( event ) {

          // Stop form from submitting normally
          event.preventDefault();

          // Get some values from elements on the page:
          var $form = $( this ),
            name = $form.find( "input[name='name']" ).val(),
            email = $form.find( "input[name='email']" ).val(),
            website = $form.find( "input[name='website']" ).val(),
            company = $form.find( "input[name='company']" ).val(),
            comments = $form.find( "textarea[name='comments']" ).val(),
            url = $form.attr( "action" );

          // Send the data using post
          var posting = $.post( url,
				{
					name: name,
					email: email,
					website: website,
					company: company,
					comments: comments,
				});
        });
        $("#submit_contactform").click(function(e) {
			$("#contactform").submit();
			e.preventDefault();
		});
})(jQuery);