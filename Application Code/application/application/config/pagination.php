<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pagination Config
 *
 * Just applying codeigniter's standard pagination config with twitter
 * bootstrap stylings
 *
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 * @email		mike@mikefunk.com
 *
 * @file		pagination.php
 * @version		1.3.1
 * @date		03/12/2012
 *
 * Copyright (c) 2011
 */

// --------------------------------------------------------------------------
//$config['base_url'] = base_url();
$config['per_page'] = 10;
//$config['uri_segment'] = 3;
$config['num_links'] = 5;
$config['page_query_string'] = TRUE;
//$config['use_page_numbers'] = TRUE;
$config['query_string_segment'] = 'page';


$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tagl_close'] = '</a></li>';
$config['prev_tag_open'] = '<li class="page-item">';
$config['prev_tagl_close'] = '</li>';
$config['first_tag_open'] = '<li class="page-item disabled">';
$config['first_tagl_close'] = '</li>';
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tagl_close'] = '</a></li>';
$config['attributes'] = array('class' => 'page-link');
// --------------------------------------------------------------------------
/* End of file pagination.php */
/* Location: ./bookymark/application/config/pagination.php */