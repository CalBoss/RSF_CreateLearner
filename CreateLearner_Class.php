<?php
/* Create a class for your webservice call structure*/
class CreateLearner 
{
    function CreateLearner($api_key, $user_id, $password, $first_name, $middle_name, $last_name, $email, $birth_date, $gender, $time_zone, $localization, $display_name, $country, $group_id, $language, $language_level, $curriculum, $notes, $dry_run) 
                {
                    $this->api_key = $api_key;  //required
                    $this->user_id = $user_id;  //required
                    $this->password = $password;    //required
                    $this->first_name = $first_name;    //required if set by URL global configuration
                    $this->middle_name = $middle_name;
                    $this->last_name = $last_name;  //required if set by URL global configuration
                    $this->email = $email;  //required if set by URL global configuration
                    $this->birth_date = $birth_date;    // K-12 URL only 
                    $this->gender = $gender;    // K-12 URL only
                    $this->time_zone = $time_zone;
                    $this->localization = $localization:
                    $this->display_name = $display_name;    // K-12 URL only
                    $this->country = $country;
                    $this->group_id = $group_id;  //required
                    $this->language = $language;  //required
                    $this->language_level = $language_level;
                    $this->curriculum = $curriculum;
                    $this->notes = $notes;
                    $this->dry_run = $dry_run;   //required
                }
}
