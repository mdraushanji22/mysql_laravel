<div>
    <h1>Students List</h1>
    <form action="search" method="get">
        <input type="text" name="search" placeholder="Enter search name" value="{{@$search}}" />
        <button class="btn">search</button>
    </form>
    <form action="" method="post">
        @csrf
        <button>Delete</button>
        <br>
        <table border="1" style="border-collapse:collapse" ;>
            <tr>
                <th>Select</th>
                <th>ID</th>
                <th> Student</th>
                <th>Email</th>
                <th>Batch</th>
                <th>Delete Student</th>
                <th>Update Student</th>

            </tr>
            @foreach($student as $students)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$students->id}}"></td>
                <td>{{$students->id}}</td>
                <td>{{$students->name}}</td>
                <td>{{$students->email}}</td>
                <td>{{$students->batch}}</td>
                <td><a href="{{'delete/' .$students->id}}">Delete</a></td>
                <td><a href="{{'edit/' .$students->id}}">Edit</a></td>

            </tr>
            @endforeach
        </table>
    </form>
    <br>
    <br>
    {{$student->links()}}
</div>
<style>
    .w-5.h-5 {
        width: 20px;
    }

    h1 {
        color: green;
    }

    .btn {
        color: green;
        background-color: white;
        padding: 2px;
        border: none;
        border: 1px solid black;
        border-radius: 2px;
    }
</style>