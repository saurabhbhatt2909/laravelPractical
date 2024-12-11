<div class="continer">
    <form action="{{ route('plan.store')}}" method="POST">
        @csrf
        Name : <input type="text" name="name" required> </br>
        Price : <input type="number" name="price" required> </br>

        <button type="submit"> Create plan </button>
    </form>
</div>