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
        <form method="post" class="new-item-form add-experience-form" action="{{route('employee::skill.store')}}">
            {{ csrf_field() }}
            <input type="text" name="skill_name" placeholder="Skill Name">
            <input type="submit" value="Save" name="experience-item-btn">
        </form>
    </div>
@stop