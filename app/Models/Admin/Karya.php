<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Category;
use App\Models\Admin\Tags;
use Illuminate\Support\Str;
use App\Http\Controllers\Traits\Admin\AdmikoFileUploadTrait;

class Karya extends Model
{
    use AdmikoFileUploadTrait;

    public $table = 'karya';
    
    
	static $admiko_file_info = [
		"cover_image"=>[
			"original"=>["action"=>"resize","width"=>1920,"height"=>1080,"folder"=>"upload/"]
		],
		"file"=>[
			"original"=>["folder"=>"upload/"]
		]
	];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
		"title",
		"category",
		"tag",
		"excerpt",
		"author",
		"phone",
		"email",
		"cover_image",
		"cover_image_admiko_delete",
		"content",
		"file",
		"file_admiko_delete",
    ];
    public function category_id()
    {
        return $this->belongsTo(Category::class, 'category');
    }
	public function tag_id()
    {
        return $this->belongsTo(Tags::class, 'tag');
    }
	public function setCoverImageAttribute()
    {
        if (request()->hasFile('cover_image')) {
            $this->attributes['cover_image'] = $this->imageUpload(request()->file("cover_image"), Karya::$admiko_file_info["cover_image"], $this->getOriginal('cover_image'));
        }
    }
    public function setCoverImageAdmikoDeleteAttribute($value)
    {
        if (!request()->hasFile('cover_image') && $value == 1) {
            $this->attributes['cover_image'] = $this->imageUpload('', Karya::$admiko_file_info["cover_image"], $this->getOriginal('cover_image'), $value);
        }
    }
	public function setFileAttribute()
    {
        if (request()->hasFile('file')) {
            $this->attributes['file'] = $this->fileUpload(request()->file("file"), Karya::$admiko_file_info["file"], $this->getOriginal('file'));
        }
    }
    public function setFileAdmikoDeleteAttribute($value)
    {
        if (!request()->hasFile('file') && request()->file_admiko_delete == 1) {
            $this->attributes['file'] = $this->fileUpload('', Karya::$admiko_file_info["file"], $this->getOriginal('file'), $value);
        }
    }
}