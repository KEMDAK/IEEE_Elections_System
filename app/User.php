<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ieee_membership_id', 'role', 'email',
        'password', 'active', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * Returns true if this user is an admin.
     * @return bool
     */
    public function isAdmin()
    {
        return strcmp($this->role,"Admin") == 0;
    }

    /**
     * Returns true if this user is a voter.
     * @return bool
     */
    public function isVoter()
    {
        return strcmp($this->role,"Voter") == 0;
    }

    /**
     * Returns true if this user is a candidate.
     * @return bool
     */
    public function isCandidate()
    {
        return strcmp($this->role,"Candidate") == 0;
    }

    /**
     * Returns true if this user is active and can sign in.
     * @return bool
     */
    public function isActive()
    {
        return strcmp($this->active,"true") == 0;
    }

    /**
     * Returns true if this user has voted before.
     * @return bool
     */
    public function hasVoted()
    {
        return strcmp($this->status,"true") == 0;
    }
}
