<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;
    //絶対に埋めなきゃいけない内容の定義
protected $fillable = [
    'title',
    'body',
    'category_id'
];

    public function getByLimit(int $limit_count = 5)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
}

function getPaginateByLimit(int $limit_count = 5)
{
return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
public function category()
{
    return $this->belongsTo(Category::class);
}
}


