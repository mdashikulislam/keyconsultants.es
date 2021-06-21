<?php
namespace App\Helper;
use App\Models\Additionally;
use App\Models\Feature;
use App\Models\Property;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use App\Models\ReferenceNumber;
use App\Models\Region;
use App\Models\Seo;

class Helper{
    public static function getPropertyStatusCheckbox($selected = 0)
    {
        $propertyStatus = PropertyStatus::all();
        $html = '';
        if (!empty($propertyStatus)){
            foreach ($propertyStatus as $key =>$status){
                $html .='<div class="icheck-primary">';
                $html .='<input ';
                if ($selected == $status->id){
                    $html .= 'checked';
                }
                $html .= ' value="'.$status->id.'" id="property-status-'.$status->id.'" name="property_status" type="radio">';
                $html .= '<label for="property-status-'.$status->id.'">';
                $html .= $status->name;
                $html .='</label></div>';
            }
        }

        return $html;
    }

    public static function getPropertyAditionallyCheckbox($selected = null)
    {
        $aditionallyes = Additionally::all();
        $html = '';
        if (!empty($aditionallyes)){
            foreach ($aditionallyes as $key=>$status){
                $html .='<div class="icheck-primary">';
                $html .='<input ';
                if ($selected){
                    foreach ($selected as $s){
                        if ($s == $status->id){
                            $html .= 'checked';
                        }
                    }
                }
                $html .=' value="'.$status->id.'" id="additionally-'.$status->id.'" name="additionally[]" type="checkbox">';
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
    public static function getPropertyTypeCheckbox($selected = null)
    {
        $referenceNumber = PropertyType::all();
        $html = '';
        if (!empty($referenceNumber)){
            foreach ($referenceNumber as $key=>$status){
                $html .='<div class="icheck-primary ">';
                $html .='<input ';
                if ($selected){
                    foreach ($selected as $s){
                        if ($s == $status->id){
                            $html .= 'checked';
                        }
                    }
                }
                $html .=' value="'.$status->id.'" id="property_type-'.$status->id.'" name="property_type[]" type="checkbox">';
                $html .= '<label for="property_type-'.$status->id.'">';
                $html .= $status->name;
                $html .='</label></div>';
            }
        }
        return $html;
    }
    public static function getPropertyFeatureCheckbox($selected=null)
    {
        $referenceNumber = Feature::all();
        $html = '';
        if (!empty($referenceNumber)){
            foreach ($referenceNumber as $key=>$status){
                $html .='<div class="icheck-primary ">';
                $html .='<input ';
                if ($selected){
                    foreach ($selected as $s){
                        if ($s == $status->id){
                            $html .= 'checked';
                        }
                    }
                }
                $html .=' value="'.$status->id.'" id="property_feature-'.$status->id.'" name="feature[]" type="checkbox">';
                $html .= '<label for="property_feature-'.$status->id.'">';
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
                        if ($region->id == $select){
                            $html .= 'selected';
                        }
                    }
                }
                $html .='  value="'.$region->id.'">';
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
    public static function getFrontendPropertyTypeNameById($id)
    {
        if (empty($id)){
            return ;
        }
        $id = explode(',',$id);
        $typeName = PropertyType::whereIn('id',$id)->pluck('name');
        return $typeName;
    }

    public static function getPropertyRegionName($id)
    {
        if (empty($id)){
            return ;
        }
        $id = explode(',',$id);
        $typeName = Region::whereIn('id',$id)->pluck('name');
        return $typeName;
    }
    public static function getAdditionallyDropdown($selected = 0)
    {
        $additionallys = Additionally::all();
        $html = '';
        if ($additionallys){
            foreach ($additionallys as $number){
                $html .= '<option ';
                if ($selected == $number->id){
                    $html .= 'selected';
                }
                $html .= ' value="'.$number->id.'" >';
                $html .= $number->name;
                $html .= '</option>';
            }
        }
        return $html;
    }
    public static function getReferenceDropdown($selected = 0)
    {
        $referenceNumber = Property::pluck('reference_number');
        $html = '';
        if ($referenceNumber){
            foreach ($referenceNumber as $number){
                $html .= '<option ';
                if ($selected == $number){
                    $html .= 'selected';
                }
                $html .= ' value="'.$number.'" >';
                $html .= $number;
                $html .= '</option>';
            }
        }
        return $html;
    }

    public static function getRegionFrontendDropdown($selected =0)
    {
        $regions = Region::all();
        $html ='';
        if ($regions){
            foreach ($regions as $region){
                $html .= '<option ';
                if ($region->id == $selected){
                    $html .= 'selected';
                }
                $html .= ' value="'.$region->id.'" >';
                $html .= $region->name;
                $html .= '</option>';
            }
        }
        return $html;
    }

    public static function getPropertyTypeDropdown($selected =0)
    {
        $regions = PropertyType::all();
        $html ='';
        if ($regions){
            foreach ($regions as $region){
                $html .= '<option ';
                if ($selected == $region->id){
                    $html .= 'selected';
                }
                $html .= ' value="'.$region->id.'" >';
                $html .= $region->name;
                $html .= '</option>';
            }
        }
        return $html;
    }
    public static function getPropertyFeature($show = null){
        $features = Feature::all();
        $value = [];
        if ($features){
            foreach($features as $add){
                if ($show){
                    foreach($show as $s){
                        if ($s == $add->id){
                            $value[] = $add->name;
                        }
                    }
                }
            }
        }
        return $value;
    }
    public static function getAdditionallyData($show = null)
    {
        $aditionally = Additionally::all();
        $value = [];
        if ($aditionally){
            foreach($aditionally as $add){
                if ($show){
                    foreach($show as $s){
                        if ($s == $add->id){
                            $value[] = $add->name;
                        }
                    }
                }
            }
        }
        return $value;
    }

    public static function getPropertyInfoById($id = 0)
    {
       return Property::where('id',$id)->first();
    }

    public static function getSeoDropDown()
    {
        $seos = Seo::all();
        $html = '';
        if ($seos){
            foreach ($seos as $seo){
                $html .= '<option value="'.$seo->id.'">';
                $html .= $seo->name;
                $html .= '</option>';
            }
        }
        return $html;
    }
}
