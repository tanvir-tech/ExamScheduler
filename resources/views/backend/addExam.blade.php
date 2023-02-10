@extends('includes/master')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>
                    Add a new schedule
                </h1>
            </div>
            <div class="card-body">
                <form class="row">
                    <div class="col-md-6">
                        <label class="form-label">Faculty</label>
                        <input class="form-control" name="faculty">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Course</label>
                        <input class="form-control" name="course">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Room</label>
                        <input class="form-control" name="room">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Start-time</label>
                        <input type="time" class="form-control" name="start">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">End-time</label>
                        <input type="time" class="form-control" name="end">
                    </div>


                    <br><br><br>


                    <div class="col-md-6 m-2">
                        <button type="submit" class="btn btn-primary">Add Exam</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
