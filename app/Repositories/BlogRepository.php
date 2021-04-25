<?php

namespace App\Repositories;
use App\Models\User;



/**
 * Class BlogRepository.
 */
class BlogRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function all()
    {
        return User::all();
    }

    public function editUser($id)
    {
    	$result = User::findOrFail($id);
    	return $result;
    }

    public function updateUser($data,$id)
    {
    	
    	$result   = User::where('id',$id)->update($data);
    	return $result;
    }
}
