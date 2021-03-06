<?php
	$lang = array(
	'alert_email' => array(
		'email' => 'לא הוזנה כתובת תקינה בשדה האימייל?',
		'email_check' => 'כתובת אימייל זו רשומה כבר לקבלת התראות עבור מיקום זה',
		'length' => 'חובה להזין כתובת אימייל באורך שבין 4 ל-64 תווים',
		'required' => 'אם התיבה מסומנת, שדה האימייל הינו חובה',
	),
	'alert_country' => array(
		'single_country' => 'This deployment spans within one country only. Please make sure the alert location is within the country '.ORM::factory('country', Kohana::config('settings.default_country'))->country.'.'
	),
	'alert_lat' => array(
		'between' => 'לא נבחר מיקום על המפה.',
		'required' => 'לא נבחר מיקום על המפה.',
	),
	'alert_lon' => array(
		'between' => 'לא נבחר מיקום על המפה.',
		'required' => 'לא נבחר מיקום על המפה.',
	),
	'alert_mobile' => array(
		'length' => 'שדה הטלפון הנייד אינו מכיל מספר באורך תקין.',
		'mobile_check' => 'מספר הטלפון הנייד רשום כבר לקבלת התראות עבור מיקום זה',
		'numeric' => 'המספר שהוזן בשדה הטלפון הנייד אינו תקין. יש להזין ספרות בלבד, כולל קדומת בינלאומית',
		'one_required' => 'חובה להזין מספר טלפון נייד או כתובת אימייל',
		'required' => 'אם התיבה מסומנת, שדה מספר הטלפון הנייד הינו חובה',
	),
	'alert_radius' => array(
		'in_array' => 'לא הוגדר רדיוס תקין על המפה.',
		'required' => 'לא הוגדר רדיוס על המפה.',
	),
	'alerts_subscribed' => 'You have subscribed for alerts with the following categories',
		'code_already_verified' => 'קוד זה אומת כבר בעבר!',
	'code_not_found' => 'קוד האימות לא נמצא! יש לוודא כי כתובת ה-URL הינה נכונה.',
	'code_verified' => 'הקוד אומת בהצלחה. מעתה ישלחו אליך התראות בזמן אמת על תקריות שמתרחשות (ברדיוס הדיווחים שבחרת)',
	'confirm_request' => 'כדי לאשר את בקשת ההתראה, יש לגשת ל',
	'create_more_alerts' => 'חזרה לעמוד ההתראות ליצירת התראות נוספות',
	'email_alert_request_created' => 'בקשתך להתראת אימייל נקלטה והודעת אימות נשלחה ל',
	'email_code' => 'הזן למטה את קוד האישור שקיבלת בדואר האלקטרוני:',
	'email_error_head' => 'בקשתך להתראת אימייל לא נשמרה!',
	'email_ok_head' => 'בקשתך להתראת אימייל נשמרה!',
	'error' => 'לא ניתן לאתר את בקשתך לאישור!',
	'mobile_alert_request_created' => 'בקשתך להתראה בטלפון הנייד נקלטה והודעת אימות נשלחה ל',
	'mobile_code' => 'יש להזין מטה את קוד האימות שקיבלת ב-SMS לטלפון הנייד:',
	'mobile_error_head' => 'בקשתך להתראה בטלפון הנייד לא נשמרה!',
	'mobile_ok_head' => 'בקשתך להתראה בטלפון הנייד נשמרה!',
	'settings_error' => 'המערכת אינה מוגדרת כהלכה לעיבוד התראות',
	'unsubscribe' => 'דואר זה נשלח אליך בשל הרשמתך לקבלת התראות. לביטול קבלת התראות יש לגשת ל',
	'unsubscribed' => 'התראות לא יישלחו יותר מ',
	'unsubscribe_failed' => 'ביטול ההרשמה נכשל. יש לוודא תקינות כתובת URL.',
	'verification_email_subject' => 'אימות הרשמה לקבלת התראות',
	'verify_code' => 'התראות על מיקום זה לא יישלחו עד שתאושר בקשתך.',
	);
?>
