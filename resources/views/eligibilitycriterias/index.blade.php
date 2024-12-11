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
<h1>Eligibility Criteria</h1>
<a href="{{ route('eligibilitycriteria.create') }}" class="btn btn-primary">Create New Criteria</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age Less Than</th>
            <th>Age Greater Than</th>
            <th>Last Login Days Ago</th>
            <th>Income Less Than</th>
            <th>Income Greater Than</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($criteria as $criterion)
        <tr>
            <td>{{ $criterion->name }}</td>
            <td>{{ $criterion->age_less_than ?? 'N/A' }}</td>
            <td>{{ $criterion->age_greater_than ?? 'N/A' }}</td>
            <td>{{ $criterion->last_login_days_ago ?? 'N/A' }}</td>
            <td>{{ $criterion->income_less_than ?? 'N/A' }}</td>
            <td>{{ $criterion->income_greater_than ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('eligibilitycriteria.edit', $criterion) }}">Edit</a>
                <form action="{{ route('eligibilitycriteria.destroy', $criterion) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7">No eligibility criteria found.</td></tr>
        @endforelse
    </tbody>
</table>
{{ $criteria->links() }}