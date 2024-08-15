<!--blade component-->
<div id="{{ $id }}" class="{{ $class }} p-4">
    <table class="border-2 w-8/12">
        <tr class="border-bottom">
            <th class=" td-padding border-right">id</th>
            <th class=" td-padding border-right">Faculty</th>
        </tr>
        @forelse($facultyData as $dat)
            <tr class="border-bottom">
                <td class="td-padding border-right">{{ $dat->id }}</td>
                <td class="td-padding border-right">{{ $dat->name }}</td>
                <td class="td-padding border-right">
                    <form action="{{ route('faculty.delete', ['id' => $dat->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @empty
            <p>No data found</p>
        @endforelse



    </table>
</div>
