@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    {{--@include('commom.errors')--}}

                    <form action="{{url('task')}}" class="form-horizontal" method="POST">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="task" class="col-sm-3 control-label">Task</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="task" id="task-name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-plus"></i>
                                    Add Task
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection