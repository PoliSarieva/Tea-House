jQuery(function($){ // use jQuery code inside this to avoid "$ is not defined" error
	$( '.misha_loadmore' ).click(function(){
 
		const button = $(this)
		const data = {
			'action' : 'loadmore',
			'query': misha_loadmore_params.posts, // that's how we get params from wp_localize_script() function
			'page' : misha_loadmore_params.current_page
		}
 
		$.ajax({ 
			url : misha_loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text( 'Loading...' ) 
			},
			success : function( data ){
				if( data ) { 
					button.text( 'More posts' ).prev().before(data) // insert new posts
					misha_loadmore_params.current_page++
 
					if ( misha_loadmore_params.current_page == misha_loadmore_params.max_page ) { 
						button.remove() // if last page, remove the button
					}
					
				} else {
					button.remove() // if no data, remove the button as well
				}
			}
		})
	})
})