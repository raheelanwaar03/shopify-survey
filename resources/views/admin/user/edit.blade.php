@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Edit User</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.User', $user->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="form-label">User Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">User Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="balance" class="form-label">User Balance</label>
                                    <input type="text" name="balance" id="balance" class="form-control"
                                        value="{{ $user->balance }}">
                                </div>
                                <div class="form-group">
                                    <label for="level" class="form-label">User Level</label>
                                    <input type="text" name="level" id="level" class="form-control"
                                        value="{{ $user->level }}">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Change Password of {{ $user->name }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Password', $user->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="password" class="form-label">User Password</label>
                                    <input type="text" name="password" id="password" class="form-control"
                                        value="{{ $user->password }}">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
