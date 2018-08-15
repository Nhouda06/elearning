@extends('admin.layouts.app')
@section("content")
    <div class="block-header">
        <h2>Add new category</h2>
    </div>
    <form action="{{action("CategoryController@store")}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Titre:</label>
            <input name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea id="description" name="description" class="form-control" rows="10"></textarea>
        </div>
        <input type="submit" value="Confirmer" class="btn btn-primary"></form>


@endsection
