<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>Admin </title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
    <link rel="stylesheet" href="{{url('/')}}/assest/css/bootstrap.min.css">
    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="{{url('/')}}/assest/css/icons.css">
    <link rel="stylesheet" href="{{url('/')}}/assest/css/main.css">
    <link rel="stylesheet" href="{{url('/')}}/assest/css/responsive.css">

</head>
<body>
<div id="progressBar">
    <div class="loader"></div>
</div>
<div class="toggle-content">
    <div class="panel-setting">
        <div class="row">
            <div class="col-md-2 column">
                <div class="custom-text">
                    <h4>Our Total Counts</h4>
                    <p>Rinter took a galley of type and scrambled ajnare tokeraline..</p>
                </div>
            </div>
            <div class="col-md-10 column">
                <div class="quick-stats">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$56</i>
                                    <span data-peity='{ "fill": ["#faa5ff", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>5/7</span>
                                </p>
                                <span>Today Earnings</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$786</i>
                                    <span data-peity='{ "fill": ["#ffb8b8", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>3/7</span>
                                </p>
                                <span>Refferel</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$345</i>
                                    <span data-peity='{ "fill": ["#ace9ff", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>4/7</span>
                                </p>
                                <span>Commision</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="quick-stats-box">
                                <p class="data-attributes">
                                    <i>$223</i>
                                    <span data-peity='{ "fill": ["#b8b8ff", "rgba(255,255,255,0.15)"],   "innerRadius": 47, "radius": 50 }'>6/7</span>
                                </p>
                                <span>New Sales</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="total-sales-info">
                                <span>Total sales made of all time</span>
                                <h3>$1,225</h3>
                                <ul>
                                    <li>
                                        <span>Target</span>
                                        <h5>$2,251</h5>
                                    </li>
                                    <li>
                                        <span>Today</span>
                                        <h5>$107</h5>
                                    </li>
                                    <li>
                                        <span>All time</span>
                                        <h5>$3,463</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="fa fa-close"></span>
</div><!-- Toggle Content -->
<div class="top-bar">
    <div class="logo">
        {{--<a href="index.html" title=""><i class="fa fa-deviantart"></i> Electric</a>--}}
        <div class="menu-options"><span class="menu-action"><i></i></span></div>
    </div>
    {{--<form class="search-form">--}}
        {{--<input type="text" placeholder="Search Here..." />--}}
        {{--<button type="submit"><i class="fa fa-search"></i></button>--}}
    {{--</form>--}}
    @include('admin.topmenu')
    <div class="quick-links">
        <ul>
            {{--<li><a title="" class="sky-skin"><i class="fa fa-info"></i></a>--}}
                {{--<div class="dialouge notification" style="display: none;">--}}
                    {{--<span>You have 6 New Notification</span>--}}
                    {{--<a title="" href="/"><img alt="" src="http://placehold.it/40x40">Server 3 is Over Loader Pleas--}}
                        {{--toe Check. <p><i class="fa fa-clock-o"></i>3:45pm</p></a>--}}
                    {{--<a title="" href="/"><img alt="" src="http://placehold.it/40x40">Server 10 is Over Loader Pleas--}}
                        {{--toe Check. <p><i class="fa fa-clock-o"></i>1:40am</p></a>--}}
                    {{--<a title="" href="/"><img alt="" src="http://placehold.it/40x40">New User Registered Please Check This <p><i class="fa fa-clock-o"></i>4 Hours ago</p></a>--}}
                    {{--<a class="view-all" href="#">VIEW ALL NOTIFICATIONS</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li><a title="" class="purple-skin"><i class="fa fa-comment-o"></i></a>--}}
                {{--<div class="dialouge notification" style="display: none;">--}}
                    {{--<span>You have 3 New Messages</span>--}}
                    {{--<a title="" href="/">Hey! How are You Diana. I waiting for you.--}}
                        {{--toe Check. <p><i class="fa fa-clock-o"></i>3:45pm</p></a>--}}
                    {{--<a title="" href="/">Please Can you Submit A file. I am From Korea--}}
                        {{--toe Check. <p><i class="fa fa-clock-o"></i>1:40am</p></a>--}}
                    {{--<a title="" href="/">Hey Today is Party So you Will Have to Come <p><i class="fa fa-clock-o"></i>4 Hours ago</p></a>--}}
                    {{--<a class="view-all" href="inbox.html">VIEW ALL MESSAGE</a>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li><a title="" class="show-stats red-skin"><i class="fa fa-cog"></i></a></li>--}}
            <li><a title="" id="toolFullScreen" class="pink-skin"><i class="fa fa-arrows-alt"></i></a></li>
        </ul>
    </div>
