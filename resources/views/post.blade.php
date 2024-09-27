<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Larvel10 CRUD system
                <a href="/add/post" class="btn btn-success btn-sm float-end">Add New</a>

            </div>
            @if (Session::has('sccuess'))
                <span class="alert alert-sccuess p-2">{{Session::get('sccuess')}}</span>
          
            @endif
            @if (Session::has('fail'))
            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
      
        @endif
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        @if (count($allpost)>0)
                            @foreach ($allpost as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->desciption}}</td>
                                    <td><a href="/edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="/delete/{{$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>
                                
                            @endforeach
                        @else    
                                <tr>
                                    <td colspan="4">No User Found</td>
                                </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>