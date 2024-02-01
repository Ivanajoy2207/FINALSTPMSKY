@extends('app')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@section('content')
    <div>
    </div>
    </nav>
    <div class="container">
        <div class="information">
            <div class="detail-information">
                <div class="title">
                    <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t1.6435-9/123713676_155440526247132_2839898538364892179_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=810d5f&_nc_ohc=3E8XePZLwdUAX90SWBn&_nc_ht=scontent-cgk1-1.xx&oh=00_AfCZU-CarrYlE3SToxjbQwNsuLs1iGQpnqDtBd_q6BugVg&oe=65E1E4E3"
                        class="img-fluid rounded-circle">
                    <h1>{{ auth()->user()->name }}'s Profile</h1>
                </div>
                <p><strong>Group Name:</strong> {{ auth()->user()->groupname }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Leader Name:</strong> {{ auth()->user()->leadername }}</p>
                <p><strong>WA Number:</strong> {{ auth()->user()->wanumber }}</p>
                <p><strong>Line ID:</strong> {{ auth()->user()->lineid }}</p>
                <p><strong>GitHub ID:</strong> {{ auth()->user()->githubid }}</p>
                <p><strong>Birthplace:</strong> {{ auth()->user()->birthplace }}</p>
                <p><strong>Birthdate:</strong> {{ auth()->user()->birthdate }}</p>
            </div>
            <div class="images-right">
                <p><strong>CV:</strong></p>
                <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t1.6435-9/123713676_155440526247132_2839898538364892179_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=810d5f&_nc_ohc=3E8XePZLwdUAX90SWBn&_nc_ht=scontent-cgk1-1.xx&oh=00_AfCZU-CarrYlE3SToxjbQwNsuLs1iGQpnqDtBd_q6BugVg&oe=65E1E4E3"
                    alt="CV Image" class="img-fluid">

                <p><strong>Flazz:</strong></p>
                <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t1.6435-9/123713676_155440526247132_2839898538364892179_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=810d5f&_nc_ohc=3E8XePZLwdUAX90SWBn&_nc_ht=scontent-cgk1-1.xx&oh=00_AfCZU-CarrYlE3SToxjbQwNsuLs1iGQpnqDtBd_q6BugVg&oe=65E1E4E3"
                    alt="Flazz Image" class="img-fluid">

                <p><strong>Non-Binusian ID:</strong></p>
                <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t1.6435-9/123713676_155440526247132_2839898538364892179_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=810d5f&_nc_ohc=3E8XePZLwdUAX90SWBn&_nc_ht=scontent-cgk1-1.xx&oh=00_AfCZU-CarrYlE3SToxjbQwNsuLs1iGQpnqDtBd_q6BugVg&oe=65E1E4E3"
                    alt="Non-Binusian ID Image" class="img-fluid">
            </div>
        </div>
    </div>
    </div>
@endsection
