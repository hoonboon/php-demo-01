@extends('layouts.app')

@section('content')
    <h3 class="text-center">{{$todo->title}}</h3>
    <textarea rows="4" class="form-control" readonly>{{ $todo->body }}</textarea>
    <br>
    <div class="d-flex justify-content-center">
        <a href="{{route('todos.edit',$todo->id)}}" class="btn btn-primary">Edit</a>
        &nbsp;
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal">Delete</a>
    </div>
    <div class="clearfix"></div>
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Todo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You are about to delete current record. Please Confirm to proceed.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="document.querySelector('#delete-form').submit()">Confirm</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        </div>
    </div>
    <form method="POST" id="delete-form" action="{{route('todos.destroy',$todo->id)}}">
        @csrf
        @method('DELETE')
    </form>
@endsection