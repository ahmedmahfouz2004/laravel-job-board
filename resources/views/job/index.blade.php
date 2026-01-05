<div>
    <h1>Job Board</h1>
    <h2>My Name Is: {{$name}}</h2>

    @foreach($jobs as $job)
        <div> {{$job['title']}} : {{$job['salary']}}</div>
    @endforeach
</div>
