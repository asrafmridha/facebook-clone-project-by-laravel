@extends('dashboard')

@section('content')
<div class="col-sm-6">
    <div class="post col-sm-12" id="new_post">
        <div class="row post-heading" style="background: #2d9a40;">
            <div class="col-sm-12">
                <h4 id="post-header">Create New Post</h4><br/>
            </div>
        </div>
            {{-- @if(Session::has('message'))
            <p class="alert alert-success >{{ Session::get('message') }}</p>
            @endif --}}
    <div class="row" style="padding: 10px;">
        <form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="status" placeholder="Whats up?" maxlength="250"></textarea>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <br>
            <div class="form-group">
                <div class="pull-left">
                    <label class="btn btn-success"><input name="image" type="file" style="display: none;"/>Add Image</label>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="pull-right">
                    <button class="btn btn-primary">POST</button>
                </div>
            </div>
            <br>
        </form>
    </div>
</div>


 @foreach ($post as $post)

 <div class="post col-sm-12">
    <div class="row post-heading">
        <div class="col-sm-12">
            <a href="profile.html">
                <img src="{{ asset("uploads/".$post->user_name->image) }}" class="profile-picture pull-left"/>
                &nbsp;
                <span class="post-user-name">  {{ ucfirst($post->user_name->f_name) }} {{ ucfirst($post->user_name->l_name) }}</span><br/>
                &nbsp;
                <small class="post-date text-mute">Posted at {{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}</small>
            </a>
        </div>
    </div>
    <div class="row post-body">
        <div class="col-sm-12">
           {{ $post->status }}
        </div>

        <div class="col-sm-12">
            <img height="200px" width="250px" src="{{ asset("uploads/".$post->image) }}" class="pull-left"/>
         </div>
    </div>
    <div class="row post-action">
        <ul class="post-action-menu">
            <li><a href="javascript:void(0);" class="text-mute" onclick="like(5);">Like</a></li>
            <li><a href="javascript:void(0);" class="text-mute" onclick="share(5);">Share</a></li>
            <li><a href="javascript:void(0);" class="text-mute" onclick="comment(5);">Comment</a></li>
            <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_5">{{ count(json_decode($post->likes)) }}</span> Likes</a></li>
            <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_5">{{ $post->comments }}</span> Comments</a></li>
            <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_5">{{ count(json_decode($post->shares)) }}</span> Shares</a></li>
        </ul>
    </div>
</div>
     
 @endforeach
</div>
@endsection

