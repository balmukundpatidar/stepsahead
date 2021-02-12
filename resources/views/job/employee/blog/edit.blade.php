@extends('job.layout.fancybox')
@section('content')
    <div class="experience-item container new-item-container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <form method="post" class="new-item-form add-experience-form" action="{{route('employee::blog.update',['city' => $info->id])}}" accept-charset="UTF-8" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            <input type="text" name="title" placeholder="Title" value="{{$info->blog_title}}" required>
            <textarea name="description" placeholder="Description" rows="20" required>{{$info->blog_description}}</textarea>
            <input type="file" name="image" placeholder="Title">
            <input type="submit" value="Save" name="experience-item-btn">
        </form>
    </div>
@stop