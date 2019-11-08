<html>
    <head>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
    </head>
    <body>
        <h1>Contact Us</h1><br>

        <form action="{{URL::to('/adduser')}}" method="POST" id="usform">
            {!! csrf_field() !!}
            <label>FirstName : </label><input type="text" name="firstname"><br>
            <label>LastName : </label><input type="text" name="lastname"><br>
            <label>Email : </label><input type="email" name="email"><br>
            <label>Telp Number : </label><input type="text" name="telpnumber"><br>
            <label>Message : </label><br><textarea rows="4" cols="50" name="message" placeholder="Berikan Komentar Anda"></textarea><br>
            <input type="submit" value="Send Message">                    
        </form> 
    </body>
</html>