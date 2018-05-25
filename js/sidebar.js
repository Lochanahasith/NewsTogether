jQuery(document).ready(function() {
    jQuery('#sidebar > ul > li.sub > a').on('click', function(tabf)  {
        
        var checkElement = $(this).next();

        if((checkElement.is('ul')) && (checkElement.is(':visible')))
        {
        	jQuery(checkElement).slideDown('normal');
    	}

    	if((checkElement.is('ul')) && (!checkElement.is(':visible')))
        {
        	jQuery('#sidebar ul ul:visible').slideUp();
        	jQuery(checkElement).slideDown('normal');
    	}

 
        tabf.preventDefault();
    });