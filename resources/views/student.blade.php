<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Student Management System</title>
</head>
<body>
@include("navbar")  
 @if($layout == 'index')  
  <div class="container-fluid mt-4">
    <div class="row">
        <section class="col-md-5">
            @include("studentslist")
        </section>
        <section class="col">

        </section>
    </div>
  </div>
 @elseif($layout == 'create')
 <div class="container-fluid mt-4">
    <div class="row">
        <section class="col">
            @include("studentslist")
        </section>
        <section class="col">
            <form action="{{ url('/store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                    </input>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input name="firstname" type="text" class="form-control" placeholder="Enter first name">
                    </input>
                </div>
                <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondname" type="text" class="form-control" placeholder="Enter second name">
                    </input>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="number" class="form-control" placeholder="Enter age">
                    </input>
                </div>
                <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                    </input>
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </section>
    </div>
  </div>
 @elseif($layout == 'show')
 <div class="container-fluid mt-4">
    <div class="row">
        <section class="col">
            @include("studentslist")
        </section>
        <section class="col">
             
        </section>
    </div>
  </div>
 @elseif($layout == 'edit')
 <div class="container-fluid mt-4">
    <div class="row">
        <section class="col-md-7">
            @include("studentslist")
        </section>
        <section class="col-md-5">
        <form action="{{ url('/update/'.$student->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input value="{{ $student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                    </input>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input value="{{ $student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter first name">
                    </input>
                </div>
                <div class="form-group">
                    <label>Second Name</label>
                    <input value="{{ $student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter second name">
                    </input>
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input value="{{ $student->age}}" name="age" type="number" class="form-control" placeholder="Enter age">
                    </input>
                </div>
                <div class="form-group">
                    <label>Speciality</label>
                    <input value="{{ $student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                    </input>
                </div>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </section>
    </div>
  </div>
 @endif
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>