</div><!-- Top Bar -->
<header class="side-header light-skin opened-menu">
    <a href="/admin/" title="" class="logo-wrap">
        <img src="{{url('/')}}/assest/logo.png"></a>
    <div class="admin-details">
        {{--<span>--}}
            {{--<img src="http://placehold.it/896x932" alt="" />--}}
        {{--</span>--}}
        @if(Auth::check())
        <h3>{{Auth::user()->user_name}}</h3>
        @endif
        {{--<i>Web CODER</i>--}}
        {{--<h5 class="admin-status online">Online</h5>--}}
    </div>
    <div class="menu-scroll">
        <div class="side-menus">
            <span>MAIN LINKS</span>
            <nav>
               @include('admin.leftmenu')
            </nav>
        </div>
    </div><!-- Menu Scroll -->
</header>
@yield('content')
<footer>
    <div class="container">
        <p>© {{ date('Y')}} StepsAhead
            {{--<i class="fa fa-heart"></i>--}}
        </p>
        {{--<ul>--}}
            {{--<li><a href="#/" title="">Dashboard</a></li>--}}
            {{--<li><a href="#/" title="">Widgets</a></li>--}}
            {{--<li><a href="#/" title="">About us</a></li>--}}
            {{--<li><a href="#/" title="">Contact us</a></li>--}}
        {{--</ul>--}}
    </div>
</footer>

<!-- Vendor: Javascripts -->
<script src="{{url('/')}}/assest/js/jquery-2.1.3.js"></script>
<script src="{{url('/')}}/assest/js/jquery-ui.js"></script>

<script src="{{url('/')}}/assest/js/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

