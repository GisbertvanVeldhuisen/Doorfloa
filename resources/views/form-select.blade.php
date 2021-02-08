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
    <option value="{{route('form')}}/fotografie">Fotografie</option>
    <option value="{{route('form')}}/recepten">Recepten</option>
    <option value="{{route('form')}}/over">Over</option>
    <option value="{{route('form')}}/contact">Contact</option>
    <option value="{{route('form')}}/dieren">Dieren</option>
    <option value="{{route('form')}}/mensen">Mensen</option>
    <option value="{{route('form')}}/landschap">Landschap</option>
    <option value="{{route('form')}}/zoet">Zoet</option>
    <option value="{{route('form')}}/hartig">Hartig</option>
    <option value="{{route('post-url')}}">Post aanmaken</option>
    <option value="{{route('category-url')}}">Categorie aanmaken</option>
</select>
