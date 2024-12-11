
<div class="continer">

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

<form action="{{ route('eligibilitycriteria.update',$eligibilitycriterion->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $eligibilitycriterion->name ?? '') }}" required>
    </div>

    <div>
        <label for="age_less_than">Age Less Than:</label>
        <input type="number" id="age_less_than" name="age_less_than" value="{{ old('age_less_than', $eligibilitycriterion->age_less_than ?? '') }}">
    </div>

    <div>
        <label for="age_greater_than">Age Greater Than:</label>
        <input type="number" id="age_greater_than" name="age_greater_than" value="{{ old('age_greater_than', $eligibilitycriterion->age_greater_than ?? '') }}">
    </div>

    <div>
        <label for="last_login_days_ago">Last Login Days Ago:</label>
        <input type="number" id="last_login_days_ago" name="last_login_days_ago" value="{{ old('last_login_days_ago', $eligibilitycriterion->last_login_days_ago ?? '') }}">
    </div>

    <div>
        <label for="income_less_than">Income Less Than:</label>
        <input type="number" id="income_less_than" name="income_less_than" step="0.01" value="{{ old('income_less_than', $eligibilitycriterion->income_less_than ?? '') }}">
    </div>

    <div>
        <label for="income_greater_than">Income Greater Than:</label>
        <input type="number" id="income_greater_than" name="income_greater_than" step="0.01" value="{{ old('income_greater_than', $eligibilitycriterion->income_greater_than ?? '') }}">
    </div>

    <button type="submit">Update Criteria</button>
</form>
</div>