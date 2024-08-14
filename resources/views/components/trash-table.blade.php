<div class="p-4">
    <table class="border-2 w-8/12">
        <tr class="border-bottom">
            <th class="td-padding border-right">id</th>
            <th class="td-padding border-right">Name</th>
            <th class="td-padding border-right">Faculty</th>
            <th class="td-padding border-right">Date Deleted</th>
            <th class="td-padding border-right">Type</th>
        </tr>
        @forelse($trash as $dat)
            <tr class="border-bottom">
                <td class="td-padding border-right">{{ $dat->id }}</td>
                <td class="td-padding border-right">{{ $dat->student_name?:$dat->faculty_name }}</td>
                <td class="td-padding border-right">{{ $dat->faculty_name?? 'Not found' }}</td>
                <td class="td-padding border-right">{{ $dat->student_delete?:$dat->faculty_delete}}</td>
                <td class="td-padding border-right">{{ $dat->type}}</td>
                <td class="td-padding border-right">
                    <form action="{{ route('trash.delete',['id' => $dat->id,'type'=>$dat->type]) }}" method="POST">
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

