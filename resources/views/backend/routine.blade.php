@extends('includes/master')
@section('content')
    <div class="container">



        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">
                    Edit Exam Routine
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Faculty</th>
                            <th scope="col">Course</th>
                            <th scope="col">Room</th>
                            <th scope="col">Date</th>
                            <th scope="col">Start-time</th>
                            <th scope="col">End-time</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Math</td>
                            <td>205</td>
                            <td>02/05/2023</td>
                            <td>09.30</td>
                            <td>12.30</td>
                            <td>
                                <button class="btn btn-warning">
                                    Edit
                                </button>
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
        <br>
        <div class="d-flex justify-content-center">
            <a class="btn btn-success" href="/admin/add" role="button">Add Exam</a>
        </div>







    </div>
@endsection
