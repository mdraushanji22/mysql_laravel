<div>
    <h1>Update Student Data</h1>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" value="{{$data->name}}" />
        <br>
        <br>
        <input type="email" name="email" value="{{$data->email}}" />
        <br>
        <br>
        <input type="text" name="batch" value="{{$data->batch}}" />


    </form>
</div>