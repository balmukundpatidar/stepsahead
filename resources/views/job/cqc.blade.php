@extends('job.layout.layout')
@section('content')
 <!-- main -->
    <main>
        <?php $url = 'img/package.png';  ?>
        <!-- hero banner -->
        <section class="agency" style="background-image: url('{{url('/')}}/jobs/{{$url}}');">
            <div class="container">
                <div class="heading-05 wow fadeIn">
                    <h1>Coming soon</h1>
                </div>
            </div>
        </section>
    </main>
	@stop