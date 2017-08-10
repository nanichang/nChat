<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Profile\ProfileContract;
	use Auth;
	use App\User;
	use Session;

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
	        return view('profiles.edit')->with('user', Auth::user()->profile);
	    }

	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request)
	    {
	    	$this->validate($request, [
	    		'phone' => 'required',
	    		'facebook_url' => 'required',
				'twitter_url' => 'required',
				'google_plus' => 'required',
				'linkdin_url' => 'required',
				'about' => 'required|max:255',
				'address' => 'required',
	    	]);
	        
	        Auth::user()->profile()->update([
	        	'phone' => $request->phone,
	        	'facebook_url' => $request->facebook_url,
	        	'twitter_url' => $request->twitter_url,
	        	'google_plus' => $request->google_plus,
	        	'linkdin_url' => $request->linkdin_url,
	        	'about' => $request->about,
	        	'address' => $request->address,
	        ]);

	        if($request->hasFile('avatar')) {
	        	Auth::user()->update([
	        		'avatar' => $request->avatar->store('public/avatars')
	        	]);
	        }

	        // Session::flash('success', 'Profile Updated');
	        return redirect()->back()->with('success', 'Profile Updated');
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
