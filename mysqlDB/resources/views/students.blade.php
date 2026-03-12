<div>
    <h1>Students list</h1>

    <table border="1" style="border-collapse:collapse" ;>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->batch}}</td>

        </tr>
        @endforeach
    </table>
    <br>
    <br>
    <form action="students" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <br>
        <input type="email" name="email" placeholder="Enter email">
        <br>
        <br>
        <input type="text" name="batch" placeholder="Enter batch">
        <br>
        <br>
        <button>Add Students</button>

    </form>
</div>