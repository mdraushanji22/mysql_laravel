<div>
    <h1>Students list</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
            <th>Create Date</th>
            <th>Updated Date</th>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>
            <td>{{$student->created_at}}</td>
            <td>{{$student->updated_at}}</td>
        </tr>
        @endforeach
    </table>
    <br>
    <br>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter name">
    </form>
</div>