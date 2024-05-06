@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Add Task</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Store.Task') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="form-label">Task Title</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Task Title">
                                </div>
                                <div class="form-group">
                                    <label for="des" class="form-label">Task Description</label>
                                    <textarea name="des" id="des" cols="5" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="invest" class="form-label">Earning</label>
                                    <input type="number" name="earning" id="invest" class="form-control"
                                        placeholder="Task Earning which will users get" step="0.00001">
                                </div>
                                <div class="form-group">
                                    <label for="plan_name" class="form-label">Select Plan</label>
                                    <select name="plan" id="plan_name" class="form-control">
                                        @foreach ($plan as $item)
                                            <option value="{{ $item->plan_name }}">{{ $item->plan_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="level" class="form-label">Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="level 1">Level 1</option>
                                        <option value="level 2">Level 2</option>
                                        <option value="level 3">Level 3</option>
                                        <option value="level 4">Level 4</option>
                                        <option value="level 5">Level 5</option>
                                        <option value="level 6">Level 6</option>
                                        <option value="level 7">Level 7</option>
                                        <option value="level 8">Level 8</option>
                                        <option value="level 9">Level 9</option>
                                        <option value="level 10">Level 10</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="text" name="link" id="link" placeholder="Enter Product Link" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="profit" class="form-label">Photo</label>
                                    <input type="file" name="photo" id="Profit" class="form-control">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
