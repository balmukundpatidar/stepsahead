@extends('admin.layout.layout')
@section('content')
    <div class="main-content">

        <div class="breadcrumbs">
            <ul>
                <li><a href="#/" title="">Home</a></li>
                <li><a href="{{url('admin/banner')}}" title="">Care & Support</a></li>
            </ul>
        </div>

        <div class="heading-sec">
            <div class="row">
                <div class="col-md-4 column">
                    <div class="heading-profile">
                        <h2>Care & Support</h2>
                    </div>
                </div>
                <div class="col-md-8 column">
                    <div class="top-bar-chart">
                        <div class="quick-report">
                            <div class="quick-report-infos">
                                <a class="fancybox fancybox.iframe" href="{{url('admin/addcaresupport')}}"><i class="fa fa-plus"></i> Add Care & Support</a>

                                {{--<button type="button" class="btns  orange-skin  mdm-btn mdm-radius">Add</button>--}}
                            </div>
                        </div>
                    </div><!-- Top Bar Chart -->
                </div>
            </div>
        </div><!-- Top Bar Chart -->

        <div class="panel-content">
            <div class="row">
                <div class="col-md-12 categories-section">
                <form role="form" method="post" action="{{route('admin::order_caresupport_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Care & Support</button>
                </form>
                <div class="gallery-sec sortable">
                    @foreach($data as $datas)
                    <div class="widget" id="{{$datas->id}}">
                        <div class="widget-controls">
                            <span><a onclick="return confirm('Are you sure you want to delete this care & support?');" href="{{url('admin/deletecaresupport/'.$datas->id)}}"><i class="fa fa-trash-o"></i></a></span>
                            <span data-id="60" class="update-content"><a class="fancybox fancybox.iframe" href="{{url('admin/editcaresupport/'.$datas->id)}}"><i class="fa fa-pencil-square-o"></i></a></span>
                        </div>
                        <div class="form-elements-sec">
                            <div class="row">
                                <div class="col-md-2">
                                  <img src="{{url('/')}}/jobs/images/{{$datas->care_image}}" alt="" style="background: blueviolet; border-radius: 0px;width:180p">
                               </div>
                               <div class="col-md-10">
                                    <div class="widget-title">
                                        <h4><a class="fancybox fancybox.iframe" href="{{url('admin/editcaresupport/'.$datas->id)}}">{{$datas->care_heading}}</a></h4>
                                       <p>{{$datas->care_text}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach

                </div>
                <form role="form" method="post" action="{{route('admin::order_caresupport_update')}}" class="sec sort_form" name="">
                    {{csrf_field()}}
                    <input type="hidden"  id="order" name="category_order"  class="form-control" required="">
                    <button class="btn green btn-default sort_btn" type="submit" name="tag_category_btn">Sort Care & Support</button>
                </form>
                
      <!--          <div class="col-md-12">-->
      <!--              <div class="widget">-->
      <!--                  <div class="table-area">-->
      <!--                      {{--<div class="widget-title">--}}-->
      <!--                          {{--<h3>Creating Responsive Tables with Bootstrap</h3>--}}-->
      <!--                          {{--<span>Inovations is great</span>--}}-->
      <!--                      {{--</div>--}}-->
      <!--              <div class="table-responsive">-->
      <!--              <table id="Datatable" class="table table-bordered">-->
      <!--                  <thead>-->
      <!--                  <tr>-->
      <!--                      <th>Image</th>-->
      <!--                      <th>Heading</th>-->
      <!--                      <th>Text</th>-->
      <!--                      <th>Edit</th>-->
      <!--                  </tr>-->
      <!--                  </thead>-->
      <!--                  <tbody>-->
						<!--@foreach($data as $datas)-->
      <!--                      <tr>-->
      <!--                          <td><img src="{{url('/')}}/jobs/images/{{$datas->care_image}}" alt="" style="width:200px"></td>-->
      <!--                          <td>{{$datas->care_heading}}</td>-->
      <!--                          <td>{{$datas->care_text}}</td>-->
      <!--                          <td><a class="fancybox fancybox.iframe" href="{{url('admin/editcaresupport/'.$datas->id)}}"><i class="fa fa-edit"></i> Edit</a></td>-->
      <!--                      </tr>-->
						<!--@endforeach	-->
      <!--                  </tbody>-->
      <!--              </table>-->
      <!--              </div>-->
      <!--                  </div>-->
      <!--              </div>-->
      <!--          </div>-->
            </div>
        </div><!-- Panel Content -->

    </div><!-- Main Content -->


    @push('scripts')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        {{--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">--}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#Datatable').DataTable();
                $('.fancybox').fancybox({
                    helpers: {title: null},
                    width: 600,
                    height: 600,
                    fitToView   : true,
                    autoSize    : true,
                    padding: 0,
                    openEffect: 'elastic',
                    afterClose  : function() {
                        window.location.reload();
                    }
                });
                
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
            });


        </script>
    @endpush

@stop