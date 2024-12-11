<div class="continer">
    <form action="{{ route('plan.update', $plan->id)}}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" value="{{ $plan->name}}" required>
        <input type="number" name="price" value="{{ $plan->price}}" required>

        <button type="submit"> Update plan </button>
    </form>
</div>