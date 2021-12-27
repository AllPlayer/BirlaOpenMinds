<?php
/*
*
* Counter
*
*/ 

vc_map(
	array(
		'base'        => 'rt_countdown',
		'name'        => _x( 'Countdown', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme rt_countdown',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add an animated date countdown', 'Admin Panel','businesslounge' ),
		'params'      => array(


							array(
								'param_name'  => 'date',
								'heading'     => _x('End Date', 'Admin Panel','businesslounge' ),
								'description' => _x('Use only this format: year/month/day hour:minutes - example:', 'Admin Panel','businesslounge' ).'<code>2018/01/01 22:39</code>',
								'type'        => 'textfield',
								'value'       => '',
								'holder'      => 'p',
								'save_always' => true
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Custom Output Format', 'Admin Panel','businesslounge' ),
								'description' => 

								_x('Leave blank for the default output. To customize the output you can use these available special codes;', 'Admin Panel','businesslounge' ).

								'<br/><br/><code>%Y</code> '._x('for years', 'Admin Panel','businesslounge' ).
								'<br/><code>%m</code> '._x('for monts', 'Admin Panel','businesslounge' ). 
								'<br/><code>%n</code> '._x('for days of the month', 'Admin Panel','businesslounge' ).
								'<br/><code>%D</code> '._x('for total days', 'Admin Panel','businesslounge' ).
								'<br/><code>%H</code> '._x('for hours', 'Admin Panel','businesslounge' ).
								'<br/><code>%I</code> '._x('for total hours', 'Admin Panel','businesslounge' ).
								'<br/><code>%M</code> '._x('for minutes', 'Admin Panel','businesslounge' ).
								'<br/><code>%S</code> '._x('for seconds', 'Admin Panel','businesslounge' ).
								'<br /><br /><b>'._x('Example', 'Admin Panel','businesslounge' ).
								'<br/><code>&lt;i&gt;&lt;b&gt;%D&lt;/b&gt;DAYS&lt;/i&gt; &lt;i&gt;&lt;b&gt;%H&lt;/b&gt;HOURS&lt;/i&gt; &lt;i&gt;&lt;b&gt;%M&lt;/b&gt;MINUTES&lt;/i&gt; &lt;i&gt;&lt;b&gt;%S&lt;/b&gt;SECONDS&lt;/i&gt;</code>'
								,
								'type'        => 'textarea',
								'holder'      => 'div',
								'value'       => '',
								'save_always' => true
							), 

							array(
								'param_name'  => 'class',
								'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
								'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
							),
							  
							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),



						)
	)
);	

?>