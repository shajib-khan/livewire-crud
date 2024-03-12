
<div class="mt-5">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <form=" wire:submit.prevent">
            <input class="form-control" type="text" placeholder="Name" wire:model="NameAdd">
        <button class="btn btn-primary my-2" wire:click="add">Submit</button>
        </form>


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($names as $name)
                    <tr>
                        <td>{{ $name->id }}</td>
                        <td>{{ $name->name }}</td>

                        <td>
                            <a wire:navigate href="{{ route('update-crud-name', [ 'id' => $name->id ]) }}" class="btn btn-success">Edit</a>
                            <button class="btn btn-danger"wire:click='erasedata({{ $name->id }})'>Delete</button>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

    </div>

