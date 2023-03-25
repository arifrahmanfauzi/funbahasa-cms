<?php
/** Admiko global search configuration**/



/**IMPORTANT: this page will be overwritten and any change will be lost!!
 ** use admiko_global_search_custom.php to add your models into global search!!
 **/
return [
    [
        'name' => 'Announcement',
        'route_id' => 'announcement',
        'model' => 'Announcement',
        'fields' => [
            ["field"=>"name","show"=>1],
			["field"=>"start_date","show"=>1],
			["field"=>"end_date","show"=>1]
        ]
    ],
    [
        'name' => 'Karya',
        'route_id' => 'karya',
        'model' => 'Karya',
        'fields' => [
            ["field"=>"title","show"=>1],
			["field"=>"excerpt","show"=>1],
			["field"=>"author","show"=>1],
			["field"=>"email","show"=>1],
			["field"=>"content","show"=>0]
        ]
    ],
];
