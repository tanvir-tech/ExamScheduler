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
                            <th scope="col" colspan="2">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
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
                        </tr> --}}
                        @foreach ($schedules as $schedule)
                            <tr>
                                <th scope="row">{{ $schedule['id'] }}</th>
                                <td>{{ $schedule['faculty'] }}</td>
                                <td>{{ $schedule['course'] }}</td>
                                <td>{{ $schedule['room'] }}</td>
                                <td>{{ $schedule['date'] }}</td>
                                <td>{{ $schedule['start'] }}</td>
                                <td>{{ $schedule['end'] }}</td>
                                <td>
                                    <button class="btn btn-warning">
                                        Edit
                                    </button>

                                </td>
                                <td>
                                    <form action="{{ route('schedule.destroy', ['schedule' => $schedule->id]) }}"
                                        method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
