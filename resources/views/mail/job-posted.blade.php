<p>
    Congrats! Your job <strong>{{$job->name}}</strong> is now live on our website.
</p>
<p>
    Check it out: <a href="{{url('/jobs/' . $job->id)}}">{{$job->title}}</a>
</p>


