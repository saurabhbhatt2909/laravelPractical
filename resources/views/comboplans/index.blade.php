<style>
    tr{
        border:1px solid #000;
    }
    td{
        border:1px solid #000;
    }
    th{
        border:1px solid #000;
    }
</style>
<div class="continer">
    <h1>Combo Plans</h1>
    <a href="{{ route('comboplan.create') }}">Crete ComboPlan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comboplans as $comboplan)
            <tr>
                <td>{{ $comboplan->name }}</td>
                <td>{{ $comboplan->price }}</td>
                <td>
                    <a href="{{ route('comboplan.edit', $comboplan)}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('comboplan.destroy', $comboplan)}}" method="POST">  
                        @csrf
                        @method('delete')
                        <button name="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>

<div> {{ $comboplans->links() }} </div>
</div>