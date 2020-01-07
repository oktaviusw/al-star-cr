@extends('layouts/base')

@section('content')
<!-- Title -->
<h1><b>{{$post->title}}</b></h1>
<!-- Author and Stuff -->
<h6 class="text-dark">Written by XXXX - <?php echo(date("d F Y, H:m A", strtotime($post->created_at))); ?></h6>
<a id="edit-post-btn" class="btn btn-primary text-light" href="/posts/{{$post->id}}/edit">
    <i class="fa fa-pencil-square-o"aria-hidden="true"></i> Edit Post
</a>
<a id="delete-post-btn" class="btn btn-danger text-light">
    <i class="fa fa-trash" aria-hidden="true"></i> Remove
</a>

{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE' , 'id'=>'form-delete-post'] ) !!}
{!! Form::close() !!}

<hr>
<div class="mt-4">
    <p>
        {!!$post->body!!}
    </p>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('#delete-post-btn').on('click', function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $('#form-delete-post').submit();
                }
            })
        });
    });
</script>
@endsection