@extends('layouts.master')
@section('body')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
.slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 15px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #04AA6D;
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #04AA6D;
    cursor: pointer;
}
</style>


<div class="container mt-5  ">
    <div class="row">
        <div class="col-8 m-auto bg-body-tertiary p-3">
            <form action="{{ route('update',['task'=>$task->id]) }}" method="POST">
                @csrf
@method('PUT')
                <input type="text" class="form-control mb-3" id="123" name="Title" value="{{ $task->Title }}" placeholder="Title"
                    required>

                <textarea rows="5" name="description" class="form-control mb-3" value="{{ $task->description }}"  placeholder ="Description" required> 
 </textarea>

                <div class="d-flex justify-content-between ">
                    <div class="col-5 ">
                        <label for="">Start Date</label>
                        <input type="date" placeholder="Start Date" value="{{ $task->Start_date }}" name="Start_date" required
                            class="form-control mb-3 ">
                    </div>
                    <div class="col-5">
                        <label for="">End Date</label>
                        <input type="date" placeholder="Start Date" value="{{ $task->End_date }}" name="End_date" required
                            class="form-control mb-3 ">
                    </div>

                </div>

                <div class="dropdown  ">
                    <select id="most-like" name="Status" class="dropdown   form-control mb-3 input-group p-2" value="{{ $task->Status }}">
                        <option disabled selected value>Select an Status</option>
                        <option value="Pending">Pending</option>
                        <option value=" Paused"> Paused</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
                <div class="slidecontainer">
                    <label for="">Progress</label>
                    <input type="range" min="1" max="100" value="{{ $task->Progress }}" name="Progress"
                        class="slider" id="myRange" required>
                    <p>Value: <span id="demo"></span>%</p>
                </div>
                <button type="submit" class="btn btn-danger">Update</button>

            </form>
        </div>
    </div>
</div>


<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>
</script>


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>