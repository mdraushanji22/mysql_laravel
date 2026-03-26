<div>
    <h1>Update Student Data</h1>
    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}" />
        <br>
        <br>
        <input type="email" name="email" value="{{$data->email}}" />
        <br>
        <br>
        <input type="text" name="batch" value="{{$data->batch}}" />
        <br>
        <br>
        <button>Update</button>
        <a href="/list">Cancel</a>
    </form>
</div>