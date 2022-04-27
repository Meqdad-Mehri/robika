<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>Description</th>
                                   <th>Price</th>
                                   <th>Discount</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $pro)
                                <tr>
                                    <td>{{$pro->name}}</td>
                                    <td>{{$pro->description}}</td>
                                    <td>{{$pro->price}}</td>
                                    <td>{{$pro->discount}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$pro->links()}}
                    </div>
                </div>
            </div>
</body>
</html>