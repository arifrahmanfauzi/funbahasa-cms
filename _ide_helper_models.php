<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Admin\Admins{
/**
 * App\Models\Admin\Admins\AdmikoAuditable
 *
 * @property int $id
 * @property string|null $action
 * @property int|null $row_id
 * @property string|null $model
 * @property int|null $user_id
 * @property \Illuminate\Support\Collection|null $info
 * @property string|null $url
 * @property string|null $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Admin\Admins\Admins|null $user_info
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable search($search)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereRowId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdmikoAuditable whereUserId($value)
 */
	class AdmikoAuditable extends \Eloquent {}
}

namespace App\Models\Admin\Admins{
/**
 * App\Models\Admin\Admins\AdminRoles
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, AdminRoles> $permission_list
 * @property-read int|null $permission_list_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, AdminRoles> $permission_many
 * @property-read int|null $permission_many_count
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminRoles withoutTrashed()
 */
	class AdminRoles extends \Eloquent {}
}

namespace App\Models\Admin\Admins{
/**
 * App\Models\Admin\Admins\Admins
 *
 * @property int $id
 * @property string|null $name
 * @property string $email
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property mixed $image
 * @property string|null $theme
 * @property int|null $role_id
 * @property string|null $remember_token
 * @property string|null $reset_token
 * @property-read \App\Models\Admin\Admins\AdminRoles|null $adminsRole
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Admins> $multi_tenancy_access
 * @property-read int|null $multi_tenancy_access_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admins newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereResetToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admins withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admins withoutTrashed()
 */
	class Admins extends \Eloquent {}
}

namespace App\Models\Admin\Admins\Auth{
/**
 * App\Models\Admin\Admins\Auth\Admin
 *
 * @property int $id
 * @property string|null $name
 * @property string $email
 * @property string|null $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property mixed $image
 * @property string|null $theme
 * @property int|null $role_id
 * @property string|null $remember_token
 * @property string|null $reset_token
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\Admins\Admins> $multi_tenancy_access
 * @property-read int|null $multi_tenancy_access_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereResetToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutTrashed()
 */
	class Admin extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Announcement
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $poster
 * @property string|null $file_participant
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-write mixed $file_participant_admiko_delete
 * @property-write mixed $poster_admiko_delete
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereFileParticipant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement wherePoster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Announcement whereUpdatedAt($value)
 */
	class Announcement extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Category
 *
 * @property int $id
 * @property string|null $category_name
 * @property string|null $slug
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Admin\Karya> $karya
 * @property-read int|null $karya_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Event
 *
 * @property int $id
 * @property string|null $event_name
 * @property string|null $description
 * @property string|null $poster_image
 * @property string|null $register_link
 * @property string|null $poster_link
 * @property string|null $guide_link
 * @property string|null $upload_link
 * @property string|null $annouchement_link
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int|null $tag
 * @property int|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-write mixed $poster_image_admiko_delete
 * @property-read \App\Models\Admin\Tags|null $tag_id
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereAnnouchementLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEventName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereGuideLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event wherePosterImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event wherePosterLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereRegisterLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUploadLink($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Karya
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $category
 * @property int|null $tag
 * @property string|null $excerpt
 * @property string|null $author
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $cover_image
 * @property string|null $content
 * @property string|null $file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Admin\Category|null $category_id
 * @property-read \App\Models\Admin\Category|null $category_slug
 * @property-write mixed $cover_image_admiko_delete
 * @property-write mixed $file_admiko_delete
 * @property-read \App\Models\Admin\Tags|null $tag_id
 * @method static \Illuminate\Database\Eloquent\Builder|Karya newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Karya newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Karya query()
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereCoverImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Karya whereUpdatedAt($value)
 */
	class Karya extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\Tags
 *
 * @property int $id
 * @property string|null $name_tag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tags newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tags newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tags query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereNameTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereUpdatedAt($value)
 */
	class Tags extends \Eloquent {}
}

namespace App\Models\Admin{
/**
 * App\Models\Admin\User
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $password
 * @property string|null $email_verified_at
 * @property string|null $phone_number
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $phone_number
 * @property string|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

