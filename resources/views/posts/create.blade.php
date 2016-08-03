@extends('main')

@section('title', '| Create Post')

@section('stylesheets')
{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            </div>

            <div class="form-group">
                {{ Form::label('body', 'Body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block')) }}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection