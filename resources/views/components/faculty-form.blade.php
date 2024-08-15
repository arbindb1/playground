<div class="e-form-div">
    <div id = "{{ $id }}" class="{{ $class }}">
        <form class="e-form" action="{{ $route }}" method="POST">
            @csrf
            @method('post')
            <input class="e-form-input" type="text" name="name" placeholder="Enter the faculty">
            <br>
            <input class="e-form-input-button" type="submit" value="{{ $value }}">
        </form>
    </div>
</div>
