<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container" style="padding-left: 200px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>adress</th>
                                <th>phone</th>
                                <th>city</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                           $home_cont = DB::table('students')->get();
                         ?>
                            @foreach ($home_cont as $item)
                            <tr>
                                <td><a href="#">{{ $item->id }}</a></td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->adress}}</td>
                                <td>{{ $item->phone}}</td>
                                <td>{{ $item->city}}</td>
                                <td><a href="delete/{{ $item->id }}">Delete</a></td>
                                <td><a href="edit/{{$item->id}}" class="btn btn-primary btn-sm">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