<!-- Our Website Javascripts -->
<script src="{{url('/')}}/assest/js/app.js"></script>
<script src="{{url('/')}}/assest/js/main.js"></script>
<script src="{{url('/')}}/assest/js/common.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        "use strict";

        //*** Twitter Feed Widget ***//
        $('#tweecool').tweecool({
            //settings
            username : 'envato',
            limit : 4
        });


        //*** Piety Mini Charts ***//
        $(function() {
            $(".bar").peity("bar", {
                fill: ["#ff8484"],
                height: ["40px"],
                width: ["94px"]
            })

            $(".bar2").peity("bar", {
                fill: ["#9797ff"],
                height: ["40px"],
                width: ["94px"]
            })

            $(".data-attributes span").peity("donut")
        });


        //***** Clients lists Scroll *****//
        $(function(){
            $('#people-list').slimScroll({
                height: '233px',
                wheelStep: 10,
                size: '2px'
            });
        });

        //***** Twitter Widget Scroll *****//
        $(function(){
            $('.twitter-widget').slimScroll({
                height: '282px',
                wheelStep: 10,
                size: '2px'
            });
        });

        //*** Activity Chart ***//
        function updateChartData(object, data) {
            for (var i = 0; i < data.length; i++) {
                object[i].value = data[i];
            }
        };

        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "Octuber", "Noverber", "December"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(255,162,162,0.2)",
                    strokeColor: "rgba(255,162,162,1)",
                    pointColor: "rgba(255,162,162,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 120, 200, 130, 100, 180, 150, 120, 170, 210, 350]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(173,173,253,0.2)",
                    strokeColor: "rgba(173,173,253,1)",
                    pointColor: "rgba(173,173,253,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(173,173,253,1)",
                    data: [100, 200, 150, 300, 90, 180, 350, 100, 400, 200, 50, 400]
                }
            ]
        };



            //Sort by first name
            $(function() {
                $.fn.sortList = function() {
                    var mylist = $(this);
                    var listitems = $('li', mylist).get();
                    listitems.sort(function(a, b) {
                    var compA = $(a).text().toUpperCase();
                    var compB = $(b).text().toUpperCase();
                    return (compA < compB) ? -1 : 1;
                    });
                    $.each(listitems, function(i, itm) {
                    mylist.append(itm);
                });
            }
        });

      //Sort by last name
      $(function() {
          $.fn.sortListLast = function() {
          var mylist = $(this);
          var listitems = $('li', mylist).get();
          listitems.sort(function(a, b) {
              var compA = $('.last-name', a).text().toUpperCase();
              var compB = $('.last-name', b).text().toUpperCase();
              return (compA < compB) ? -1 : 1;
          });
          $.each(listitems, function(i, itm) {
              mylist.append(itm);
          });
         }
      });

    //Search filter
    (function ($) {
        // custom css expression for a case-insensitive contains()
        jQuery.expr[':'].Contains = function(a,i,m){
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
    };


    function listFilter(searchDir, list) {
      var form = $("<form>").attr({"class":"filterform","action":"#"}),
          input = $("<input>").attr({"class":"filterinput","type":"text","placeholder":"Live Client Search"});
      $(form).append(input).appendTo(searchDir);

      $(input)
        .change( function () {
          var filter = $(this).val();
          if(filter) {
            $(list).find("li:not(:Contains(" + filter + "))").slideUp();
            $(list).find("li:Contains(" + filter + ")").slideDown();
          } else {
            $(list).find("li").slideDown();
          }
          return false;
        })
      .keyup( function () {
          $(this).change();
      });
    }

    //ondomready
    $(function () {
      listFilter($("#searchDir"), $("#people-list"));
        });
      }(jQuery));


    //*** Task lists ***//
    $('.task-managment > ol > li').on("click", function(){
        $(this).toggleClass('active');
    });

    //*** Task List Deleted ***//
    $('.task-managment > ol > li > span').on("click", function(){
        $(this).parent().slideUp();
    });

    var counter = 0;
    $('button#addEventAdder, button#addEventAdder > i').on('click',function(){
        var classes = ["red-skin", "sky-skin", "purple-skin", "pink-skin", "orange-skin"];
        var ul = $('ol#listitems');
        var item = $('input#task-item').val();
        if(item !== '' && item !== 'undefined' ){
            if(counter == classes.length){
                counter = 0;
            }
            $(ul).prepend('<li><i class="empty"></i>'+item+'<span class="fa fa-close"></span></li>');
            $('.task-managment > ol > li').on("click", function(){
                $(this).toggleClass('active');
            });
            $('.task-managment > ol > li > span').on("click", function(){
                $(this).parent().slideUp();
            });
            $('input#task-item').addClass('null');
            $('input#task-item').val('');
            $('input#task-item').focus();
            var attribute = $("ol#listitems").children('li').eq(0).children('i');
            $(attribute).attr('class', classes[counter]);
            counter++;
        }

    });

    //*** Chat message Initiliaze ***//
    var KEY_ENTER=13;
        var $input=$(".chat-input")
            ,$sendButton=$(".chat-send")
            ,$messagesContainer=$(".chat-messages")
            ,$messagesList=$(".chat-messages-list")
            ,$effectContainer=$(".chat-effect-container")
            ,$infoContainer=$(".chat-info-container")

            ,messages=0
            ,bleeding=100
            ,isFriendTyping=false
            ,incomingMessages=0
            ,lastMessage=""
        ;

        var lipsum="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

        function gooOn(){
            setFilter('url(#goo)');
        }
        function gooOff(){
            setFilter('none');
        }
        function setFilter(value){
            $effectContainer.css({
                webkitFilter:value,
                mozFilter:value,
                filter:value,
            });
        }

        function addMessage(message,self){
            var $messageContainer=$("<li/>")
                .addClass('chat-message '+(self?'chat-message-self':'chat-message-friend'))
                .appendTo($messagesList)
            ;
            var $messageBubble=$("<div/>")
                .addClass('chat-message-bubble')
                .appendTo($messageContainer)
            ;
            $messageBubble.text(message);

            var oldScroll=$messagesContainer.scrollTop();
            $messagesContainer.scrollTop(9999999);
            var newScroll=$messagesContainer.scrollTop();
            var scrollDiff=newScroll-oldScroll;
            TweenMax.fromTo(
                $messagesList,0.4,{
                    y:scrollDiff
                },{
                    y:0,
                    ease:Quint.easeOut
                }
            );

            return {
                $container:$messageContainer,
                $bubble:$messageBubble
            };
        }
        function sendMessage(){
            var message=$input.text();

            if(message=="") return;

            lastMessage=message;

            var messageElements=addMessage(message,true)
                ,$messageContainer=messageElements.$container
                ,$messageBubble=messageElements.$bubble
            ;

            var oldInputHeight=$(".chat-input-bar").height();
            $input.text('');
            updateChatHeight();
            var newInputHeight=$(".chat-input-bar").height();
            var inputHeightDiff=newInputHeight-oldInputHeight

            var $messageEffect=$("<div/>")
                .addClass('chat-message-effect')
                .append($messageBubble.clone())
                .appendTo($effectContainer)
                .css({
                    left:$input.position().left-12,
                    top:$input.position().top+bleeding+inputHeightDiff
                })
            ;


            var messagePos=$messageBubble.offset();
            var effectPos=$messageEffect.offset();
            var pos={
                x:messagePos.left-effectPos.left,
                y:messagePos.top-effectPos.top
            }

            var $sendIcon=$sendButton.children("i");
            TweenMax.to(
                $sendIcon,0.15,{
                    x:30,
                    y:-30,
                    force3D:true,
                    ease:Quad.easeOut,
                    onComplete:function(){
                        TweenMax.fromTo(
                            $sendIcon,0.15,{
                                x:-30,
                                y:30
                            },
                            {
                                x:0,
                                y:0,
                                force3D:true,
                                ease:Quad.easeOut
                            }
                        );
                    }
                }
            );

            gooOn();


            TweenMax.from(
                $messageBubble,0.8,{
                    y:-pos.y,
                    ease:Sine.easeInOut,
                    force3D:true
                }
            );

            var startingScroll=$messagesContainer.scrollTop();
            var curScrollDiff=0;
            var effectYTransition;
            var setEffectYTransition=function(dest,dur,ease){
                return TweenMax.to(
                    $messageEffect,dur,{
                        y:dest,
                        ease:ease,
                        force3D:true,
                        onUpdate:function(){
                            var curScroll=$messagesContainer.scrollTop();
                            var scrollDiff=curScroll-startingScroll;
                            if(scrollDiff>0){
                                curScrollDiff+=scrollDiff;
                                startingScroll=curScroll;

                                var time=effectYTransition.time();
                                effectYTransition.kill();
                                effectYTransition=setEffectYTransition(pos.y-curScrollDiff,0.8-time,Sine.easeOut);
                            }
                        }
                    }
                );
            }

            effectYTransition=setEffectYTransition(pos.y,0.8,Sine.easeInOut);

            // effectYTransition.updateTo({y:800});

            TweenMax.from(
                $messageBubble,0.6,{
                    delay:0.2,
                    x:-pos.x,
                    ease:Quad.easeInOut,
                    force3D:true
                }
            );
            TweenMax.to(
                $messageEffect,0.6,{
                    delay:0.2,
                    x:pos.x,
                    ease:Quad.easeInOut,
                    force3D:true
                }
            );

            TweenMax.from(
                $messageBubble,0.2,{
                    delay:0.65,
                    opacity:0,
                    ease:Quad.easeInOut,
                    onComplete:function(){
                        TweenMax.killTweensOf($messageEffect);
                        $messageEffect.remove();
                        if(!isFriendTyping)
                            gooOff();
                    }
                }
            );

            messages++;

            if(Math.random()<0.65 || lastMessage.indexOf("?")>-1 || messages==1) getReply();
        }
        function getReply(){
            if(incomingMessages>2) return;
            incomingMessages++;
            var typeStartDelay=1000+(lastMessage.length*40)+(Math.random()*1000);
            setTimeout(friendIsTyping,typeStartDelay);

            var source=lipsum.toLowerCase();
            source=source.split(" ");
            var start=Math.round(Math.random()*(source.length-1));
            var length=Math.round(Math.random()*13)+1;
            var end=start+length;
            if(end>=source.length){
                end=source.length-1;
                length=end-start;
            }
            var message="";
            for (var i = 0; i < length; i++) {
                message+=source[start+i]+(i<length-1?" ":"");
            };
            message+=Math.random()<0.4?"?":"";
            message+=Math.random()<0.2?" :)":(Math.random()<0.2?" :(":"");

            var typeDelay=300+(message.length*50)+(Math.random()*1000);

            setTimeout(function(){
                receiveMessage(message);
            },typeDelay+typeStartDelay);

            setTimeout(function(){
                incomingMessages--;
                if(Math.random()<0.1){
                    getReply();
                }
                if(incomingMessages<=0){
                    friendStoppedTyping();
                }
            },typeDelay+typeStartDelay);
        }
        function friendIsTyping(){
            if(isFriendTyping) return;

            isFriendTyping=true;

            var $dots=$("<div/>")
                .addClass('chat-effect-dots')
                .css({
                    top:-30+bleeding,
                    left:10
                })
                .appendTo($effectContainer)
            ;
            for (var i = 0; i < 3; i++) {
                var $dot=$("<div/>")
                    .addClass("chat-effect-dot")
                    .css({
                        left:i*20
                    })
                    .appendTo($dots)
                ;
                TweenMax.to($dot,0.3,{
                    delay:-i*0.1,
                    y:30,
                    yoyo:true,
                    repeat:-1,
                    ease:Quad.easeInOut
                })
            };

            var $info=$("<div/>")
                .addClass("chat-info-typing")
                .text("Your friend is typing...")
                .css({
                    transform:"translate3d(0,30px,0)"
                })
                .appendTo($infoContainer)

            TweenMax.to($info, 0.3,{
                y:0,
                force3D:true
            });

            gooOn();
        }

        function friendStoppedTyping(){
            if(!isFriendTyping) return

            isFriendTyping=false;

            var $dots=$effectContainer.find(".chat-effect-dots");
            TweenMax.to($dots,0.3,{
                y:40,
                force3D:true,
                ease:Quad.easeIn,
            });

            var $info=$infoContainer.find(".chat-info-typing");
            TweenMax.to($info,0.3,{
                y:30,
                force3D:true,
                ease:Quad.easeIn,
                onComplete:function(){
                    $dots.remove();
                    $info.remove();

                    gooOff();
                }
            });
        }
        function receiveMessage(message){
            var messageElements=addMessage(message,false)
                ,$messageContainer=messageElements.$container
                ,$messageBubble=messageElements.$bubble
            ;

            TweenMax.set($messageBubble,{
                transformOrigin:"60px 50%"
            })
            TweenMax.from($messageBubble,0.4,{
                scale:0,
                force3D:true,
                ease:Back.easeOut
            })
            TweenMax.from($messageBubble,0.4,{
                x:-100,
                force3D:true,
                ease:Quint.easeOut
            })
        }

        function updateChatHeight(){
            $messagesContainer.css({
                height:460-$(".chat-input-bar").height()
            });
        }

        $input.keydown(function(event) {
            if(event.keyCode==KEY_ENTER){
                event.preventDefault();
                sendMessage();
            }
        });
        $sendButton.click(function(event){
            event.preventDefault();
            sendMessage();
            // $input.focus();
        });
        $sendButton.on("touchstart",function(event){
            event.preventDefault();
            sendMessage();
            // $input.focus();
        });

        $input.on("input",function(){
            updateChatHeight();
        });

        gooOff();
        updateChatHeight();

    });
