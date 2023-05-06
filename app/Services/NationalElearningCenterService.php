<?php
namespace App\Services;

use Carbon\Carbon;

class NationalElearningCenterService
{

    public function register($booking, $user, $course)
    {
        $courseUrl = route("course/details" , $course->id);
        //  Username: ETMAEN
        //  password: c8HhGY8174^t%
        //  platform: ETMAEN_001
        //  "250fdeae-fe97-483a-b868-412eec2fc505"
        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "http://adlnet.gov/expapi/verbs/registered",
                "display" => ["en-US" => "registered"]
            ],
            "object" => [
                "id" => "$courseUrl",
                "definition" => [
                    "name" => [$lang_title => "$course->title"],
                    "description" => [$lang_description => "$course->description"],
                    "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "instructor" => [
                    "name" => "Etmaen Group",
                    "mbox" => "mailto:info@etmaengroup.com"
                ],
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
            ],
            "timestamp" => "$booking->created_at"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function initialized($booking, $user, $course)
    {
        $courseUrl = route("course/details" , $course->id);
        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "http://adlnet.gov/expapi/verbs/initialized",
                "display" => ["en-US" => "initialized"]
            ],
            "object" => [
                "id" => "$courseUrl",
                "definition" => [
                    "name" => [$lang_title => "$course->title"],
                    "description" => [$lang_description => "$course->description"],
                    "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "instructor" => [
                    "name" => "Etmaen Group",
                    "mbox" => "mailto:info@etmaengroup.com"
                ],
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
            ],
            "timestamp" => "$booking->created_at"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function lesson($booking, $user, $course, $lesson)
    {
        $courseUrl = route("course/details" , $course->id);
        $lessonUrl = route("lesson/details" , $lesson->id);
        $count = explode(":",$lesson->duration);
        $duration = "";
        if (count($count) === 3){
            $hour = $count[0];
            $minutes = $count[1];
            $second = $count[2];
            $duration = "{$hour} hours {$minutes} minutes {$second} seconds";
            $duration = $this->time_to_iso8601_duration(strtotime($duration,0));
        }elseif (count($count) === 2){
            $minutes = $count[0];
            $second = $count[1];
            $duration = "0 hours {$minutes} minutes {$second} seconds";
            $duration = $this->time_to_iso8601_duration(strtotime($duration,0));
        }

        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $title = $course->title .'- Unit'. $lesson->arrange . $lesson->title;
        $description = $course->description .'- Unit'. $lesson->arrange . $lesson->description;
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "https://w3id.org/xapi/acrossx/verbs/watched",
                "display" => ["en-US" => "watched"]
            ],
            "object" => [
                "id" => "$lessonUrl",
                "definition" => [
                    "name" => [$lang_title => "$title"],
                    "description" => [$lang_description => "$description"],
                    "type" => "https://w3id.org/xapi/video/activity-type/video"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "instructor" => [
                    "name" => "Etmaen Group",
                    "mbox" => "mailto:info@etmaengroup.com"
                ],
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
                "contextActivities" =>[
                    "parent" => [
                        [
                            "id" => "$courseUrl",
                            "definition" => [
                                "name" => [$lang_title => "$course->title"],
                                "description" => [$lang_description => "$course->description"],
                                "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                            ],
                            "objectType" => "Activity"
                        ]
                    ]
                ],
            ],
            "result" => [
                    "completion" => true,
                    "duration" => "$duration"
            ],
            "timestamp" => "$booking->created_at"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function completed($booking, $user, $course)
    {
        $courseUrl = route("course/details" , $course->id);

        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "http://adlnet.gov/expapi/verbs/completed",
                "display" => ["en-US" => "completed"]
            ],
            "object" => [
                "id" => "$courseUrl",
                "definition" => [
                    "name" => [$lang_title => "$course->title"],
                    "description" => [$lang_description => "$course->description"],
                    "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "instructor" => [
                    "name" => "Etmaen Group",
                    "mbox" => "mailto:info@etmaengroup.com"
                ],
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
            ],
            "timestamp" => "$booking->created_at"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function attempted($booking, $user, $course)
    {
        $courseUrl = route("course/details" , $course->id);
        $quizUrl = route("course/mycourses/quiz" , $course->id);

        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $title = $course->title . " Quiz -1";
        $description = $course->description . " Quiz -1";
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "http://adlnet.gov/expapi/verbs/attempted",
                "display" => ["en-US" => "attempted"],
            ],
            "object" => [
                "id" => "$quizUrl",
                "definition" => [
                    "name" => [$lang_title => "$title"],
                    "description" => [$lang_description => "$description"],
                    "type" => "http://id.tincanapi.com/activitytype/unit-test"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "instructor" => [
                    "name" => "Etmaen Group",
                    "mbox" => "mailto:info@etmaengroup.com"
                ],
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
                "contextActivities" =>[
                    "parent" => [
                        [
                            "id" => "$courseUrl",
                            "definition" => [
                                "name" => [$lang_title => "$course->title"],
                                "description" => [$lang_description => "$course->description"],
                                "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                            ],
                            "objectType" => "Activity"
                        ]
                    ]
                ],
            ],
            "result" => [
                "completion" => true,
                "success" => $booking->success_status == 1,
                "score" => [
                    "scaled" => round( $booking->max / $booking->raw , 2), // النسبه
                    "raw"    => $booking->raw, // المجموع
                    "min"    => 0, // اقل درجه
                    "max"    => $booking->max // اعلى درجه
                ],
            ],
            "timestamp" => "$booking->created_at"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function rated($user, $course , $dataArr)
    {
        $courseUrl = route("course/details" , $course->id);
        $date = Carbon::now();

        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "http://id.tincanapi.com/verb/rated",
                "display" => ["en-US" => "rated"]
            ],
            "object" => [
                "id" => "$courseUrl",
                "definition" => [
                    "name" => [$lang_title => "$course->title"],
                    "description" => [$lang_description => "$course->description"],
                    "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "instructor" => [
                    "name" => "Etmaen Group",
                    "mbox" => "mailto:info@etmaengroup.com"
                ],
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
            ],
            "result" => [
                "score" => [
                    "scaled" => $dataArr['rate'] / 10, // النسبه
                    "raw"    => (int)$dataArr['rate'], // المجموع
                    "min"    => 0, // اقل درجه
                    "max"    => 10 // اعلى درجه
                ],
                "response" => "{$dataArr['review']}"
            ],
            "timestamp" => "$date"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function earned($booking, $user, $course)
    {
        $courseUrl = route("course/details" , $course->id);
        $cercourseUrl = route("course/details" , $course->id) . ".CF" . $course->id . $user->id;
        $cerlink = route("certifications" ,[$booking->user_id,$booking->course_id]);
        if(mb_detect_encoding($course->title) !== 'UTF-8'){ $lang_title = "en-US"; }else{ $lang_title = "ar-SA"; }
        if(mb_detect_encoding($course->description) !== 'UTF-8'){ $lang_description = "en-US"; }else{ $lang_description = "ar-SA"; }
        $data = [
            "actor" => [
                "mbox" => "mailto:$user->email",
                "name" => "$user->id_number",
                "objectType" => "Agent"
            ],
            "verb" => [
                "id" => "http://id.tincanapi.com/verb/earned",
                "display" => ["en-US" => "earned"]
            ],
            "object" => [
                "id" => "$cercourseUrl" ,
                "definition" => [
                    "name" => [$lang_title => "$course->title Certificate"],
                    "type" => "https://www.opigno.org/en/tincan_registry/activity_type/certificate"
                ],
                "objectType" => "Activity"
            ],
            "context" => [
                "platform" => "ETMAEN_001",
                "language" => "ar-SA",
                "extensions" =>[
                    "http://id.tincanapi.com/extension/jws-certificate-location" => $cerlink,
                    "https://nelc.gov.sa/extensions/platform" => [
                        "name" => [
                            "ar-SA" => "معهد اطمئن للتدريب",
                            "en-US" => "Etmaen training institute"
                        ]
                    ],
                ],
                "contextActivities" =>[
                    "parent" => [
                        [
                            "id" => "$courseUrl",
                            "definition" => [
                                "name" => [$lang_title => "$course->title"],
                                "description" => [$lang_description => "$course->description"],
                                "type" => "https://w3id.org/xapi/cmi5/activitytype/course"
                            ],
                            "objectType" => "Activity"
                        ]
                    ]
                ],
            ],
            "timestamp" => "$booking->created_at"
        ];
        $dataJson = json_encode($data);
        $url = 'https://lrs.nelc.gov.sa/staging-lrs/xapi/statements';

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl_handle, CURLOPT_HEADER, FALSE);
        curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($curl_handle, CURLOPT_USERPWD, 'ETMAEN:c8HhGY8174^t%');
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        $dataJsonResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        return $dataJsonResponse;
    }

    public function time_to_iso8601_duration($time) {
        $units = array(
            "Y" => 365*24*3600,
            "D" =>     24*3600,
            "H" =>        3600,
            "M" =>          60,
            "S" =>           1,
        );

        $str = "P";
        $istime = false;

        foreach ($units as $unitName => &$unit) {
            $quot  = intval($time / $unit);
            $time -= $quot * $unit;
            $unit  = $quot;
            if ($unit > 0) {
                if (!$istime && in_array($unitName, array("H", "M", "S"))) { // There may be a better way to do this
                    $str .= "T";
                    $istime = true;
                }
                $str .= strval($unit) . $unitName;
            }
        }

        return $str;
    }

}
