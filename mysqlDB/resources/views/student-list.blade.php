<div>
    <h1>Student List</h1>
    <table border="1" style="border-collapse:collapse" ;>
        <tr>
            <th>ID</th>
            <th> Student Name</th>
            <th>Email id</th>
            <th>Batch</th>
        </tr>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->batch}}</td>

        </tr>
        @endforeach
    </table>
</div>