<?php
/**
 * Created by PhpStorm.
 * User: Anamika
 * Date: 02-06-2018
 * Time: 09:41
 */
?>
<p>
    You have received a new message from your website contact form.
</p>
<p>
    Here are the details:
</p>
<ul>
    <li>Name: <strong> {{ $first_name }} </strong></li>
    <li>Email: <strong>{{ $email }}</strong></li>
    <li>Phone: <strong>{{ $mobile }}</strong></li>
    <li>Enquiry: <strong>{{ $enquiry }}</strong></li>

</ul>
<hr>
{{--<p>--}}
    {{--@foreach ($messageLines as $messageLine)--}}
        {{--{{ $messageLine }}<br>--}}
    {{--@endforeach--}}
{{--</p>--}}
<p>
    {{$messageLines}}
</p>
<hr>
