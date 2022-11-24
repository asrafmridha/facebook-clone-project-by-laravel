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

 <div class="post col-sm-12" id="post_5">
    <div class="row post-heading">
        <div class="col-sm-12">
            <a href="profile.html">
                <img src="assets/imgs/1.jpg" class="profile-picture pull-left"/>
                &nbsp;
                <span class="post-user-name">  {{ ucfirst($post->user_name->f_name) }} {{ ucfirst($post->user_name->l_name) }}</span><br/>
                &nbsp;
                <small class="post-date text-mute">31th March, 2021 2:49PM</small>
            </a>
        </div>
    </div>
    <div class="row post-body">
        <div class="col-sm-12">
            This is the post body. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit. Lorem Ipsum Doler sit.
        </div>
    </div>
    <div class="row post-action">
        <ul class="post-action-menu">
            <li><a href="javascript:void(0);" class="text-mute" onclick="like(5);">Like</a></li>
            <li><a href="javascript:void(0);" class="text-mute" onclick="share(5);">Share</a></li>
            <li><a href="javascript:void(0);" class="text-mute" onclick="comment(5);">Comment</a></li>
            <li class="pull-right"><a href="#" class="text-mute"><span id="post_like_count_5">2142</span> Likes</a></li>
            <li class="pull-right"><a href="#" class="text-mute"><span id="post_comment_count_5">2172</span> Comments</a></li>
            <li class="pull-right"><a href="#" class="text-mute"><span id="post_share_count_5">200</span> Shares</a></li>
        </ul>
    </div>
</div>
     
 @endforeach



</div>
    
@endsection

