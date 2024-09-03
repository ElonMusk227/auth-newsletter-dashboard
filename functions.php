<?php
    function select  (string $name, $value, array $options)
    {
        $html_options = [];
        foreach($options as $k => $option)
        {
            $attributes = $k == $value ? 'selected' : '';
            $html_options[] = "<option value = '$k' $attributes>$option</option>";
        }
        return "<select class='form-control' name='$name' >" .implode($html_options). '</select>';
    }
    function crenaux_html (array $crenaux )
    {
        if(empty($crenaux))
        {
            return 'Fermé';
        }
        $phrases = [];
        foreach($crenaux as $crenau)
        {
            $phrases[] = "De <strong>{$crenau[0]}h</strong> a <strong>{$crenau[1]}h</strong> ";
        }
        echo 'Ouvert ' . implode(" et ", $phrases);
    }
    function in_crenaux (int $heure, array $crenaux): bool
    {
        foreach ($crenaux as $crenau){
            $debut = $crenau[0];
            $fin = $crenau[1];
            if($heure >= $debut && $heure < $fin)
            {
                return true;
            }
        }
        return false;
    }
   























?>