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

class KaryaRequest extends FormRequest
{
    public function rules()
    {
        return [
            "title"=>[
				"string",
				"nullable"
			],
			"category"=>[
				"required"
			],
			"tag"=>[
				"nullable"
			],
			"excerpt"=>[
				"string",
				"nullable"
			],
			"author"=>[
				"string",
				"nullable"
			],
			"phone"=>[
				"string",
				"nullable"
			],
			"email"=>[
				"email",
				"nullable"
			],
			"cover_image"=>[
				"image",
				"file_extension:jpg,png,jpeg",
				"mimes:jpg,png,jpeg",
				"nullable"
			],
			"content"=>[
				"nullable"
			],
			"file"=>[
				"file",
				"nullable"
			]
        ];
    }
    public function attributes()
    {
        return [
            "title"=>"Title",
			"category"=>"Category",
			"tag"=>"Tag",
			"excerpt"=>"Excerpt",
			"author"=>"Author",
			"phone"=>"Phone",
			"email"=>"Email",
			"cover_image"=>"Cover Image",
			"content"=>"Content",
			"file"=>"File"
        ];
    }
    public function messages()
    {
        return [
            "file.required_without"=>trans("validation.required")
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