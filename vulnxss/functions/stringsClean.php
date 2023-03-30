<?php

function removeNonAlphanumeric($str) {
    return preg_replace('/[^a-zA-Z0-9_]/', '', $str);
}

function detectNonAlphanumeric($str) {
    return preg_match('/[^a-zA-Z0-9]/', $str);
}