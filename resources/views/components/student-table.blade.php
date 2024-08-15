<div id="{{ $id }}" class="p-4">
    <table class="border-2 w-8/12">
        <tr class="border-bottom">
            <th class="td-padding border-right">id</th>
            <th class="td-padding border-right">Name</th>
            <th class="td-padding border-right">Faculty</th>
            <th class="td-padding border-right">Action</th>
        </tr>
        @forelse($studentlist as $dat)
            <tr class="border-bottom">
                <td class="td-padding border-right">{{ $dat->id }}</td>
                <td class="td-padding border-right">{{ $dat->name }}</td>
                <td class="td-padding border-right">{{ $dat->fc->name ?? 'Not found' }}</td>
                <td class="td-padding border-right">
                    <form  action="{{ route('student.delete', ['id' => $dat->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="e-button-delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <p>No data found</p>
        @endforelse



    </table>
</div>
