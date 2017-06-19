<table>
    <thead>
        <tr>
        @foreach ($collection_presenter->attributeTypes() as $attr_name => $attr_type)
            <th>
                {{ ucwords($attr_name) }}
            </th>
        @endforeach
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($resources as $resource)
        <tr>
        @foreach ($collection_presenter->attributesFor($resource) as $attribute)
            <td>
                @include ($attribute->viewPath(), ['field' => $attribute])
            </td>
            <td>
                <a href="{{ $collection_presenter->dashboard->editRoute($resource) }}">
                    Edit
                </a>
            </td>
        @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
