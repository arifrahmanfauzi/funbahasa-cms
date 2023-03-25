<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Response;

class EventRequest extends FormRequest
{
    public function rules()
    {
        return [
            "event_name"=>[
				"string",
				"nullable"
			],
			"description"=>[
				"nullable"
			],
			"poster_image"=>[
				"image",
				"file_extension:jpg,png,jpeg",
				"mimes:jpg,png,jpeg",
				"nullable"
			],
			"register_link"=>[
				"string",
				"nullable"
			],
			"poster_link"=>[
				"string",
				"nullable"
			],
			"guide_link"=>[
				"string",
				"nullable"
			],
			"upload_link"=>[
				"string",
				"nullable"
			],
			"annouchement_link"=>[
				"string",
				"nullable"
			],
			"start_date"=>[
				'date_format:"'.config('admiko_config.table_date_time_format').'"',
				"nullable"
			],
			"end_date"=>[
				'date_format:"'.config('admiko_config.table_date_time_format').'"',
				"nullable"
			],
			"tag"=>[
				"nullable"
			]
        ];
    }
    public function attributes()
    {
        return [
            "event_name"=>"Event Name",
			"description"=>"Description",
			"poster_image"=>"Poster Image",
			"register_link"=>"Register_link",
			"poster_link"=>"Poster Link",
			"guide_link"=>"Guide Link",
			"upload_link"=>"Upload Link",
			"annouchement_link"=>"Annouchement Link",
			"start_date"=>"Start Date",
			"end_date"=>"End Date",
			"tag"=>"Tag"
        ];
    }
    
    public function authorize()
    {
        if (!auth("admin")->check()) {
            return false;
        }
        return true;
    }
}