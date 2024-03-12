<div class="mx-3">
    <h4>Edit Name</h4>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="updateName">

            <input class="form-control" type="text" placeholder="Name" wire:model="name">
            <button class="btn btn-primary my-2">Update</button>


        </form>{{-- The best athlete wants his opponent at his best. --}}
</div>
