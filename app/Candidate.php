<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'position', 'first_name', 'last_name', 'major', 'graduation_year', 'description', 'image_url'
            ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'votes'
    ];

    /**
     * Returns true if this candidate applying for the president position.
     * @return bool
     */
     public function isPresident()
    {
        return strcmp($this->position,"President") == 0;
    }

    /**
     * Returns true if this candidate applying for the vice president position.
     * @return bool
     */
    public function isVicePresident()
    {
        return strcmp($this->position,"Vice President") == 0;
    }

    /**
     * Returns true if this candidate applying for the treassurer position.
     * @return bool
     */
    public function isTreassurer()
    {
        return strcmp($this->position,"Treassurer") == 0;
    }

    /**
     * Returns true if this candidate applying for the Secretary position.
     * @return bool
     */
    public function isSecretary()
    {
        return strcmp($this->position,"Secretary") == 0;
    }
}
