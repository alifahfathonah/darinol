<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('print_footer'))
{
    function print_footer($id = '')
    {
        $CI->load->model('mmodule');
        $module = $CI->mmodule->getDataWhere('setting','id_setting',$id);
        return $module['footer'];
    }
}
