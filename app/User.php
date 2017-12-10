<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $admin;
    protected $email;

    protected $fillable = ['name', 'email', 'password'];
    //initialize config file name and email
    public function __construct()
    {
        $this->admin = config('admin.name');
        $this->email = config('admin.email');
    }
    //get user urls
    public function urls()
    {
        return $this->hasMany(Url::class);
    }
}
