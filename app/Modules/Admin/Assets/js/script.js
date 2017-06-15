/*----------------------------------------------------------
    HASH-LINKS
-----------------------------------------------------------*/
$('a[href^="#"]').on('click', function(e) {

    var self = this;

    e.preventDefault();
    
    window.location.hash = $(self).attr('href');

});


/*----------------------------------------------------------
	OFF-CANVAS
-----------------------------------------------------------*/
$('[data-toggle="offcanvas"]').on('click', function (e) {

	var self = this;

	$(self).toggleClass('active');
	$('.row-offcanvas').toggleClass('active');

});


/*----------------------------------------------------------
	CONTROL-HANDLING
-----------------------------------------------------------*/
$.fn.control = function() {

	$(this).each(function(e) {

		var self = this;



		if ($(self).closest('.form-group').hasClass('has-danger')) {

			$(self).on('change', function(e) {

				$(this).closest('.form-group').removeClass('has-danger');
				$(this).closest('.form-group').find('.form-control-feedback').remove();

			}) 

		}

	});

}

$('[data-toggle="control"]').control();

/*----------------------------------------------------------
	POSTLINK
-----------------------------------------------------------*/
$.fn.postLink = function() {

	$(this).each(function(e) {

		var self = this;

		$(self).on('click', function(e) {

			e.preventDefault();

			var url = $(self).attr('href');
            var params = $(self).attr('post-data').split('&');
            var inputs = '';

            for (var i = 0, n = params.length; i < n; i++) {
                
                var pp = params[i].split('=');
                inputs += '<input type="hidden" name="' + pp[0] + '" value="' + pp[1] + '"/>';
            
            }

            $('<form action="' + url + '" method="post">' + inputs + '</form>').appendTo('body').submit();

		})

	})

}

$('[data-toggle="postlink"]').postLink();

