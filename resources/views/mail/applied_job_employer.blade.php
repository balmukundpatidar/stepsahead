<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<div style="margin-top:0%;width:100%;">
    <a href="#">
        <img src="{{ url('/') }}/assest/logo.png?lgfp=3000"
             style="float: left !important;height: 40px;margin-top: 5px;margin:0;padding:0;" alt="creekrecruit" title="creekrecruit" />
    </a>
</div>
<div style="padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;margin-top:3%;border-top:3px solid #ee0000;">

    <div style="background:#fff;height:50px;float: left;">



    </div>
</div>

<div style="margin-right: -15px;margin-left: -15px;">
    <div style="width:100%;">
        <br/>
        <p>
            Hi Admin,<br/>
            Job Applied By.<br/>
            <br/>
            Username : {{$title}} {{$first_name}} {{$last_name}}<br/>
            <br/>
        </p>

        <table style="text-align: left;">
            <tr>
                <th>Job</th>
                <td>: {{$jobDetails->job_title}}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>: {{$jobDetails->job_salary}}</td>
            </tr>
        </table>
        <br>  <br>
    </div>
</div>

<footer>
    <div style="padding-top:10px;text-align:center;padding-bottom:0;margin-bottom:0">
        <em style="font-size:smaller;">
            This is a notification-only email address. Please do not reply to this message.
        </em>
    </div>

    <div style="padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;margin-top:1%;border-top:3px solid #ee0000;">

        <div style="margin-right:-15px;margin-left:-15px;">

            <div style="width:100%;text-align:center">


                <ul style="padding-left:0;margin-left:-5px;list-style:none;margin:10px 0 0 0;">
                    <li style="display: inline-block;padding-right: 5px;padding-left: 5px;">
                        <span style="font-size: 85%;">©creekreuit.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>

</body>
</html>