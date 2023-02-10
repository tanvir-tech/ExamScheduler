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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                            <tr>
                                <th scope="row">{{ $schedule['id'] }}</th>
                                <td>{{ $schedule['faculty'] }}</td>
                                <td>{{ $schedule['course'] }}</td>
                                <td>{{ $schedule['room'] }}</td>
                                <td>{{ $schedule['date'] }}</td>
                                <td>{{ $schedule['start'] }}</td>
                                <td>{{ $schedule['end'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>







    </div>
@endsection
