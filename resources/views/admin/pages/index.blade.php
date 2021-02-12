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
            <a href="{{url('admin/pages/create')}}"><i class="fa fa-circle-o-notch"></i>  New Page  </a>
            <div class="col-md-12 posts-section">
                <div class="gallery-sec ">
                    @foreach($data as $d)
                    <div class="widget" id="obj-107904">
                        <div class="widget-controls">
                            <span><a onclick="return confirm('Are you sure you want to delete this page?')" href="{{route('admin::pages.show',['country' => $d->id])}}"><i class="fa fa-trash-o"></i></a></span>
                            <span data-id="107904" class="update-content"><a href="{{route('admin::pages.edit', ['country' => $d->id])}}"><i class="fa fa-pencil-square-o"></i></a></span>
                        </div>
                        <div class="form-elements-sec">
                            <div class="widget-title">
                                <h4><a href="{{route('admin::pages.edit', ['country' => $d->id])}}">{{$d->page_title}}</a></h4>


                            </div>
                        </div>
                    </div>
                         @endforeach
                    <div class="small-12 columns ">
                        <?php echo $data->render();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- Main Content -->
@stop
@push('scripts')

@endpush
