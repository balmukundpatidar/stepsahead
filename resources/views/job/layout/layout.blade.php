<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>
    Steps Ahead Care &amp; Support | Plymouth &#8211; providing support to
    those with an acquired brain injury, challenging behaviour, mental health
    and learning disabilities
  </title>
     <meta name="keywords" content="@yield('meta-title')">
    <meta name="description" content="@yield('meta-description')">
    <meta name="author" content="">
	<link rel="icon" href="{{url('/')}}/jobs/img/logo-icon.svg" type="image/x-icon" />
	<!--<link rel="stylesheet" href="{{url('/')}}/jobs/css/all.css" />-->
    <link rel="stylesheet" href="{{url('/')}}/jobs/css/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css">
  <script  src="{{url('/')}}/jobs/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<?php header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); ?>


</head>

<body>
  <!-- Loader -->
  <div class="loader">
    <div class="LoaderBalls">
      <div class="LoaderBalls__item"></div>
      <div class="LoaderBalls__item"></div>
      <div class="LoaderBalls__item"></div>
    </div>
  </div>
  <!-- Header -->

  <!-- header -->
  <header>
    <div class="container">
      <div class="h-wrapper d-flex align-items-center">
        <div class="logo">
          <a href="{{url('/')}}">
            <img src="{{url('/')}}/jobs/images/{{$setttings->header_logo}}" alt="Step Ahead" />
          </a>
        </div>
        <div class="navigation ml-auto">
          <ul class="d-flex align-items-center nav">
			                    <?php
                                use Illuminate\Support\Facades\DB;
                                use App\Model\TwitterAPIExchange;
                                $data = DB::table('menu')->where('parent_id',0)->orderBy('menu_position')->get();
                                ?>
                                @foreach($data as $menu)
                                    <?php
                                    $page_url = DB::table('pages')->where('id',$menu->page_id)->value('page_url');
                                    $COUNT = DB::table('menu')->where('parent_id',$menu->id)->count();
                                    if($COUNT>0){
                                    $data_sub_menu = DB::table('menu')->where('parent_id',$menu->id)->where('menu_status','Active')->orderBy('menu_position')->get();
                                    ?>
                                        <li class="{{ Request::is($page_url) ? 'active' : '' }}">
                                        @if (count($data_sub_menu))
                                         <a href="javascript:void(0)"> {{$menu->menu_name}}<span><img src="{{url('/')}}/jobs/img/arrow-down.svg" alt="" /></span></a>
                                         <div class="sub-menu">
                                        <ul>
                                            @foreach($data_sub_menu as $sub_menu)
                                                <?php
                                                $page_url_sub_menu = DB::table('pages')->where('id',$sub_menu->page_id)->value('page_url');
                                                ?>
                                            <li class="pl-0"><a href="{{route('pages',['id'=>$page_url_sub_menu])}}">{{$sub_menu->menu_name}}</a></li>
                                            @endforeach
                                        </ul>
										</div>
                                        @else
                                         <a href="{{route('pages',['id'=>$page_url])}}"><span class="title">{{$menu->menu_name}}</span></a>
                                        @endif
                                        </li>
                                        <?php }else{
                                        $page_url = DB::table('pages')->where('id',$menu->page_id)->value('page_url');
                                        ?>
                                      <li class="{{ Request::is($page_url) ? 'active' : '' }}"><a href="{{route('pages',['id'=>$page_url])}}"><span class="title">{{$menu->menu_name}}</span></a></li>
                                      <?php } ?>
                                   @endforeach
								   
               @if(Auth::check())
               @if(Auth::user()->user_type!='Admin')
              <li class="{{ Request::is('employee*') ? 'active' : '' }}">
                  <a href="javascript:void(0)">Profile <span><img src="{{url('/')}}/jobs/img/arrow-down.svg" alt="" /></span></a>
                  <div class="sub-menu"> 
                        <ul>
                          <li class="{{ Request::is('employee*') ? 'active' : '' }}"><a href="{{url('employee/dashboard')}}">Profile</li>
                          <li><a href="{{url('logout')}}">Sign Out</a></li>
 
                        </ul>
                  </div>
              </li>
                @endif
                @else
                <li class="{{ Request::is('employee*') ? 'active' : '' }}">
                  <a href="{{ url('my-application') }}">Sign In </a>
                </li>
                @endif
          </ul>
		  
        </div>
        <div id="nav-icon" class="">
          <span></span> <span></span> <span></span>
        </div>
        <div class="overlay-close"></div>
      </div>
    </div>
  </header>
