<?php

/**
 * Prüft Datum auf gültigkeit
 * @param  string $date dd.mm.YYYY
 * @return bool       
 */
function valid_date($date) {
    $pattern = '/\d{2}\.\d{2}\.\d{4}/';
    $valid = preg_match($pattern, $date);
    
    if (! $valid) {
        return false;
    }

    $exploded = explode('.', $date);
    return $exploded[2] . '-' . $exploded[1] . '-' . $exploded[0];
}
