@extends('admin.layout.layout')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::members.index')}}" title="">Home</a></li>
                <li><a href="" title="">Edit Team Member</a></li>
            </ul>
        </div>
        <div class="message notification"></div>
        <div class="panel-content">
            <div class="col-md-6 categories-section">
                <form role="form" method="post" action="{{route('admin::order_member_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Team Member</button>
                </form>
                <div class="gallery-sec sortable">
                    @foreach($data as $d)
                        <div class="widget" id="{{$d->id}}">
                            <div class="widget-controls">
                                <span><a onclick="return confirm('Are you sure you want to delete this member?')" href="{{route('admin::members.show',['country' => $d->id])}}"><i class="fa fa-trash-o"></i></a></span>
                                <span data-id="60" class="update-content"><a href="{{route('admin::members.edit', ['country' => $d->id])}}"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                            <div class="form-elements-sec">
                                <div class="widget-title">
                                    <h4><a href="{{route('admin::members.edit', ['country' => $d->id])}}">{{$d->member_name}}</a>
                                        {{--<span class="related"><a target="_blank" href="/admin/posts/?pages&update=107912">Click here to edit related page</a> </span>--}}
                                    </h4>
                                    {{--<h5>There are <a href="/admin/sub-categories/?category=60">4 sub menu items </a> for this navigation.</h5>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form role="form" method="post" action="{{route('admin::order_member_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Team Member</button>
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

                        <form role="form" method="post" action="{{route('admin::members.update',['city' => $info->id])}}" accept-charset="UTF-8" enctype="multipart/form-data" class="sec" name="add_category_form">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <h3>Update Team Member</h3>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Name</label>
                                <input type="text" placeholder="Name" id="name" name="name" value="{{$info->member_name}}" class="form-control auto_generate_link_from" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Position</label>
                                <input type="text" placeholder="Position" id="position" name="position" value="{{$info->member_position}}" class="form-control auto_generate_link_from" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Description</label>
                                <textarea placeholder="Description" id="description" name="description" class="form-control auto_generate_link_from">{{$info->member_desc}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Image</label>
                                <input type="file" placeholder="Image" id="image" name="image" class="form-control auto_generate_link_from">
                            </div>
                            <div class="form-elements-sec">
                                <div class="widget-title">
                                    <h3>Image</h3>
                                    <div class="clr"></div>
                                    <div><img src="{{url('/')}}/uploads/members/{{$info->member_image}}"  /></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Facebook Url</label>
                                <input type="text" placeholder="Facebook" id="position" name="facebook_url" value="{{$info->facebook_url}}" class="form-control auto_generate_link_from" >
                            </div>
                             <div class="form-group">
                                <label class="sr-only">Twitter Url</label>
                                <input type="text" placeholder="Twitter" id="position" name="twitter_url" value="{{$info->twitter_url}}" class="form-control auto_generate_link_from" >
                            </div>
                             <div class="form-group">
                                <label class="sr-only">Linkedin Url</label>
                                <input type="text" placeholder="Linkedin" id="position" name="linkedin_url" value="{{$info->linkedin_url}}" class="form-control auto_generate_link_from" >
                            </div>
                            
                            <div class="form-group">
                            <label for="visible" class="sr-only">Visible</label>
                            <input type="checkbox" value="1" id="visible" name="visible"  class="form-control" @if($info->member_status=='Active') checked @endif>
                            </div>

                            <button class="btn green btn-default" type="submit" name="add_category_btn">Update Team Member</button>
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