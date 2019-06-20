@extends('adminpanel.partials.dashboard')
@section('content')
    <div class="container">
        <form action="{{route('posts.store')}}" method="POST" style="margin: 2%">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="category">Select Category:</label>
                        <select class="form-control" id="category" name="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <small style="color: red; display:{{$errors->has('title')? '' : 'none'}}"> This filed is required</small>
                        <input type="text"  name="title" class="form-control" id="Title" placeholder="Post Title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <small style="color: red; display:{{$errors->has('description')? '' : 'none'}}"> This filed is required</small>
                        <textarea class="form-control" name="description" rows="3" id="description"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="details">Details:</label>
                        <small style="color: red; display:{{$errors->has('details')? '' : 'none'}}"> This filed is required</small>
                        <textarea class="form-control" rows="5" name="details" id="details"></textarea>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection