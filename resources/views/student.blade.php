<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Student management system</title>
  </head>
  <body>
  @include("navbar")

  <div class="row header-container justify-content-center">
    <div class="header">
      <h1>Student management system</h1>
    </div>
  </div>

  @if($layout == 'index')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5"></section>
        </div>
      </div>

  @elseif ($layout == 'create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col">

            <div class="card mb-3">
              <img src="https://img.jakpost.net/c/2019/03/02/2019_03_02_66706_1551461528._large.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Enter the new student's information</h5>
                <form action="{{ url('/store') }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label>CNE</label>
                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                  </div>

                  <div class="form-group">
                    <label>First name</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                  </div>

                  <div class="form-group">
                    <label>Second name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter second name">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="text" class="form-control" placeholder="Enter the age">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                  </div>

                  <input type="submit" class="btn btn-info" value="Save">
                  <input type="reset" class="btn btn-warning" value="Reset">

                </form>
              </div>
            </div>


          </section>
        </div>
      </div>

  @elseif ($layout =='show')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col">
            @include("studentslist")
          </section>
          <section class="col"></section>
        </div>
      </div>

  @elseif ($layout =='edit')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">
            <div class="card mb-3">
              <img src="https://img.jakpost.net/c/2019/03/02/2019_03_02_66706_1551461528._large.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Update {{$student->firstname}}'s information</h5>
                <form action="{{ url('/update/'.$student->id) }}" method="post">
                  @csrf
                  <div class="form-group">
                    <label>CNE</label>
                    <input value= "{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                  </div>

                  <div class="form-group">
                    <label>First name</label>
                    <input value= "{{ $student->firstname }}" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                  </div>

                  <div class="form-group">
                    <label>Second name</label>
                    <input value= "{{ $student->secondname }}" name="secondName" type="text" class="form-control" placeholder="Enter second name">
                  </div>

                  <div class="form-group">
                    <label>Age</label>
                    <input value= "{{ $student->age }}" name="age" type="text" class="form-control" placeholder="Enter the age">
                  </div>

                  <div class="form-group">
                    <label>Speciality</label>
                    <input value= "{{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                  </div>

                  <input type="submit" class="btn btn-info" value="Update">
                  <input type="reset" class="btn btn-warning" value="Reset">

                </form>
              </div>
            </div>

          </section>
        </div>
      </div>

  @endif

  <footer>

  </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>
