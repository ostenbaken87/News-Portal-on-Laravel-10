<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'roles_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(): BelongsTo
    {
        return $this->belongsTo(Roles::class, 'roles_id', 'id', 'roles');
    }

    public function comments(): HasMany
    {
        $this->hasMany(Comment::class,'user_id', 'id');
    }

    public static function uploadAvatar(StoreRequest $request, $avatar = null)
    {
        if ($request->hasFile('avatar')) {
            if ($avatar) {
                Storage::delete($avatar);
            }
            $folder = date('Y-m-d');
            return $request->file('avatar')->store("avatars/{$folder}");
        }
    }

    public function getAvatar(): string
    {
        return !$this->avatar ? asset("default_avatar.jpg") : asset("uploads/{$this->avatar}");
    }

    public static function updateAvatar(UpdateRequest $request, $avatar = null)
    {
        if ($request->hasFile('avatar')) {
            if ($avatar !== null) {
                Storage::delete($avatar);
            }
            $folder = date('Y-m-d');
            return $request->file('avatar')->store("avatars/{$folder}");
        }
    }

}
