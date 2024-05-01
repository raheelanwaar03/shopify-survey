@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Level Setting</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Level', $level->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="level1" class="form-label">Level 1</label>
                                    <input type="text" name="level1" id="level1" class="form-control"
                                        value="{{ $level->level1 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level2" class="form-label">Level 2</label>
                                    <input type="text" name="level2" id="level2" class="form-control"
                                        value="{{ $level->level2 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level3" class="form-label">Level 3</label>
                                    <input type="text" name="level3" id="level3" class="form-control"
                                        value="{{ $level->level3 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level4" class="form-label">Level 4</label>
                                    <input type="text" name="level4" id="level4" class="form-control"
                                        value="{{ $level->level4 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level5" class="form-label">Level 5</label>
                                    <input type="text" name="level5" id="level5" class="form-control"
                                        value="{{ $level->level5 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level6" class="form-label">Level 6</label>
                                    <input type="text" name="level6" id="level6" class="form-control"
                                        value="{{ $level->level6 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level7" class="form-label">Level 7</label>
                                    <input type="text" name="level7" id="level7" class="form-control"
                                        value="{{ $level->level7 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level8" class="form-label">Level 8</label>
                                    <input type="text" name="level8" id="level8" class="form-control"
                                        value="{{ $level->level8 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level9" class="form-label">Level 9</label>
                                    <input type="text" name="level9" id="level9" class="form-control"
                                        value="{{ $level->level9 }}">
                                </div>
                                <div class="form-group">
                                    <label for="level10" class="form-label">Level 10</label>
                                    <input type="text" name="level10" id="level10" class="form-control"
                                        value="{{ $level->level10 }}">
                                </div>
                                <div class="m-3">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
