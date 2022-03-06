<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function countTotalClass()
{
    // Get a reference to the controller object
    $CI = get_instance();
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Globalmod');
    // Call a function of the model
    return $CI->Globalmod->countData('masterclass', array('status' => 1));
}

function countTrainer()
{
    // Get a reference to the controller object
    $CI = get_instance();
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Globalmod');
    // Call a function of the model
    return $CI->Globalmod->countData('users', array('MasterJabatan_id' => 3, 'status' => 1));
}

function countMember()
{
    // Get a reference to the controller object
    $CI = get_instance();
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Globalmod');
    // Call a function of the model
    return $CI->Globalmod->countData('users', array('MasterJabatan_id' => 2, 'status' => 1));
}

function generalInfo()
{
    // Get a reference to the controller object
    $CI = get_instance();
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Globalmod');
    // Call a function of the model
    return $CI->Globalmod->select('*', 'setting');
}