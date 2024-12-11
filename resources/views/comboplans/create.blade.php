<div class="continer">
    <form action="{{ route('comboplan.store')}}" method="POST">
        @csrf
        <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
    </div>
    <div>
        <label for="plans_ids">Select Plans:</label>
        <select id="plans_ids" name="plans_ids[]" multiple>
            @foreach($plans as $plan)
                <option value="{{ $plan->id }}" {{ isset($selectedPlans) && in_array($plan->id, $selectedPlans) ? 'selected' : '' }}>
                    {{ $plan->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit">Create Comboplan</button>
    </form>
</div>




    

    

    