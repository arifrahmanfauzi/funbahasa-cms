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

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            "name"=>[
				"string",
				"nullable"
			],
			"email"=>[
				"email",
				"nullable"
			],
			"email_verified_at"=>[
				'date_format:"'.config('admiko_config.table_date_time_format').'"',
				"nullable"
			],
			"phone_number"=>[
				"string",
				"nullable"
			],
			"address"=>[
				"string",
				"nullable"
			]
        ];
    }
    public function attributes()
    {
        return [
            "name"=>"Name",
			"email"=>"Email",
			"email_verified_at"=>"Email Verified At",
			"phone_number"=>"Phone Number",
			"address"=>"Address"
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