</script>
<script src="{{ url('/') }}/assest/js/tinymce/tinymce/tinymce.min.js"></script>
<script>
    function RoxyFileBrowser(field_name, url, type, win) {
        var roxyFileman = '{{ url('/') }}/assest/js/tinymce/fileman/index.html';
        if (roxyFileman.indexOf("?") < 0) {
            roxyFileman += "?type=" + type;
        }
        else {
            roxyFileman += "&type=" + type;
        }
        roxyFileman += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;
        if(tinyMCE.activeEditor.settings.language){
            roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;
        }
        tinyMCE.activeEditor.windowManager.open({
            file: roxyFileman,
            title: 'File Manager',
            width: 850,
            height: 650,
            resizable: "yes",
            plugins: "media",
            inline: "yes",
            close_previous: "no"
        }, {     window: win,     input: field_name    });
        return false;
    }
    tinymce.init({
        selector:'textarea',
        document_base_url : "/",
        height: 500,
        theme: 'modern',
        valid_elements : '*[*]',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],

        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | fullscreen',
        image_advtab: true,
        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' }
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ],
        media_strict: false,
        file_picker_types: 'file image',
        file_browser_callback: RoxyFileBrowser,
        paste_remove_spans : true,
        paste_convert_headers_to_strong: true,
        paste_remove_styles: true,
        paste_text_linebreaktype: true,
        paste_strip_class_attributes: "all",
        paste_retain_style_properties: "all",
        paste_auto_cleanup_on_paste: true,
        image_caption: true,
        image_dimensions: false,
        image_advtab: true,
        importcss_append: true,

        importcss_groups: [
            {title: "Table styles", filter: /^(td|tr|table)\./},
            {title: "Block styles", filter: /^(div|p|ul|ol|h1|h2|h3|h4|h5|h6)\./},
            {title: "Image styles", filter: /^(img)\./},
            {title: "Other styles"}
        ],
        style_formats: [
            {title: "Headers", items: [
                    {title: "Header 1", format: "h1"},
                    {title: "Header 2", format: "h2"},
                    {title: "Header 3", format: "h3"},
                    {title: "Header 4", format: "h4"},
                    {title: "Header 5", format: "h5"},
                    {title: "Header 6", format: "h6"}
                ]},
            {title: "Inline", items: [
                    {title : 'Span', inline : 'span', styles : {color : '#9A6F46'}},
                    {title: "Bold", icon: "bold", format: "bold"},
                    {title: "Italic", icon: "italic", format: "italic"},
                    {title: "Underline", icon: "underline", format: "underline"},
                    {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
                    {title: "Superscript", icon: "superscript", format: "superscript"},
                    {title: "Subscript", icon: "subscript", format: "subscript"},
                    {title: "Code", icon: "code", format: "code"}
                ]},
            {title: "Blocks", items: [
                    {title: "Paragraph", format: "p"},
                    {title: "Div", format: "div"},
                    {title: "Blockquote", format: "blockquote"},
                    {title: "Pre", format: "pre"}
                ]},
            {title: "Alignment", items: [
                    {title: "Left", icon: "alignleft", format: "alignleft"},
                    {title: "Center", icon: "aligncenter", format: "aligncenter"},
                    {title: "Right", icon: "alignright", format: "alignright"},
                    {title: "Justify", icon: "alignjustify", format: "alignjustify"}
                ]}
        ],
        image_class_list: [
            {title: 'full-screen', value: 'full_screen'},
            {title: 'left', value: 'left_img'},
            {title: 'right', value: 'right_img'},
        ],
        media_class_list: [
            {title: 'full-screen', value: 'full_screen'},
            {title: 'left', value: 'left_img'},
            {title: 'right', value: 'right_img'},
        ],
        paste_preprocess : function(pl, o) {
            // Content string containing the HTML from the clipboard
            //alert(o.content);
            //o.content = o.content;
        },
        paste_postprocess : function(pl, o) {
            // Content DOM node containing the DOM structure of the clipboard
            //alert(o.node.innerHTML);
            //o.node.innerHTML = o.node.textContent || o.node.innerText || "";
            //o.node.innerHTML = o.node;
        }
    });
