<?php
/**
 * @author     Thank you for using Admiko.com
 * @copyright  2020-2022
 * @link       https://Admiko.com
 * @Help       We are always looking to improve our code. If you know better and more creative way don't hesitate to contact us. Thank you.
 */
namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Traits\Admin\AdmikoFileUploadTrait;

class Announcement extends Model
{
    use AdmikoFileUploadTrait;

    public $table = 'announcement';
    
    
	static $admiko_file_info = [
		"poster"=>[
			"original"=>["action"=>"resize","width"=>1920,"height"=>1080,"folder"=>"upload/"]
		],
		"file_participant"=>[
			"original"=>["folder"=>"upload/"]
		]
	];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
		"name",
		"start_date",
		"end_date",
		"poster",
		"poster_admiko_delete",
		"file_participant",
		"file_participant_admiko_delete",
		"content",
    ];
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
	public function setPosterAttribute()
    {
        if (request()->hasFile('poster')) {
            $this->attributes['poster'] = $this->imageUpload(request()->file("poster"), Announcement::$admiko_file_info["poster"], $this->getOriginal('poster'));
        }
    }
    public function setPosterAdmikoDeleteAttribute($value)
    {
        if (!request()->hasFile('poster') && $value == 1) {
            $this->attributes['poster'] = $this->imageUpload('', Announcement::$admiko_file_info["poster"], $this->getOriginal('poster'), $value);
        }
    }
	public function setFileParticipantAttribute()
    {
        if (request()->hasFile('file_participant')) {
            $this->attributes['file_participant'] = $this->fileUpload(request()->file("file_participant"), Announcement::$admiko_file_info["file_participant"], $this->getOriginal('file_participant'));
        }
    }
    public function setFileParticipantAdmikoDeleteAttribute($value)
    {
        if (!request()->hasFile('file_participant') && request()->file_participant_admiko_delete == 1) {
            $this->attributes['file_participant'] = $this->fileUpload('', Announcement::$admiko_file_info["file_participant"], $this->getOriginal('file_participant'), $value);
        }
    }
}