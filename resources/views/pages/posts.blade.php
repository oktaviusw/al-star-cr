@extends('layouts/base')

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Posts</h1>
        <p class="lead text-muted">
            Posts that available on our website to read
        </p>
    </div>
</section>

<div class="album pb-5 bg-light">
    <div class="container">
        <div class="row">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                                alt="Thumbnail [100%x225]" style="height: 10em; width: 100%; display: block;"
                                src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f65284908%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f65284908%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7109375%22%20y%3D%22120.15%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                                data-holder-rendered="true">
                            <div class="card-body">
                                <h4 class="card-text" style="overflow: hidden; white-space: nowrap;"><b>{{$post->title}}</b></h4>
                                <p class="card-text text-justify" style="font-size:0.9em ; line-height: 1.5em; height: 6em; overflow: hidden;">
                                    {{$post->body}}  
                                </p>
                                <hr class="my-0">
                                <small class="text-muted">Written by <a class="text-grey" href="#">XXXXX</a></small>
                                <br>
                                <small class="text-muted">{{$post->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 text center">
                    <h2>No Post Were Found!</h2>
                </div>
            @endif

            
            
        </div>
    </div>
</div>
@endsection