</script>
{{--<script>--}}
    {{--function RoxyFileBrowser(field_name, url, type, win) {--}}
        {{--var roxyFileman = "{{ url('/') }}/assest/js/tinymce/fileman/index.html";--}}
        {{--if (roxyFileman.indexOf("?") < 0) {--}}
            {{--roxyFileman += "?type=" + type;--}}
        {{--}--}}
        {{--else {--}}
            {{--roxyFileman += "&type=" + type;--}}
        {{--}--}}
        {{--roxyFileman += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;--}}
        {{--if(tinyMCE.activeEditor.settings.language){--}}
            {{--roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;--}}
        {{--}--}}
        {{--tinyMCE.activeEditor.windowManager.open({--}}
            {{--file: roxyFileman,--}}
            {{--title: 'File Manager',--}}
            {{--width: 850,--}}
            {{--height: 650,--}}
            {{--resizable: "yes",--}}
            {{--plugins: "media",--}}
            {{--inline: "yes",--}}
            {{--close_previous: "no"--}}
        {{--}, {     window: win,     input: field_name    });--}}
        {{--return false;--}}
    {{--}--}}
    {{--tinymce.init({--}}
        {{--selector:'textarea',--}}

        {{--height: 500,--}}
        {{--theme: 'modern',--}}
        {{--valid_elements : '*[*]',--}}
        {{--plugins: [--}}
            {{--'advlist autolink lists link image charmap print preview hr anchor pagebreak',--}}
            {{--'searchreplace wordcount visualblocks visualchars code fullscreen',--}}
            {{--'insertdatetime media nonbreaking save table contextmenu directionality',--}}
            {{--'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'--}}
        {{--],--}}

        {{--toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code | link image',--}}
        {{--toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | fullscreen',--}}
        {{--image_advtab: true,--}}
        {{--templates: [--}}
            {{--{ title: 'Test template 1', content: 'Test 1' },--}}
            {{--{ title: 'Test template 2', content: 'Test 2' }--}}
        {{--],--}}
        {{--content_css: [--}}
            {{--'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',--}}
            {{--'//www.tinymce.com/css/codepen.min.css'--}}
        {{--],--}}
        {{--media_strict: false,--}}
        {{--file_picker_types: 'image',--}}
        {{--file_browser_callback: RoxyFileBrowser,--}}
        {{--paste_remove_spans : true,--}}
        {{--paste_convert_headers_to_strong: true,--}}
        {{--paste_remove_styles: true,--}}
        {{--paste_text_linebreaktype: true,--}}
        {{--paste_strip_class_attributes: "all",--}}
        {{--paste_retain_style_properties: "all",--}}
        {{--paste_auto_cleanup_on_paste: true,--}}
        {{--image_caption: true,--}}
        {{--image_dimensions: false,--}}
        {{--image_advtab: true,--}}
        {{--importcss_append: true,--}}

        {{--importcss_groups: [--}}
            {{--{title: "Table styles", filter: /^(td|tr|table)\./},--}}
            {{--{title: "Block styles", filter: /^(div|p|ul|ol|h1|h2|h3|h4|h5|h6)\./},--}}
            {{--{title: "Image styles", filter: /^(img)\./},--}}
            {{--{title: "Other styles"}--}}
        {{--],--}}
        {{--style_formats: [--}}
            {{--{title: "Headers", items: [--}}
                    {{--{title: "Header 1", format: "h1"},--}}
                    {{--{title: "Header 2", format: "h2"},--}}
                    {{--{title: "Header 3", format: "h3"},--}}
                    {{--{title: "Header 4", format: "h4"},--}}
                    {{--{title: "Header 5", format: "h5"},--}}
                    {{--{title: "Header 6", format: "h6"}--}}
                {{--]},--}}
            {{--{title: "Inline", items: [--}}
                    {{--{title : 'Span', inline : 'span', styles : {color : '#9A6F46'}},--}}
                    {{--{title: "Bold", icon: "bold", format: "bold"},--}}
                    {{--{title: "Italic", icon: "italic", format: "italic"},--}}
                    {{--{title: "Underline", icon: "underline", format: "underline"},--}}
                    {{--{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},--}}
                    {{--{title: "Superscript", icon: "superscript", format: "superscript"},--}}
                    {{--{title: "Subscript", icon: "subscript", format: "subscript"},--}}
                    {{--{title: "Code", icon: "code", format: "code"}--}}
                {{--]},--}}
            {{--{title: "Blocks", items: [--}}
                    {{--{title: "Paragraph", format: "p"},--}}
                    {{--{title: "Div", format: "div"},--}}
                    {{--{title: "Blockquote", format: "blockquote"},--}}
                    {{--{title: "Pre", format: "pre"}--}}
                {{--]},--}}
            {{--{title: "Alignment", items: [--}}
                    {{--{title: "Left", icon: "alignleft", format: "alignleft"},--}}
                    {{--{title: "Center", icon: "aligncenter", format: "aligncenter"},--}}
                    {{--{title: "Right", icon: "alignright", format: "alignright"},--}}
                    {{--{title: "Justify", icon: "alignjustify", format: "alignjustify"}--}}
                {{--]}--}}
        {{--],--}}
        {{--image_class_list: [--}}
            {{--{title: 'full-screen', value: 'full_screen'},--}}
            {{--{title: 'left', value: 'left_img'},--}}
            {{--{title: 'right', value: 'right_img'},--}}
        {{--],--}}
        {{--media_class_list: [--}}
            {{--{title: 'full-screen', value: 'full_screen'},--}}
            {{--{title: 'left', value: 'left_img'},--}}
            {{--{title: 'right', value: 'right_img'},--}}
        {{--],--}}
        {{--paste_preprocess : function(pl, o) {--}}
            {{--// Content string containing the HTML from the clipboard--}}
            {{--//alert(o.content);--}}
            {{--//o.content = o.content;--}}
        {{--},--}}
        {{--paste_postprocess : function(pl, o) {--}}
            {{--// Content DOM node containing the DOM structure of the clipboard--}}
            {{--//alert(o.node.innerHTML);--}}
            {{--//o.node.innerHTML = o.node.textContent || o.node.innerText || "";--}}
            {{--//o.node.innerHTML = o.node;--}}
        {{--}--}}
    {{--});--}}
{{--</script>--}}
@stack('scripts')
</body>
</html>