<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
    <body>
        <form action="{{URL::to('/adduser')}}" method="POST" id="usform">
        <center>
        <h1 style="padding-top:3%;"><b>Contact Us</b></h1><br>
            {!! csrf_field() !!}
                <table id="center">
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="firstname"></td>
                        <td><input type="text" name="lastname"></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td>Tel. Number</td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email"></td>
                        <td><input type="text" name="telpnumber"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Message</td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea class="form-control" cols="50" rows="10" name="message" placeholder="Berikan komentar anda"></textarea></td>
                    </tr>
                </table>
            <input type="submit" id="button" value="Send Message">
        </center>
        </form> 
    </body>
</html>

<html>
    <head>
        <title> </title>
    </head>
    <body>
    </body>
</html>