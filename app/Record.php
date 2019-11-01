<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
      protected $fillable = [
    'user_id', 'admin','article', 'newsletter','applicant', 'sensNews','cathegorie','actions'
    ];
    protected $guarded=['id', 'created_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
 