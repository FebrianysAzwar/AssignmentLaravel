<html>
    <head>
        <title> </title>
    </head>
    <body>
    <center>
        <h1><b>Contact Us</b></h1><br>
            <form action="{{URL::to('/addcomment')}}" method="POST">
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
            </form>
            <input type="submit" id="button" value="Send Message">
        </center>
    </body>
</html>