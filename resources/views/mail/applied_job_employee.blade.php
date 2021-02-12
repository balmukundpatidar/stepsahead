<html>

<body>

<div align="center">

    <div style="max-width: 680px; min-width: 500px; border: 2px solid #e3e3e3; border-radius:5px; margin-top: 20px">

        <div>

            <img src="{{ url('/') }}/assest/logo.png" width="250" alt="Creekrecruit" border="0"  />

        </div>

        <div  style="background-color: #fbfcfd; border-top: thick double #cccccc; text-align: left;">

            <div style="margin: 30px;">

                <p>

                    Dear {{$title}}  {{$last_name}},<br> <br>

                    Thank you so much for your registration and/or application on our website. Please log into your account and complete your profile. <a href="https://www.creekrecruit.com/public/my-application" target="_blank">https://www.creekrecruit.com/public/my-application</a>

<br> <br>

                    Here are your job details:<br><br>

                </p>



                <table style="text-align: left;">

                    <tr>

                        <th>Job</th>

                        <td>: {{$job_title}}</td>

                    </tr>

                    <tr>

                        <th>Salary</th>

                        <td>: {{$job_salary}}</td>

                    </tr>

                </table>

                <br>  <br>



                <div style="text-align: Right;">

                    Creekrecruit

                </div>

            </div>

        </div>

    </div>

</div>

<center><?php echo date('Y'); ?> © Creekrecruit ALL Rights Reserved.</center>

</body>

</html>

