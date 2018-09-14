@extends('layout.main')

@section('content')
<div class="container">
        <div class="row">
               <div class="jumbotron">
                   <div class="container">
                <h1>Hello, Welcome to my Blog</h1>
                <p class="lead">Thankyou for being a part of my test blog</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
               </div>
               </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>In psychology, an attitude is a psychological construct, it is a mental and emotional entity that inheres in, or characterizes a person. They are complex and an acquired state through experiences. It is an individual's predisposed state of mind regarding a value and it is precipitated through a responsive expression toward a person, place, thing, or event (the attitude object) which in turn influences the individual's thought and action...</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                
                <hr/>
                
                <div class="post">
                    <h3>Post Title</h3>
                    <p>In psychology, an attitude is a psychological construct, it is a mental and emotional entity that inheres in, or characterizes a person. They are complex and an acquired state through experiences. It is an individual's predisposed state of mind regarding a value and it is precipitated through a responsive expression toward a person, place, thing, or event (the attitude object) which in turn influences the individual's thought and action...</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
                
                <hr/>
                
                <div class="post">
                    <h3>Post Title</h3>
                    <p>In psychology, an attitude is a psychological construct, it is a mental and emotional entity that inheres in, or characterizes a person. They are complex and an acquired state through experiences. It is an individual's predisposed state of mind regarding a value and it is precipitated through a responsive expression toward a person, place, thing, or event (the attitude object) which in turn influences the individual's thought and action...</p>
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>

                <br/>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
@endsection
