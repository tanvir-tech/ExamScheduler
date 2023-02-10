@extends('includes/master')
@section('content')
    <div class="container">



        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Exam Routine
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
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>







    </div>
@endsection
