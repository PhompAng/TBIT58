<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "ต้องยอมรับ :attribute",
	"active_url"           => ":attribute ไม่ใช่รูปแบบ URL ที่ถูกต้อง",
	"after"                => ":attribute ต้อเป็นวันที่ที่อยู่หลัง :date เท่านั้น",
	"alpha"                => ":attribute ต้องเป็นตัวอักษรเท่านั้น",
	"alpha_dash"           => ":attribute ต้องเป็นตัวอักษร ตัวเลข และ \"-\" เท่านั้น",
	"alpha_num"            => ":attribute ต้องเป็นตัวอักษรและตัวเลขเท่านั้น",
	"array"                => ":attribute ต้องเป็นอาร์เรย์เท่านั้น",
	"before"               => ":attribute ต้องเป็นวันที่ที่อยู่หลัง :date เท่านั้น",
	"between"              => array(
		"numeric" => ":attribute ต้องอยู่ระหว่าง :min และ :max.",
		"file"    => ":attribute ต้องอยู่ระหว่าง :min และ :max KB",
		"string"  => ":attribute ต้องอยู่ระหว่าง :min และ :max ตัวอักษร",
		"array"   => ":attribute ต้องมีสมาชิกระหว่าง :min และ :max ตัว",
	),
	"boolean"              => "ฟิลด์ :attribute ต้องเป็น True หรือ False เท่านั้น",
	"confirmed"            => ":attribute ไม่ตรงกับการยืนยัน",
	"date"                 => ":attribute ไม่ถูกต้องตามรูปแบบวันที่",
	"date_format"          => ":attribute ไม่ถูกต้องตามรูปแบบ :format.",
	"different"            => ":attribute และ :other ต้องแตกต่างกัน",
	"digits"               => ":attribute ต้องมี :digits หลัก",
	"digits_between"       => ":attribute ต้องอยู่ระหว่าง :min - :max หลัก",
	"email"                => ":attribute ต้องเป็นรูปแบบอีเมลที่ถูกต้อง",
	"exists"               => "ตัวเลือก :attribute ไม่ถูกต้อง",
	"image"                => ":attribute ​​​​​ต้องเป็นรูปภาพเท่านั้น",
	"in"                   => "ตัวเลือก :attribute ไม่ถูกต้อง",
	"integer"              => ":attribute ต้องเป็นจำนวนเต็มเท่านั้น",
	"ip"                   => ":attribute ต้องเป็นรูปแบบ IP address ที่ถูกต้อง",
	"max"                  => array(
		"numeric" => ":attribute ต้องมีค่าน้อยกว่า :max.",
		"file"    => ":attribute ต้องมีขนาดน้อยกว่า :max KB",
		"string"  => ":attribute ต้องน้อยกว่า :max ตัวอักษร",
		"array"   => ":attribute ต้องมีสมาชิกน้อยกว่า :max ตัว",
	),
	"mimes"                => ":attribute ต้องเป็นไฟล์: :values เท่านั้น",
	"min"                  => array(
		"numeric" => ":attribute ต้องมีค่ามากกว่า :min.",
		"file"    => ":attribute ต้องมีขนาดใหญ่กว่า :min KB",
		"string"  => ":attribute ต้องมากกว่า :min ตัวอักษร.",
		"array"   => ":attribute ต้องมีสมาชิกมากกว่า :min ตัว.",
	),
	"not_in"               => "ตัวเลือก :attribute ไม่ถู่กต้อง",
	"numeric"              => ":attribute ต้องเป็นตัวเลขเท่านั้น",
	"regex"                => ":attribute ไม่ถูกต้องตามรูปแบบ",
	"required"             => "ฟิลด์ :attribute จำเป็นต้องกรอก",
	"required_if"          => "ฟิลด์ :attribute จำเป็นต้องกรอกเมื่อ :other เป็น :value.",
	"required_with"        => "ฟิลด์ :attribute จำเป็นต้องกรอกเมื่อมีการกรอก :values",
	"required_with_all"    => "ฟิลด์ :attribute จำเป็นต้องกรอกเมื่อมีการกรอก :values",
	"required_without"     => "ฟิลด์ :attribute จำเป็นต้องกรอกเมื่อไม่มีการกรอก :values",
	"required_without_all" => ":attribute จำเป็นต้องกรอกเมื่อไม่มีการกรอก :values",
	"same"                 => ":attribute และ :other ต้องตรงกัน",
	"size"                 => array(
		"numeric" => ":attribute ต้องมีขนาด :size.",
		"file"    => ":attribute ต้องมีขนาด :size KB",
		"string"  => ":attribute ต้องมีความยาว :size ตัวอักษร",
		"array"   => ":attribute ต้องมีสมาชิก :size ตัว",
	),
	"unique"               => ":attribute ถูกใช้ไปแล้ว",
	"url"                  => ":attribute มีรูปแบบไม่ถูกต้อง",
	"timezone"             => ":attribute ต้องเป็นเขตเวลาที่ถูกต้อง",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
