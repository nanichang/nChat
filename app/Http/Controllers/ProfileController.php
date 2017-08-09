<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Profile\ProfileContract;
	use Auth;
	use App\User;

	class ProfileController extends Controller
	{

			protected $repo;

			public function __construct(ProfileContract $profileContract) {
				$this->repo = $profileContract;
			}

	    /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
        public function index($slug){
            // $user = $this->repo->profile($slug);
            $user = User::where('slug', $slug)->first();
            return view('profiles.profile')->with('user', $user);
        }

	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
	        //
	    }

	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
	        //
	    }

	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }

	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit()
	    {
	        return view('profiles.edit')
			->with(['info' => Auth::user()->profile]);
	    }

	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
	        //
	    }

	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function delete($id)
	    {
	        //
	    }
	}
