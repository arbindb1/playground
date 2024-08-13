
    <div class="e-form-div" id = "{{ $id }}">
        <form class="e-form" action="{{ $route }}" method="POST">
            @csrf
            @method('POST')
            <input class="e-form-input" type="text" name="name" placeholder="Enter student name">
            <br>
            <select class="e-select" id="studentDropDown" name="faculty">
                <option value="Select" disabled>Select</option>
                @forelse($facultylist as $dat)
                    <option value="{{ $dat->name }}" {{ $id = $dat->id }}>{{ $dat->name }}</option>
                @empty
                @endforelse
            </select>
            <br>
            <input class="e-form-input-button" type="submit" value="{{ $value }}">
        </form>
    </div>
    </script>
