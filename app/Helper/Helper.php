<?php
namespace App\Helper;
use App\Models\Additionally;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\ReferenceNumber;
use App\Models\Region;

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

    public static function getReferenceNumberCheckbox()
    {
        $referenceNumber = ReferenceNumber::all();
        $html = '';
        if (!empty($referenceNumber)){
            foreach ($referenceNumber as $key=>$status){
                $html .='<div class="icheck-primary d-inline mr-2">';
                $html .='<input value="'.$status->id.'" id="reference_number-'.$status->id.'" name="reference_number[]" type="checkbox">';
                $html .= '<label for="reference_number-'.$status->id.'">';
                $html .= $status->name;
                $html .='</label></div>';
            }
        }
        return $html;
    }
    public static function getPropertyTypeCheckbox()
    {
        $referenceNumber = PropertyType::all();
        $html = '';
        if (!empty($referenceNumber)){
            foreach ($referenceNumber as $key=>$status){
                $html .='<div class="icheck-primary ">';
                $html .='<input value="'.$status->id.'" id="property_type-'.$status->id.'" name="property_type[]" type="checkbox">';
                $html .= '<label for="property_type-'.$status->id.'">';
                $html .= $status->name;
                $html .='</label></div>';
            }
        }
        return $html;
    }
    public static function uploadSingleImage($request = null, $path = '', $prefix = ''): string
    {
        $file = $request;
        $fileName = $prefix.'_'.time().rand(0000,9999).'.'.$file->getClientOriginalExtension();
        $destination = $path;
        $file->storeAs($destination,$fileName,'public');
        $fileNameWithDestination = $destination . '/'.$fileName;
        return $fileNameWithDestination;
    }

    public static function getRegionDropdown($selected = null)
    {
        $regions = Region::all();
        $html = '';
        if ($regions){
            foreach ($regions as $region){
                $html .='<option ';
                if ($selected){
                    foreach ($selected as $select){
                        if ($region->name == $select){
                            $html .= 'selected';
                        }
                    }
                }
                $html .='  value="'.$region->name.'">';
                $html .= $region->name.'</option>';
            }
        }
        return $html;
    }

    public static function getPropertyTypeNameById($id)
    {
        $typeName = PropertyType::where('id',$id)->first();
        $html ='';
        if ($typeName){
            $html .='<span style="color: #fff!important;" class="mb-1 badge bg-success d-block">'.$typeName->name.'</span>';
        }
        return $html;
    }
}
