	jQuery(function($) {
	    $(".navi span").bind("click", function() {
	        var $rel = $(this).attr("rel");
	        $(".navi span[rel!='" + $rel + "']").removeClass("active");
	        $(this).addClass("active");
	        $(".redirect[rel!='" + $rel + "']").hide();
	        $(".redirect[rel='" + $rel + "']").show();
	    })

	    $(".remove_hostname").bind("click", function() {
	        var $hostname = $(this).attr("id");
	        if (!confirm("Detele Hostname: '" + $hostname + "'")) {
	            return false;
	        }
	    })
	})
