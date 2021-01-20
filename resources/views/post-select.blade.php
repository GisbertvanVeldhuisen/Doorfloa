<select id="dynamic_select">
    <script>
        jQuery(function ($) {
            jQuery("#dynamic_select").change(function () {
                location.href = jQuery(this).val();
            })

        });
    </script>
    <option value="">Selecteer een categorie om te bewerken</option>

    @foreach($posts as $post)

        <option value="{{route('post', $post->id)}}">{{$post->title}}</option>

    @endforeach
</select>
