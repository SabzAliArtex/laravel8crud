@section('content')


<style>
	#cover {
    background: #222 url('https://unsplash.it/1920/1080/?random') center center no-repeat;
    background-size: cover;
    height: 100%;
    text-align: center;
    display: flex;
    align-items: center;
    position: relative;
}

#cover-caption {
    width: 100%;
    position: relative;
    z-index: 1;
}
form{
	width:50%;
	margin:auto;
}

/* only used for background overlay not needed for centering */
form:before {
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
    z-index: -1;
    border-radius: 10px;
}
.form-group.mb-3 {
	text-align: left;
}
label {
	color:white;
}

</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<section id="cover" class="min-vh-100">
	@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
    <div id="cover-caption">
		<form action="{{ url('update-student/'.$student->id) }}" method="POST">
            @csrf
                 @method('PUT')
            <div class="form-group mb-3">
                <label for="">Student Name</label>
                <input type="text" name="name" value="{{$student->name}}" class="form-control">
            </div>
            <div class="form-group mb-3">
               <label for="">Student adress</label>
                <input type="text" name="adress" value="{{$student->adress}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Student phone</label>
                <input type="text" name="phone"value="{{$student->phone}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Student city</label>
                <input type="text" name="city"value="{{$student->city}}" class="form-control">
            </div>
            <div class="form-group mb-3">
               <button type="submit" class="btn btn-primary">Save Student</button>
            </div>
        </form>
    </div>
</section>