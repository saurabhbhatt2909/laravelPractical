<div class="continer">
    <h1>Plans</h1>
    <a href="{{ route('eligibilitycriteria.create') }}">Add Plan</a>

    <h1>Create Eligibility Criterion</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('eligibilitycriteria.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div>
        <label for="age_less_than">Age Less Than:</label>
        <input type="number" id="age_less_than" name="age_less_than">
    </div>

    <div>
        <label for="age_greater_than">Age Greater Than:</label>
        <input type="number" id="age_greater_than" name="age_greater_than">
    </div>

    <div>
        <label for="last_login_days_ago">Last Login Days Ago:</label>
        <input type="number" id="last_login_days_ago" name="last_login_days_ago">
    </div>

    <div>
        <label for="income_less_than">Income Less Than:</label>
        <input type="number" id="income_less_than" name="income_less_than" step="0.01">
    </div>

    <div>
        <label for="income_greater_than">Income Greater Than:</label>
        <input type="number" id="income_greater_than" name="income_greater_than" step="0.01">
    </div>

    <button type="submit"> Create Criteria</button>
</form>
</div>