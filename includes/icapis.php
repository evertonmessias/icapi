<?php

// IC - APIs

function icapi1()
{
    return file_get_contents(get_option('icapi_1'));
}
add_shortcode('icapi1', 'icapi1');

function icapi2()
{
    return file_get_contents(get_option('icapi_2'));
}
add_shortcode('icapi2', 'icapi2');

function icapi3()
{
    return file_get_contents(get_option('icapi_3'));
}
add_shortcode('icapi3', 'icapi3');

function icapi4()
{
    return file_get_contents(get_option('icapi_4'));
}
add_shortcode('icapi4', 'icapi4');
