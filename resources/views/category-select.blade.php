<select id="dynamic_select">
    <script>
        jQuery(function ($) {
            jQuery("#dynamic_select").change(function () {
                location.href = jQuery(this).val();
            })

        });
    </script>
    <option value="">Selecteer een categorie om te bewerken</option>

    @foreach($subcategories as $subcategory)

        <option value="{{route('category', $subcategory->id)}}">{{$subcategory->name}}</option>

    @endforeach
</select>
