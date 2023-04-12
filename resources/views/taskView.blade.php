<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <a href="{{url('/store')}}">
    <button class="btn btn-primary m-3 mb-5">
        Add Task
    </button>
    </a>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($task as $tasks)

            <tr>
                <td scope="row">{{$tasks->name}}</td>
                <td>{{$tasks->description}}</td>

                <td>

                    {{$tasks->completed == 1 ? 'completed' : 'not completed'}}
                </td>
                <td>
                    <a href="{{url('/update')}}/{{$tasks->id}}" role="button"><button class="btn btn-success">
                            Change status
                    </button></a>
                </td>
                <td>
                    <a href="{{url('/delete')}}/{{$tasks->id}}" role="button"><button class="btn btn-danger">
                            Delete
                    </button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </body>
</html>
