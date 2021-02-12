@extends('admin.layout.layout')
@section('content')
    <div class="main-content">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{route('admin::menus.index')}}" title="">Navigation</a></li>
                <li><a href="{{route('admin::menus.index')}}" title="">Add Menu Item</a></li>
            </ul>
        </div>
        <div class="message notification"></div>
        <div class="panel-content">
            <div class="col-md-6 categories-section">
                <form role="form" method="post" action="{{route('admin::order_menu_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Categories</button>
                </form>
                <div class="gallery-sec sortable">
                    @foreach($menu as $parent_menu)
                        <div class="widget" id="{{$parent_menu->id}}">
                            <div class="widget-controls">
                                <span><a onclick="return confirm('Are you sure you want to delete this menu item?')" href="{{route('admin::menus.show',['country' => $parent_menu->id])}}"><i class="fa fa-trash-o"></i></a></span>
                                <span data-id="60" class="update-content"><a href="{{route('admin::edit', ['country' => $parent_menu->id,'sub_categories'=>$parent_menu->parent_id,])}}"><i class="fa fa-pencil-square-o"></i></a></span>
                            </div>
                            <div class="form-elements-sec">
                                <div class="widget-title">
                                    <h4><a href="{{route('admin::edit', ['country' => $parent_menu->id,'sub_categories'=>$parent_menu->parent_id,])}}">{{$parent_menu->menu_name}}</a>
                                        <span class="related"><a target="_blank" href="{{route('admin::menu_page',['id'=>$parent_menu->page_id])}}">Click here to edit related page</a> </span>
                                    </h4>
                                    <?php $count = DB::table('menu')->where('parent_id',$parent_menu->id)->count() ?>
                                    <h5>There are <a href="{{route('admin::sub_categories',['id'=>$parent_menu->id])}}">{{$count}} sub menu items </a> for this navigation.</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form role="form" method="post" action="{{route('admin::order_menu_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Categories</button>
                </form>        </div>
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

                        <form role="form" method="post" action="{{route('admin::menus.update',['city' => $info->id])}}" class="sec" name="add_category_form">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <h3>Update Menu Item</h3>
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Title</label>
                                <input type="text" placeholder="Title" id="title" name="title" value="{{$info->menu_name}}" class="form-control auto_generate_link_from" required>
                            </div>
                            <div class="form-group">
                                <div class="search-section">
                                    <div class="form-elements-sec">
                                        <label class="sr-only">Select Page</label>
                                        <select name="page">
                                            <option value="0">Select Page</option>
                                            @foreach($pages as $page)
                                                <option  @if ($page->id == $info->page_id) selected="selected" @endif value="{{$page->id}}">{{$page->page_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <div class="form-group">
                                <label for="visible" class="sr-only">Visible</label>
                                <input type="checkbox" value="1"  id="visible" name="visible"  class="form-control" @if($info->menu_status=='Active') {{'checked'}} @endif >
                            </div>
                             <div class="form-group">
                                <label for="visible" class="sr-only">Is Collection Page?</label>
                                <input type="checkbox" value="1" id="is_collection" name="collection_page"  class="form-control"  @if($info->collection_page==1) {{'checked'}} @endif >
                            </div>
                            <div class="form-group">
                                <label for="seo_link" class="sr-only">Parent Menu Item</label>
                                <select name="parent_id">
                                    <option value="0">Select menu item</option>
                                    @foreach($parent_menus as $parent_menu)
                                        <option  @if ($parent_menu->id == $info->parent_id) selected="selected" @endif value="{{$parent_menu->id}}">{{$parent_menu->menu_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn green btn-default" type="submit" name="add_category_btn">Update Menu Item</button>
                        </form>
                    </div>
                </div>
            </div>    </div>
    </div>
    </div><!-- Main Content -->


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