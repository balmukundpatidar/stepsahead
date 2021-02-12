@extends('admin.layout.layout')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::testimonial.index')}}" title="">Home</a></li>
                <li><a href="{{route('admin::testimonial.index')}}" title="">Add Testimonial</a></li>
            </ul>
        </div>
        <div class="message notification"></div>
        <div class="panel-content">
            <div class="col-md-6 categories-section">
                <form role="form" method="post" action="{{route('admin::order_testimonial_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Testimonial</button>
                </form>
                <div class="gallery-sec sortable">
                    @foreach($data as $d)
                        <div class="widget" id="{{$d->id}}">
                            <div class="widget-controls">
                                <span><a onclick="return confirm('Are you sure you want to delete this testimonial?');" href="{{route('admin::testimonial.show',['country' => $d->id])}}"><i class="fa fa-trash-o"></i></a></span>
                                <span data-id="60" class="update-content"><a href="{{route('admin::testimonial.edit', ['country' => $d->id])}}"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                            <div class="form-elements-sec">
                                <div class="widget-title">
                                    <h4><a href="{{route('admin::testimonial.edit', ['country' => $d->id])}}">{{$d->testi_title}}</a>
                                        {{--<span class="related"><a target="_blank" href="/admin/posts/?pages&update=107912">Click here to edit related page</a> </span>--}}
                                    </h4>
                                    {{--<h5>There are <a href="/admin/sub-categories/?category=60">4 sub menu items </a> for this navigation.</h5>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <form role="form" method="post" action="{{route('admin::order_testimonial_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Testimonial</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="widget">
                    <div class="form-elements-sec">
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

                        <form role="form" method="post" action="{{route('admin::testimonial.store')}}" accept-charset="UTF-8" enctype="multipart/form-data" class="sec" name="add_category_form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <h3>Add Testimonial</h3>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Title</label>
                                <input type="text" placeholder="Title" id="title" name="title" value="{{old('title')}}" class="form-control auto_generate_link_from" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Description</label>
                                <textarea placeholder="Description" id="description" name="description" class="form-control auto_generate_link_from">{{old('description')}}</textarea>
                            </div>
                            
                            {{--<div class="form-group">--}}
                            {{--<div class="search-section">--}}
                            {{--<div class="form-elements-sec">--}}
                            {{--<label class="sr-only">Select Page</label>--}}
                            {{--<div class="ui-widget form-group">--}}
                            {{--<input id="tag_title" for="is_page" name="post_title" placeholder="Search Titles" class="post_auto form-control" autocomplete="off">--}}
                            {{--<input type="hidden" name="page_id" id="page_id" value=""/>--}}
                            {{--<div class="error"></div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                            <label for="visible" class="sr-only">Visible</label>
                            <input type="checkbox" value="1" id="visible" name="visible"  class="form-control  " >
                            </div>

                            <button class="btn green btn-default" type="submit" name="add_category_btn">Add Testimonial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    @push('scripts')
        {{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
        <script>
            // $( function() {
            //     $( ".sortable" ).sortable();
            //     $( ".sortable" ).disableSelection();
            // } );
            //_____Sortable
            $( ".sortable" ).sortable({
                update: function(event, ui) {
                    result_string = $(this).sortable('toArray').toString();
                    console.log(result_string);

                },
                over: function(event, ui) {
                }
            });
            $( ".sortable" ).disableSelection();
            $("button.sort_btn").on("click", function(event){
                event.preventDefault();
                if (typeof result_string == 'undefined' || result_string == null) {
                } else {
                    $(this).parent().find('#order').val(result_string);
                    $(this).parent().submit();
                }
            })
        </script>
    @endpush

@stop