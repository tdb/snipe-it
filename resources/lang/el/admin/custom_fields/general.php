<?php

return [
    'custom_fields'		        => 'Προσαρμοσμένα πεδία',
    'manage'                    => 'Manage',
    'field'		                => 'Πεδίο',
    'about_fieldsets_title'		=> 'Σχετικά με τα σύνολα πεδίων',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Κρυπτογράφηση της αξίας του πεδίου στη βάση δεδομένων',
    'encrypt_field_help'      => 'Προειδοποίηση: H κρυπτογράφηση ενός πεδίου την καθιστά ανεξερεύνητη.',
    'encrypted'      	        => 'Κρυπτογραφημένο',
    'fieldset'      	        => 'Σύνολο πεδίων',
    'qty_fields'      	      => 'Πεδία Ποσ',
    'fieldsets'      	        => 'Σύνολο πεδίων',
    'fieldset_name'           => 'Ονομασία Συνόλου Πεδίων',
    'field_name'              => 'Όνομα πεδίου',
    'field_values'            => 'Τιμές πεδίου',
    'field_values_help'       => 'Προσθέστε επιλογές επιλογής, μία ανά γραμμή. Οι κενές γραμμές εκτός από την πρώτη γραμμή θα αγνοηθούν.',
    'field_element'           => 'Φόρμα στοιχείων',
    'field_element_short'     => 'Στοιχείο',
    'field_format'            => 'Τύπος',
    'field_custom_format'     => 'Προσαρμοσμένος τύπος',
    'field_custom_format_help'     => 'Το πεδίο επιτρέπει την χρήση εκφράσεων regex για επικύρωση. Πρέπει να ξεκινάει με "regex:" - για παράδειγμα, για την επικύρωση ενός προσαρμοσμένου πεδίου IMEI (15 αριθμητικά ψηφία), θα ήταν <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Απαιτείται',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Χρησιμοποιήθηκε από τα μοντέλα',
    'order'   		            => 'Σειρά',
    'create_fieldset'         => 'Νέο σύνολο πεδίων',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Νέο προσαρμοσμένο πεδίο',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Η τιμή αυτού του πεδίου είναι κρυπτογραφημένη στη βάση δεδομένων. Μόνο οι διαχειριστές θα μπορούν να δουν την αποκρυπτογραφημένη τιμή',
    'show_in_email'     => 'Να περιλαμβάνεται η τιμή αυτού του πεδίου στα emails χρέωσης ου αποστέλονται στους χρήστες; Κρυπτογραφημένα πεδία δεν μπορούν να περιληφθούν σε emails.',
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
];
