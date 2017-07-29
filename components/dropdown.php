<?php

class Dropdown
{
    public static function ForStates($requestName, $statesArray)
    {
        $formOptions = null;

        foreach ($statesArray as $key => $value) {
            $optionName = null;

            switch ($value[0]) {
                case "Western Australia":
                    $optionName = "wa";
                    break;
                case "Queensland":
                    $optionName = "qld";
                    break;
                case "Victoria":
                    $optionName = "vic";
                    break;
                case "South Australia":
                    $optionName = "sa";
                    break;
                case "Northern Territory":
                    $optionName = "nt";
                    break;
                case "Tasmania":
                    $optionName = "tas";
                    break;
                case "Australian Capital Territory":
                    $optionName = "act";
                    break;
                case "New South Whales":
                    $optionName = "nsw";
                    break;
            }

            $formOptions .= "\t<option value='$optionName'>$value[0]</option>\n";
        }

        return <<<HTML
<select name="{$requestName}" class="form-control custom-select">
    {$formOptions}
</select>
HTML;
    }
}