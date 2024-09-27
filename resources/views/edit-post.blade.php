<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit  User</div>
                @if (Session::has('fail'))
                      <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
                    
                @endif
            <div class="card-body">
                <form action="{{route('EditUser')}}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" id="" value="{{$post->id ?? 'no id'}}">
                
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Title</label>
                            <input type="text"name="title" class="form-control" value="{{$post->title ?? 'no title'}}" id="formGroupExampleInput" placeholder="Enter Title">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Description</label>
                            <input type="text" name="desciption" class="form-control" value="{{$post->desciption ?? 'no descption'}}" id="formGroupExampleInput2" placeholder="Enter Description">
                            @error('desciption')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>