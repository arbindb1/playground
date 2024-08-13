<div>
   <select class="e-select" id="{{ $id }}" name="filter-faculty">
    <option value="Select" disabled {{ empty($filterData)?'selected':'' }}>Select</option>
    @forelse($listAll as $dat)
        <option  value="{{ $dat->name }}" {{ $filterData == $dat->name?'selected' : '' }}>{{ $dat->name }}</option>
    @empty
    No
    @endforelse
   </select>
</div>
