<?php

elgg_register_event_handler('init', 'system', 'minimal_hide_search_init');

function minimal_hide_search_init() {

    if (!elgg_is_logged_in()) {

        elgg_unextend_view('page/elements/header', 'search/header');

    }
}
