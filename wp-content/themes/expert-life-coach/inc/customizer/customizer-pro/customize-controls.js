( function( api ) {

	// Extends our custom "expert-life-coach" section.
	api.sectionConstructor['expert-life-coach'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );