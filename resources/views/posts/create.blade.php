@extends('layout')

<div class="container">
    @section('content')
        <h3 style="text-align: center;">Yeey this is where engineers will create their blogs.</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="POST" action="/posts">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title Of the blog</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter the title of your blog">
                    </div>
                    <div class="form-group">
                        <label for="content">Write your blog here</label>
                        <textarea class="form-control" id="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>

    @endsection
</div>
