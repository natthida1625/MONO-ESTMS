@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post title</h3>
                <p>Title description, October 4, 2018</p>
                <div><img href="#" src="{{ asset('asset/img/') }}"></div>
                <p>In psychology, an attitude is a psychological construct, it is a mental and emotional entity that inheres in, or characterizes a person. They are complex and an acquired state through experiences. It is an individual's predisposed state of mind regarding a value and it is precipitated through a responsive expression toward a person, place, thing, or event (the attitude object) which in turn influences the individual's thought and action...</p>
                <a href="{{ action('PagesController@news')}}" class="btn btn-primary">Read more</a>

            </div>                
            <hr/>                
            <div class="post">
                <h3>Post title</h3>
                <p>Title description, October 7, 2018</p>
                <div><img href="#" src="{{ asset('asset/img/') }}"></div>
                <p>In psychology, an attitude is a psychological construct, it is a mental and emotional entity that inheres in, or characterizes a person. They are complex and an acquired state through experiences. It is an individual's predisposed state of mind regarding a value and it is precipitated through a responsive expression toward a person, place, thing, or event (the attitude object) which in turn influences the individual's thought and action...</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>                
            <hr/>                
            <div class="post">
                <h3>Post title</h3>
                <p>Title description, October 7, 2018</p>
                <div><img href="#" src="{{ asset('asset/img/') }}"></div>
                <p>In psychology, an attitude is a psychological construct, it is a mental and emotional entity that inheres in, or characterizes a person. They are complex and an acquired state through experiences. It is an individual's predisposed state of mind regarding a value and it is precipitated through a responsive expression toward a person, place, thing, or event (the attitude object) which in turn influences the individual's thought and action...</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
            <br/>
        </div>
    </div>
</div>

@endsection