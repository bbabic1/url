<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    protected $table = 'urls';
    protected $fillable = ['tag', 'created_by_ip', 'url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
