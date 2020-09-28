@extends('layouts.default', ['title' => 'Contact'])
@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1">
            <h2>Get In Touch</h2>
            <p class="text-muted">If you having trouble with this service <a href="#">ask for help</a></p>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark btn-block">Submit &raquo;</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection