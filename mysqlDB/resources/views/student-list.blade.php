<div>
    <h1>Student List</h1>
    <table border="1" style="border-collapse:collapse" ;>
        <tr>
            <th>ID</th>
            <th> Student</th>
            <th>Email</th>
            <th>Batch</th>
            <th>Delete Student</th>
            <th>Update Student</th>

        </tr>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->batch}}</td>
            <td><a href="{{'delete/' .$students->id}}">Delete</a></td>
            <td><a href="{{'edit/' .$students->id}}">Edit</a></td>

        </tr>
        @endforeach
    </table>
</div>