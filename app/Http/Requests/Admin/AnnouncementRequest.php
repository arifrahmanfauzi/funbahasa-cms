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

class AnnouncementRequest extends FormRequest
{
    public function rules()
    {
        return [
            "name"=>[
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
			"poster"=>[
				"image",
				"file_extension:jpg,png,jpeg",
				"mimes:jpg,png,jpeg",
				"nullable"
			],
			"file_participant"=>[
				"file",
				"nullable"
			],
			"content"=>[
				"nullable"
			]
        ];
    }
    public function attributes()
    {
        return [
            "name"=>"Name",
			"start_date"=>"Start Date",
			"end_date"=>"End Date",
			"poster"=>"Poster",
			"file_participant"=>"File Participant",
			"content"=>"Content"
        ];
    }
    public function messages()
    {
        return [
            "file_participant.required_without"=>trans("validation.required")
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