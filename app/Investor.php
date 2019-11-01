<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
  protected $table = 'investor';
    protected $fillable = ['', 'firtstname', 'lastname', 'email'];


    /**
     * Method One To One
     */
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    /**
     * Method One To Many
     */
    public function transaksi()
    {
      return $this->hasMany(Transaksi::class);
    }
}
