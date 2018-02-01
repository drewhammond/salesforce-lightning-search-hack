<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller{
	/**
	 * Generate salesforce lightning search URL using the given string
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 */
	public function search( Request $request ) {

		$string = $request->get( 'string' );

		$search = '{"componentDef":"forceSearch:search","attributes":{"term":"%s","scopeMap":{"type":"TOP_RESULTS"},"context":{"disableSpellCorrection":false,"permsAndPrefs":{"crossObjectsAutoSuggestEnabled":true,"lvmEnabledForSearchResultsOn":true,"searchUIInteractionLoggingEnabled":false,"searchUIPilotFeatureEnabled":false,"orgHasAccessToSearchTermHistory":false}}}}';

		// Make replacement
		$search = sprintf( $search, $string );

		// Encode
		$search = base64_encode( $search );

		// Craft URL
		$url = getenv( 'SALESFORCE_BASE_URL' ) . '/one/one.app#' . $search;

		// Return redirect
		return redirect( $url, 301 );
	}
}
