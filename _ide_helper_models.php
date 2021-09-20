<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Additionally
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Additionally newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Additionally newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Additionally query()
 */
	class Additionally extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property string $district_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $subject
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Distict
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Distict newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Distict newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Distict query()
 */
	class Distict extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Enquiry
 *
 * @property int $id
 * @property int $post_id
 * @property string $question
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string|null $query
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Enquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enquiry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enquiry query()
 */
	class Enquiry extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Favorite
 *
 * @property int $id
 * @property int $post_id
 * @property string $ip
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite query()
 */
	class Favorite extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $visible
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MoreMedia
 *
 * @property int $id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @method static \Illuminate\Database\Eloquent\Builder|MoreMedia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoreMedia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MoreMedia query()
 */
	class MoreMedia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Note
 *
 * @property int $id
 * @property int $post_id
 * @property string $name
 * @property string $email
 * @property string $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Note query()
 */
	class Note extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OnlineTax
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $nie
 * @property string $dob
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $country
 * @property string $ownership
 * @property string $place_of_birth
 * @property string|null $ibi_file
 * @property string|null $address_in_spain
 * @property string|null $city_2
 * @property string|null $state_2
 * @property string|null $postal_2
 * @property string|null $catastral_reference
 * @property string|null $catastral_value_in_euro
 * @property string $iban_code
 * @property string|null $buy_the_property
 * @property string $whole_tax_year
 * @property string $rental_year
 * @property string|null $tax_year
 * @property string $contact_telephone
 * @property string $contact_email
 * @property int $total_owner
 * @property string $total_amount
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineTax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineTax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OnlineTax query()
 */
	class OnlineTax extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Owner
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string|null $dni_nie
 * @property string|null $address1
 * @property string|null $address2
 * @property string|null $country
 * @property string|null $post_code
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $mobile
 * @property string|null $nationality
 * @property string|null $passport
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner query()
 */
	class Owner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Property
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $reference_number
 * @property int $price
 * @property string $city
 * @property string|null $region
 * @property int|null $room
 * @property int|null $bathroom
 * @property string|null $land_area
 * @property string|null $living_space
 * @property string|null $balcony_terrace_area
 * @property string|null $property_status
 * @property string|null $additionally
 * @property string|null $property_type
 * @property string $feature_image
 * @property string $post_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $feature
 * @property string $symbol
 * @property string|null $owner_name
 * @property string $ibi
 * @property string $basura
 * @property string $community
 * @property string|null $energy_cost
 * @property string|null $province
 * @property string|null $district
 * @property-read \App\Models\Favorite|null $favorites
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MoreMedia[] $more_medias
 * @property-read \App\Models\PropertyStatus|null $propertyStatus
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Query\Builder|Property onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Query\Builder|Property withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Property withoutTrashed()
 */
	class Property extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PropertyStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyStatus query()
 */
	class PropertyStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PropertyType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropertyType query()
 */
	class PropertyType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReferenceNumber
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReferenceNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReferenceNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReferenceNumber query()
 */
	class ReferenceNumber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SeekerData
 *
 * @property int $id
 * @property int $seeker_info_id
 * @property string|null $reference_no
 * @property string|null $province
 * @property string|null $district
 * @property string|null $city
 * @property string|null $type
 * @property string|null $min_price
 * @property string|null $max_price
 * @property string|null $min_bed
 * @property string|null $max_bed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $for
 * @property string|null $feature
 * @property-read \App\Models\PropertyStatus|null $propertyStatus
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerData newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerData newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerData query()
 */
	class SeekerData extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SeekerInfo
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SeekerData[] $seeker_datas
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerInfo query()
 */
	class SeekerInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SeekerNote
 *
 * @property int $id
 * @property int $seeker_id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerNote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerNote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeekerNote query()
 */
	class SeekerNote extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Seo
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string|null $title
 * @property string|null $keyword
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Seo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Seo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Seo query()
 */
	class Seo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SpanishWill
 *
 * @property int $id
 * @property string $surname
 * @property string $first_name
 * @property string|null $surname_at_birth
 * @property string $gender
 * @property string $dob
 * @property string $passport
 * @property string $country_of_issue
 * @property string $expiry_date
 * @property string $postcode
 * @property string $country
 * @property string $profession
 * @property string $email
 * @property string $telephone
 * @property string $place_of_birth
 * @property string $country_of_birth
 * @property string $nationality
 * @property string $address
 * @property string|null $mother_name
 * @property string|null $mother_living_status
 * @property string|null $father_name
 * @property string|null $father_living_status
 * @property string|null $marital_status
 * @property string|null $marriage_time
 * @property string|null $current_marriage_country
 * @property string|null $current_spouse_first_name
 * @property string|null $current_spouse_surname
 * @property int|null $current_no_of_children
 * @property string|null $previous_marriage_country
 * @property string|null $previous_spouse_first_name
 * @property string|null $previous_spouse_surname
 * @property int|null $previous_no_of_children
 * @property string|null $current_child_first_name
 * @property string|null $current_child_surname
 * @property string|null $current_child_type
 * @property string|null $previous_child_first_name
 * @property string|null $previous_child_surname
 * @property string|null $previous_child_type
 * @property string|null $have_other_child
 * @property string|null $how_other_child
 * @property string|null $other_child_first_name
 * @property string|null $other_child_surname
 * @property string|null $other_child_type
 * @property string $regulated
 * @property string $executor_distribution
 * @property string|null $executor_first_name
 * @property string|null $executor_surname
 * @property string|null $executor_nie
 * @property string|null $executor_address
 * @property string $made_previous
 * @property string $resident_of_spain
 * @property string|null $beneficiary_first_name
 * @property string|null $beneficiary_last_name
 * @property string|null $beneficiary_relationship
 * @property string|null $beneficiary_description
 * @property string $payment_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SpanishWill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpanishWill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpanishWill query()
 */
	class SpanishWill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property int $will_id
 * @property string $trx_id
 * @property string $amount
 * @property string $receipt_email
 * @property string $receipt_number
 * @property string $receipt_url
 * @property string $balance_transaction
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

