@extends('user.layout.app')

@section('links')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
    </style>
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Contact Us</h2>
                            <a href="{{ $contact->link }}" target="_blank">
                                <img src="{{ asset('asset/images/whatsapp.png') }}" height="80px" width="80px"
                                    alt="whatsapp">
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="mailto:{{ $contact->email }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject">
                                </div>
                                <div class="form-group">
                                    <label for="massage">Massage</label>
                                    <textarea name="massage" id="massage" class="form-control" cols="5" rows="5"></textarea>
                                </div>
                                <div class="m-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
