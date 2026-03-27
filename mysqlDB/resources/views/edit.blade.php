<div>
    <h1>Update Student Data</h1>

    <form action="{{ url('edit-student/'.$data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{$data->name}}" />
        <br><br>

        <input type="email" name="email" value="{{$data->email}}" />
        <br><br>

        <input type="text" name="batch" value="{{$data->batch}}" />
        <br><br>

        <button>Update</button>
        <a href="/list">Cancel</a>
    </form>
    </form>
</div>