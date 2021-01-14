<select id="dynamic_select">
    <script>
        jQuery(function ($) {
            jQuery("#dynamic_select").change(function () {
                location.href = jQuery(this).val();
            })

        });
    </script>
    <option value="">Selecteer een categorie om te bewerken</option>

    @foreach($categories as $category)

        <option value="{{route('category')}}">{{$category->category_name}}</option>

    @endforeach
</select>
