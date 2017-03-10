	<!-- Javascript -->
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/bootstrap-select.js"></script>
	<script src="./js/jquery.navgoco.js"></script>
	<script>
		$(document).ready(function(){												
		       
		       //Navigation Menu Slider
		        $('#nav-expander').on('click',function(e){
		      		e.preventDefault();
		      		$('body').toggleClass('nav-expanded');
		      	});
		      	$('#nav-close').on('click',function(e){
		      		e.preventDefault();
		      		$('body').removeClass('nav-expanded');
		      	});
		      	
		      	
		      	// Initialize navgoco with default options
		        $(".main-menu").navgoco({
		            caret: '<span class="caret"></span>',
		            accordion: false,
		            openClass: 'open',
		            save: true,
		            cookie: {
		                name: 'navgoco',
		                expires: false,
		                path: '/'
		            },
		            slide: {
		                duration: 300,
		                easing: 'swing'
		            }
		        });
		  
		        	
		      });
	</script>
	<script src="./js/feedback.js"></script>
	<script type="text.javascript">
		$(document).ready(function() {
			$('.collapse').on('show.bs.collapse', function() {
				var id = $(this).attr('id');
				$('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-faq');
				$('a[href="#' + id + '"] .panel-title span').html('<i class="glyphicon glyphicon-minus"></i>');
			});
			$('.collapse').on('hide.bs.collapse', function() {
				var id = $(this).attr('id');
				$('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-faq');
				$('a[href="#' + id + '"] .panel-title span').html('<i class="fa fa-plus"></i>');
			});
		});
		
		
		
		//feedback
		
		(function ( $ ) {
    $.fn.feedback = function(success, fail) {
    	self=$(this);
		self.find('.dropdown-menu-form').on('click', function(e){e.stopPropagation()})

		self.find('.screenshot').on('click', function(){
			self.find('.cam').removeClass('fa-camera fa-check').addClass('fa-refresh fa-spin');
			html2canvas($(document.body), {
				onrendered: function(canvas) {
					self.find('.screen-uri').val(canvas.toDataURL("image/png"));
					self.find('.cam').removeClass('fa-refresh fa-spin').addClass('fa-check');
				}
			});
		});

		self.find('.do-close').on('click', function(){
			self.find('.dropdown-toggle').dropdown('toggle');
			self.find('.reported, .failed').hide();
			self.find('.report').show();
			self.find('.cam').removeClass('fa-check').addClass('fa-camera');
		    self.find('.screen-uri').val('');
		    self.find('textarea').val('');
		});

		failed = function(){
			self.find('.loading').hide();
			self.find('.failed').show();
			if(fail) fail();
		}

		self.find('form').on('submit', function(){
			self.find('.report').hide();
			self.find('.loading').show();
			$.post( $(this).attr('action'), $(this).serialize(), null, 'json').done(function(res){
				if(res.result == 'success'){
					self.find('.loading').hide();
					self.find('.reported').show();
					if(success) success();
				} else failed();
			}).fail(function(){
				failed();
			});
			return false;
		});
	};
}( jQuery ));

$(document).ready(function () {
	$('.feedback').feedback();
});
	</script>

	<script type="text/javascript">
$(function() {
	$(".menuLeft").click(function() {
		var cod = $(this).data('cod');
		$(".menuRight").fadeOut('430', function() {
			$("#right" + cod).fadeIn();
		});
	});
});
</script>