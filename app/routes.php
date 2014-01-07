<?php

Route::get('search/{query}', function ($query)
{
    // Boom.
    return Twitter::search($query);
});

