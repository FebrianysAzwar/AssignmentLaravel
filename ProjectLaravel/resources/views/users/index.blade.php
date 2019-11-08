<!DOCTYPE html> 
    <head>
    <title>User Message</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1 class="text-center" style="padding-top:2%; padding-bottom:2%;">User - Data </h1>
        <table border="1" class="table table-striped table-light">
        <thead class="thead-dark">
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Message</th>
            <th scope="col"> Delete</th>
        </tr>
        </thead>
        @foreach($myusers as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->lastname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->telpnumber}}</td>
            <td>{{$item->message}}</td>
            <td><a href="{{URL::to('/Delete/id',$item->id)}}">Delete</a></td>
        </tr>
        @endforeach
        </table>
        <br>
        <p class="text-center"><a href="{{URL::to('/Create')}}" class="text-center"><button class="btn btn-dark" width="50px">Insert</button></a></p>
    </div>
    </body>
</html>