@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('pageTitle')
    My Profile
@endsection

@section('content')
    <div class="row">
        <!-- PAGE START -->
        <div class="item">
            <div class="item-bg">
                <img src="{{Storage::url($user->avatar)}}" class="blur opacity-3">
            </div>
            <div class="p-a-md">
                <div class="row m-t">
                    <div class="col-sm-7">
                        <a href="#" class="pull-left m-r-md">
                            <span class="avatar w-96">
                                <img src="{{ Storage::url($user->avatar) }}">
                                <i class="on b-white"></i>
                            </span>
                        </a>
                        <div class="clear m-b">
                            <h4 class="m-a-0 m-b-sm">{{ $user->name }}</h4>
                            <p class="text-muted"><span class="m-r">{{ $user->profile->phone }}</span> <small><i class="fa fa-map-marker m-r-xs"></i>{{ $user->profile->address }}</small></p>
                            <div class="block clearfix m-b">
                                <a href="{{ $user->profile->facebook_url }}" class="btn btn-icon btn-social rounded b-a btn-sm" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook indigo"></i>
                                </a>
                                <a href="{{ $user->profile->twitter_url }}" class="btn btn-icon btn-social rounded b-a btn-sm">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter light-blue"></i>
                                </a>
                                <a href="{{ $user->profile->google_plus }}" class="btn btn-icon btn-social rounded b-a btn-sm">
                                    <i class="fa fa-google-plus"></i>
                                    <i class="fa fa-google-plus red"></i>
                                </a>
                                <a href="{{ $user->profile->linkdin_url }}" class="btn btn-icon btn-social rounded b-a btn-sm">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin cyan-600"></i>
                                </a>
                            </div>
                            <a href="#" class="btn btn-sm warn rounded success active m-b" data-ui-toggle-class="success">
                                <span class="inline">Follow</span>
                                <span class="none">Following</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <p class="text-md profile-status">{{ $user->profile->about }}</p>
                        <button class="btn btn-sm rounded btn-outline b-success" data-toggle="collapse" data-target="#editor">Edit</button>
                        <div class="collapse box m-t-sm" id="editor">
                            <textarea class="form-control no-border" rows="2" placeholder="Type something...">{{ $user->profile->about }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
