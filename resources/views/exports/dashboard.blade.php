<table>
    <thead>
        <tr>
            <th>DATEL</th>
            @foreach ($selectCategories as $category)
                <th>{{ $category['name'] }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($datels as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                @foreach ($value as $item)
                    <td>{{ $item }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>