@yield('content') 
@yield('page-js-script')

  <!--[footer] -->
  <footer class="footer">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-lg-3 col-sm-7">
          <div class="ftr-links">
            <img src="{{url('/')}}/jobs/images/{{$setttings->footer_logo}}" alt="icon" />
            <h2><span>Head Office: </span><a href="tel:{{$setttings->phone_number_1}}">{{$setttings->phone_number_1}}</a><br><span>Bristol Office: </span><a href="tel:0117 9116715">0117 9116715</a></h2>
            <ul>
            
              @if($setttings->facebook_url != '')
              <li>
                <a target="_blank" href="{{$setttings->facebook_url}}"><i class="fa fa-facebook-f"></i></a>
              </li>
              @endif
              @if($setttings->twitter_url != '')
              <li>
                <a target="_blank" href="{{$setttings->twitter_url}}"><i class="fa fa-twitter"></i></a>
              </li>
              @endif
              @if($setttings->instagram_url != '')
              <li>
                <a target="_blank" href="{{$setttings->instagram_url}}"><i class="fa fa-instagram"></i></a>
              </li>
              @endif
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-5">
          <div class="quick-links pl-5">
            <h1>Links</h1>
            <ul>
            @foreach($data as $link)
            @if($link->page_id != 1)
            <li class="{{ Request::is('about*') ? 'active' : '' }}">
              <?php $page_url = DB::table('pages')->where('id',$link->page_id)->value('page_url'); ?>
                <a href="{{route('pages',['id'=>$page_url])}}"><span class="title">{{$link->menu_name}}</span></a></li>
                                      
            </li>
            @endif
            @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-7">
          <div class="quick-links">
            <h1>Recent Tweets</h1>
            <?php
// require_once('./TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "95888725-ndMWYpTKyvcUdXFJovBzH7TZMLNpRYjxPBzvs2MTg",
    'oauth_access_token_secret' => "ame9tgQtOpuSGJPze5MJiWbXMB1XfZgtZ2BldmTvuEslc",
    'consumer_key' => "TbDFueF9boDzqeDQrFszGONRt",
    'consumer_secret' => "fLjwwTdvF2nymHFo5Kzddjt3EHjkWQlVP84TpR18wzEWqY2JP1"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$user = "StepsAheadCare";
$count = 3;
if (isset($_GET['user'])) { $user = $_GET['user']; }
if (isset($_GET['count'])) { $count = $_GET['count'];}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest(),$assoc = TRUE);
if(isset($string["errors"][0]["message"])) {
    echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";
    exit();
}
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>
            @if($setttings->tweets_feeds != '')
            {!! $setttings->tweets_feeds !!}
            @else
            @foreach($string as $tweet)
			  @if($tweet)
            <div class="tweets">
           
              <i class="fa fa-twitter"></i>
              <h3>{!! $tweet['text'] !!}</h3>
              @foreach($tweet['entities']['urls'] as $url)
              <a target="_blank" href="{{ $url['url'] }}">{{ $url['url'] }}</a>
              @endforeach
            </div>
			  @endif
            @endforeach
            @endif
          </div>
        </div>
        <div class="col-lg-3 col-sm-5">
          <div class="quick-links">
            <h1>Contact Us</h1>
            <p>
             
              {{$setttings->adress}}
              
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-down wow fadeIn">
      <div class="container">
        <div class="row">
          <div class="col-md-6 steps">
            <p class="steps">
              StepsAhead © <?php echo date('Y'); ?>. <a href="http://codeadigital.co.uk/" target="_blank">Web Design</a> by
              <a href="http://codeadigital.co.uk/" target="_blank">Codea Digital Ltd</a>
            </p>
           <!--  {!! $setttings->copyright !!} -->
          </div>
          <div class="col-md-6">
            <p class="text-right">
              <a href="/privacy-policy">Privacy Policy</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--[footer] -->
  <!--<script async src="{{url('/')}}/jobs/js/all.js"></script>-->
  <script async src="{{url('/')}}/jobs/js/popper.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/bootstrap.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/wow.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/owl.carousel.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/TweenLite.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/EasePack.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/polyfill.js"></script>
  <script async src="{{url('/')}}/jobs/js/particle.js"></script>
  <script async src="{{url('/')}}/jobs/js/lettering.js"></script>
  <script async src="{{url('/')}}/jobs/js/lightgallery-all.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/isotope.min.js"></script>
  <script async src="{{url('/')}}/jobs/js/imagesloaded.pkgd.js"></script>
 <script async src="{{url('/')}}/jobs/step/lib/jquery.steps.js"></script>


    <script async src="{{ url('js/library/bootstrap-datepicker.js') }}"></script>
    <script async src="{{ url('js/library/jquery.validate.js') }}"></script>
    <script async src="{{ url('js/library/jquery.validate.additional.methods.js') }}"></script>
    <script async src="{{ url('js/registration.js') }}"></script>
    <script async src="{{url('/')}}/jobs/js/jquery.fancybox.js"></script>
  <script async src="{{url('/')}}/jobs/js/custom.js"></script>
      
            
           
  
</body>
</html>