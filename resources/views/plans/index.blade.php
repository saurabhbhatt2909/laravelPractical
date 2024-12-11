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
    <h1>Plans</h1>
    <a href="{{ route('plan.create') }}">Add Plan</a>

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
            @foreach($plans as $plan)
            <tr>
                <td>{{ $plan->name }}</td>
                <td>{{ $plan->price }}</td>
                <td>
                    <a href="{{ route('plan.edit', $plan)}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('plan.destroy', $plan)}}" method="POST">  
                        @csrf
                        @method('delete')
                        <button name="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
{{ $plans->links() }}
</div>