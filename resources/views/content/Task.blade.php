@extends('layouts.master')
@section('body')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
    </head>

    <body>
        <div class="container mt-5  ">
            <div class="row">
                <div class="col-8 m-auto bg-body-tertiary p-4 border border-primary rounded shadow-sm">
                    <form action="/store" method="POST">
                        @csrf

                        <div>
                            <label for="">Title</label>
                            <input type="text" class="form-control mb-3" id="123" name="Title"
                                placeholder="Title" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Add Description</label>
                            <textarea rows="5" name="description" class="form-control mb-3" placeholder="Describe yourself here..." required> 
                    </textarea>
                        </div>



                        <div class="d-flex justify-content-between ">
                            <div class="col-5 ">
                                <label for="">Start Date</label>
                                <input type="date" placeholder="Start Date" name="Start_date" required
                                    class="form-control mb-3 ">
                            </div>
                            <div class="col-5">
                                <label for="">End Date</label>
                                <input type="date" placeholder="Start Date" name="End_date" required
                                    class="form-control mb-3 ">
                            </div>
                        </div>
                        <div class="dropdown  ">
                            <select id="most-like" name="Status" class="dropdown  form-control mb-3 input-group p-2">
                                <option disabled selected value>Select an Status</option>
                                <option value="Pending">Pending</option>
                                <option value=" Paused"> Paused</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                        <div class="slidecontainer">
                            <label for="">Progress</label>
                            <input type="range" min="1" max="100" value="50" name="Progress"
                                class="slider" id="myRange" required>
                            <p>Value: <span id="demo"></span>%</p>
                        </div>
                        <button type="submit" class="btn btn-danger">save</button>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    </body>

    </html>
@endsection
