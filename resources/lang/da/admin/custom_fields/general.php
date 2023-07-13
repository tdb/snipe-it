<?php

return [
    'custom_fields'		        => 'Brugerdefinerede felter',
    'manage'                    => 'Manage',
    'field'		                => 'Felt',
    'about_fieldsets_title'		=> 'Om Feltsæt',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Kryptere værdien af dette felt i databasen',
    'encrypt_field_help'      => 'Advarsel: Kryptere et felt gør det uransagelige.',
    'encrypted'      	        => 'Krypteret',
    'fieldset'      	        => 'Feltsæt',
    'qty_fields'      	      => 'Antal felter',
    'fieldsets'      	        => 'Feltsæt',
    'fieldset_name'           => 'Feltsættets navn',
    'field_name'              => 'Feltnavn',
    'field_values'            => 'Feltværdier',
    'field_values_help'       => 'Tilføj valgbare indstillinger, en pr. Linje. Andre linjer end den første linje vil blive ignoreret.',
    'field_element'           => 'Form-elementet',
    'field_element_short'     => 'Element',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Brugerdefineret Format',
    'field_custom_format_help'     => 'Dette felt muliggør anvendelse af et regex-udtryk til validering. Det skal starte med "regex:" - for f.eks. at validere, at en tilpasset feltværdi indeholder et gyldig IMEI (15 numeriske cifre), vil du skulle benytte <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Påkrævet',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Bruges af modeller',
    'order'   		            => 'Ordre',
    'create_fieldset'         => 'Nyt Feltsæt',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Nyt Brugerdefinerede Felt',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Værdien af dette felt er krypteret i databasen. Kun admins vil være i stand til at se den krypteret værdi',
    'show_in_email'     => 'Inkludér værdien af ​​dette felt i tjekud-e-mail til brugeren? Krypterede felter kan ikke medtages i e-mails.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
];
