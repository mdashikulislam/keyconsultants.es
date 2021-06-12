<?php
namespace App\Helper;
use App\Models\Additionally;
use App\Models\PropertyStatus;

class Helper{
    public static function getPropertyStatusCheckbox()
    {
        $propertyStatus = PropertyStatus::all();
        $html = '';
        if (!empty($propertyStatus)){
            foreach ($propertyStatus as $key=>$status){
                $html .='<div class="icheck-primary">';
                $html .='<input value="'.$status->id.'" id="property-status-'.$status->id.'" name="property_status[]" type="checkbox">';
                $html .= '<label for="property-status-'.$status->id.'">';
                $html .= $status->name;
                $html .='</label></div>';
            }
        }

        return $html;
    }

    public static function getPropertyAditionallyCheckbox()
    {
        $aditionallyes = Additionally::all();
        $html = '';
        if (!empty($aditionallyes)){
            foreach ($aditionallyes as $key=>$status){
                $html .='<div class="icheck-primary">';
                $html .='<input value="'.$status->id.'" id="additionally-'.$status->id.'" name="additionally[]" type="checkbox">';
                $html .= '<label for="additionally-'.$status->id.'">';
                $html .= $status->name;
                $html .='</label></div>';
            }
        }
        return $html;
    }

}
