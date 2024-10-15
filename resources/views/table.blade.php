<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container mt-5">
    <div class="row">
        <div class="col-10 m-auto">
            <table class="table table-bordered border-primary">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Start_date</th>
                        <th scope="col">End_date</th>
                        <th scope="col">Status</th>
                        <th scope="col">%Progress</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $tasks)
                        <tr>
                            <td>{{ $tasks->id }}</td>
                            <td>{{ $tasks->Title }}</td>
                            <td>{{ $tasks->description }}</td>
                            <td>{{ $tasks->Start_date }}</td>
                            <td>{{ $tasks->End_date }}</td>
                            <td>{{ $tasks->Status }}</td>
                            <td>{{ $tasks->Progress }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('Edite',['task' =>$tasks->id])}}" class="btn btn-info">
                                        Edite
                                    </a>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteconfirmation{{ $tasks->id }}">
                             Delete
                                      </button>
                                </div>
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="deleteconfirmation{{ $tasks->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
Are You Sure to waant to delete{{ $tasks->Title }}
        </div>
        <div class="modal-footer">

            <form action="{{ route('delete',['task'=>$tasks]) }}" method="POST">
                @csrf
                @method('DELETE')
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
