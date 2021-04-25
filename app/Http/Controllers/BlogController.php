<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{

	public function __construct(BlogRepository $blog_repository)
	{
		$this->blog_repository = $blog_repository;
	}

    public function index()
    {
    	$users  = $this->blog_repository->all();

    	return view('index',compact('users'));
    }

    public function edit($id)
    {

    	$user = $this->blog_repository->editUser($id);

    	return view('edit',compact('user'));
    }

    public function update(Request $request)
    {
    	
    	$data = array(
    	"name"	=>$request->name,	
    	"email"	=>$request->email,
    	
    	);

    	$update  = $this->blog_repository->updateUser($data,$request->user_id);

    	return view('index');
    }
}
