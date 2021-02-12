@extends('admin.layout.layout')
@section('content')

    <div class="main-content">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::pages.index')}}" title="">All Pages</a></li>
                <li><a href="{{route('admin::pages.create')}}" title="">New Page</a></li>
            </ul>
        </div>
        <div class="message notification"></div>
        <div class="panel-content">
            <div class="col-md-12 posts-section">
                <div class="gallery-sec ">
                </div>
            </div>
            <div class="col-md-12 no-padding">
                <div class="">
                    <div class="">
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
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        <form role="form" method="post" action="{{route('admin::pages.store')}}" accept-charset="UTF-8" enctype="multipart/form-data" class="sec" name="add_post_form">
                            {{csrf_field()}}
                            <div class="col-lg-8">
                                <div class="widget form-elements-sec">
                                    <div class="widget-controls">
                                        <span class="expand-content"><i class="fa fa-expand"></i></span>
                                    </div>
                                    <div class="form-group">
                                        <h3>Add Page</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="sr-only">Title</label>
                                        <input type="text" placeholder="Title" id="title" maxlength="1000" name="title" class="form-control auto_generate_link_from max-title-noti" value="" required><br />
                                    </div>
                                    {{--<div class="form-group hidden">--}}
                                        {{--<label for="introText" class="sr-only">Intro Text</label>--}}
                                        {{--<textarea placeholder="Intro Text" id="introText" name="introText" class="form-control"></textarea>--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label for="content" class="sr-only">Content</label>
                                        <textarea placeholder="Content" id="content" name="content" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="sr-only">URL</label>
                                        <input type="text" placeholder="/page"  name="url" class="form-control auto_generate_link_to"  value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="sr-only">Image</label>
                                        <input type="file"  name="image" class="form-control auto_generate_link_to">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="widget  form-elements-sec">

                                    <div class="col-sm-12 border_bottom">
                                        <label for="" class="sr-only left">Publish</label>
                                        <button class="btn green btn-default sky-skin " type="submit" name="add_post_btn">Publish</button>
                                    </div>
                                    <div class="form-group">
                                        <label  class="sr-only">Search Engine</label>
                                        <input type="hidden" placeholder="Page Title" value="" name="page_title" class="form-control" ><br />
                                        <input type="text" placeholder="Page Description" name="page_description" value="" class="form-control" ><br />
                                        <input type="text" placeholder="Page Title" name="page_keywords" value="" class="form-control" >
                                    </div>
                                    {{--<div class="form-group">--}}
                                        {{--<label for="created_by" class="sr-only">Author</label>--}}
                                        {{--<select name="created_by" class="form-control">--}}

                                            {{--<option value="38" selected >Belal</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    <button class="btn green btn-default sky-skin " type="submit" name="add_post_btn">Publish</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>    </div>
    </div>
    </div><!-- Main Content -->
@stop
@push('scripts')

@endpush
