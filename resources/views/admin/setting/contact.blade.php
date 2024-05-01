@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-top">
                            <h3 style="text-align: center;">Contact Us Setting</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('Admin.Update.Contact', $contact->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="link" class="form-label">Whatsapp Link</label>
                                    <input type="text" name="link" id="link" class="form-control"
                                        value="{{ $contact->link }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        value="{{ $contact->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="number" class="form-label">Number</label>
                                    <input type="text" name="number" id="number" class="form-control"
                                        value="{{ $contact->number }}">
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
