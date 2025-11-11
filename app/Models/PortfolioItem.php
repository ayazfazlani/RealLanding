<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioItem extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'portfolio_category_id',
        'title',
        'short_description',
        'image',
        'is_active'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    public function itemDetails(): HasMany
    {
        return $this->hasMany(ItemDetail::class);
    }

    // Accessor for image URL
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : 'https://source.unsplash.com/600x400/?architecture,modern';
    }
}