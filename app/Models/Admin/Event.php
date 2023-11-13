<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Admin\Tags;
use App\Http\Controllers\Traits\Admin\AdmikoFileUploadTrait;

class Event extends Model
{
    use AdmikoFileUploadTrait;

    public $table = 'event';


    public static $admiko_file_info = [
        "poster_image"=>[
            "original"=>["action"=>"resize","width"=>1920,"height"=>1080,"folder"=>"upload/"]
        ]
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        "excerpt",
        "event_name",
        "description",
        "poster_image",
        "poster_image_admiko_delete",
        "register_link",
        "poster_link",
        "guide_link",
        "upload_link",
        "annouchement_link",
        "start_date",
        "end_date",
        "tag",
        "status",
    ];
    public function setPosterImageAttribute()
    {
        if (request()->hasFile('poster_image')) {
            $this->attributes['poster_image'] = $this->imageUpload(request()->file("poster_image"), Event::$admiko_file_info["poster_image"], $this->getOriginal('poster_image'));
        }
    }
    public function setPosterImageAdmikoDeleteAttribute($value)
    {
        if (!request()->hasFile('poster_image') && $value == 1) {
            $this->attributes['poster_image'] = $this->imageUpload('', Event::$admiko_file_info["poster_image"], $this->getOriginal('poster_image'), $value);
        }
    }
    public function getStartDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('admiko_config.table_date_time_format')) : null;
    }
    public function setStartDateAttribute($value)
    {
        $this->attributes['start_date'] = $value ? Carbon::createFromFormat(config('admiko_config.table_date_time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
    public function getEndDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('admiko_config.table_date_time_format')) : null;
    }
    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = $value ? Carbon::createFromFormat(config('admiko_config.table_date_time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
    public function tag_id()
    {
        return $this->belongsTo(Tags::class, 'tag');
    }
}
