@extends('layouts.master')

@push('css')
    <link rel="stylesheet" href="/bimasha.css">
@endpush

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>TODO MANAGER</h2>

    <div class="col-md-12">

        <form class="form-group" action="{{'todoList.save'}}" method="POST">
{{  csrf_field()  }}
            <input class="form-control" type="text" name="name" placeholder="taskname "> <br>
            <textarea class="form-control" name="task" placeholder="details"></textarea><br>
                <input type="submit" name="submit" value="submit">
        </form>

    </div>


@endsection


