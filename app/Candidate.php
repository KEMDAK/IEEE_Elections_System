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
         'position', 'guc_id', 'ieee_membership_id',
         'personal_email', 'guc_email',
         'first_name', 'last_name', 'gender', 'mobile_number',
         'major', 'image_url', 'plan_url', 'video_url'
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'votes', 'u_votes'
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

    /**
    * This function returns the user of this Candidate
    *
    **/
    public function candidate()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Returns true if this candidate is male.
     * @return bool
     */
    public function isMale ()
    {
        return $this->gender == 'Male';
    }

    /**
     * Returns true if this candidate is female.
     * @return bool
     */
    public function isFemale ()
    {
        return $this->gender == 'Female';
    }
}
