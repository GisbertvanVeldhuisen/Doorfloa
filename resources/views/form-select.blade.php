<select id="dynamic_select">
    <script>
        jQuery(function ($) {
            jQuery("#dynamic_select").change(function () {
                location.href = jQuery(this).val();
            })

        });
    </script>
    <option value="">Selecteer een pagina om te bewerken</option>
    <option value="{{route('form')}}">Home</option>
    <option value="{{route('form')}}/photography">Fotografie</option>
    <option value="{{route('form')}}/recipe">Recepten</option>
    <option value="{{route('form')}}/about">Over</option>
    <option value="{{route('form')}}/contact">Contact</option>
    <option value="{{route('form')}}/animals">Dieren</option>
    <option value="{{route('form')}}/general">General</option>
</select>
