<?php
/*
$star_name = $_GET['star_name'];
$_GET['star_name'] = str_replace('_','+',$star_name);
// UPDATE exoplanet p JOIN ( SELECT star_name, COUNT(*) total FROM exoplanet GROUP BY star_name ) q ON p.star_name = q.star_name SET p.planets = total
*/
$table=Array(
	"name"=>"exoplanets",
	"title"=>"Exoplanet List",
	"id"=>"id",
	"pagination"=>50,
	'order-by'=>"updated DESC",
	//"grouping"=>["Provider_ID","user_id","department_id"],
	'tools'=>Array("csv","pdf"),
	"fields"=>Array(
		"# name"=>Array(
			'title'=>"Name",
		),
		"star_name"=>Array(
			'title'=>"System",'type'=>"other_id",
			//'show'=>false
		),
		"planets"=>Array(
			'title'=>"System",
			'eval'=>"dv=rv['star_name']+'<br>'+dv+' planets';",

		),
		"mass"=>Array(
			'title'=>"Mass",
		),
		"radius"=>Array(
			'title'=>"Radius",
		),
		"semi_major_axis"=>Array(
			'title'=>"Axis",
		),
		"eccentricity"=>Array(
			'title'=>"Eccentricity",
		),
		"orbital_period"=>Array(
			'title'=>"Period",
		),
	)
);
