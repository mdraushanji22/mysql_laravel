<div>
    <h1>User List And User Data</h1>
    <table border="1" style="border-collapse:collapse;">
        <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Email Id</th>
            <th>phone number</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>

        </tr>
        @endforeach
    </table>
    <h1>User Data From MySQL Database</h1>
    <ul>
        <li>
            <span>Name:</span><span><b>{{$data->name}}</b></span>
        </li>
        <li>
            <span>Email:</span><span><b>{{$data->email}}</b></span>
        </li>
        <li>
            <span>Phone:</span><span><b>{{$data->phone}}</b></span>
        </li>
        <li>
            <span>Adress:</span><span><b> {{$data->address->street}},
                    {{$data->address->suite}},
                    {{$data->address->city}},
                    {{$data->address->zipcode}}</b></span>
        </li>
        <li>
            <span>Company:</span><span><b>
                    {{$data->company->name}},
                    {{$data->company->catchPhrase}},
                    {{$data->company->bs}}</b></span>
        </li>
        <li>
            <span>Website:</span><span><b>{{$data->website}}</b></span>
        </li>
    </ul>
</div>