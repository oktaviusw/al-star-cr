@extends('layouts/base')

@section('content')
    <h1><b>{{$title}}</b></h1>
    {!! Form::open($form_config) !!}
        <div class="form-group">
            {{Form::label('title', 'Title', ['class' => 'font-weight-bold'])}}
            {{Form::text('title', $form_data['title'] ?? '', [ 'class' => 'form-control', 'placeholder' => 'Post\'s Title ' ])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Content', ['class' => 'font-weight-bold'])}}
            {{Form::textarea('body', $form_data['body'] ?? '', [ 'class' => 'form-control', 'rows' => 7, 'placeholder' => 'Content of The Post' ])}}
        </div>
        {{Form::submit('Create New Post', ['class' => 'btn btn-success'])}}
        <br>&nbsp;
    {!! Form::close() !!}
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
        // import Base64UploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/base64uploadadapter';

        ClassicEditor
            .create( document.querySelector( '#body' ), {
                // plugins: [ Base64UploadAdapter ],
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection