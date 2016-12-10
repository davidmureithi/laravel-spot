<header>

</header>
<body>

<div>
    <ul>
        <li><a class="col-lg-1" href="{{url('servi')}}">Service Page</a></li>
    </ul>
</div>
</body>

@foreach( $services as $service)

    <p>{{$service->name}}</p>
    @endforeach