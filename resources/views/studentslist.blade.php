
<div class="card mb-3">
  <img src="https://www.schooleducationgateway.eu/files/jpg11/equityinschools.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">Here you can find all information about students in the system</p>

    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">CNE</th>
          <th scope="col">First name</th>
          <th scope="col">Second name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
        <tr>
          <td>{{ $student->cne }}</td>
          <td>{{ $student->firstname }}</td>
          <td>{{ $student->secondname }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->speciality }}</td>
          <td>
            <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ url('/destroy/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>


          </td>

        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
