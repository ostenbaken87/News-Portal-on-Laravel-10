<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public static function checkPostAndDestroy(Category $category)
    {
        if ($category->posts()->count()) {
            return redirect()
                ->route('categories.index')
                ->with('error', 'Нельзя удалить категорию с постами');
        }
        $category->delete();
        return redirect()
            ->route('categories.index')
            ->with('success', 'Категория удалена');
    }
}
