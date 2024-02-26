<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostTopic extends Model
{
    use HasFactory;

    protected $table = "post_topic";

    protected $guarded = [];


    /**
     * The post that belong to the PostTopic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function post(): BelongsToMany
    {
        return $this->belongsToMany(Posts::class);
    }

    public function topic(): BelongsToMany
    {
        return $this->belongsToMany(Topics::class);
    }
}
