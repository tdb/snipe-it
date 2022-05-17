<?php

return [
    'custom_fields'		        => '사용자 정의 항목들',
    'manage'                    => '관리',
    'field'		                => '항목',
    'about_fieldsets_title'		=> '항목세트란',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => '필드 암호화',
    'encrypt_field_help'      => '경고: 항목을 암호화 하면 검색을 할 수 없습니다.',
    'encrypted'      	        => '암호화',
    'fieldset'      	        => '항목세트',
    'qty_fields'      	      => '항목수',
    'fieldsets'      	        => '항목세트',
    'fieldset_name'           => '항목세트명',
    'field_name'              => '항목명',
    'field_values'            => '항목 값',
    'field_values_help'       => '줄 당 한 개의 옵션을 선택하세요. 첫번째 줄 이후의 빈 줄은 무시됩니다.',
    'field_element'           => '양식 성분',
    'field_element_short'     => '성분',
    'field_format'            => '형식',
    'field_custom_format'     => '사용자 형식',
    'field_custom_format_help'     => '이 항목을 사용하면 유효성 검사를 위해 정규 표현식을 사용할 수 있습니다. "regex:"로 시작해야 합니다 - 예를 들어, 사용자정의 항목 값에 올바른 IMEI (15 자리) 가 포함되어 있는지 확인하려면 <code>regex: / ^ [0-9]{15} $ / </code>을 사용합니다.',
    'required'   		          => '필수사항',
    'req'   		              => '필수',
    'used_by_models'   		    => '적용 모델',
    'order'   		            => '순서',
    'create_fieldset'         => '신규 항목세트',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => '신규 사용자 항목',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => '이 항목의 값은 데이터베이스 내에서 암호화 되었습니다. 관리자만이 해독된 값을 확인 할 수 있습니다.',
    'show_in_email'     => '사용자에게 전송된 반출 이메일에 이 항목의 값을 포함 시키시겠습니까? 암호화 된 항목들은 이메일에 포함될 수 없습니다.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code> :db_column </code> but should be :expected </code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
];
