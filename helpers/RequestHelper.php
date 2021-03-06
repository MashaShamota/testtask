<?php

class RequestHelper
{
    /**
     * Remove html tags
     * @param $data
     * @return array|string with cleaned parameters
     */
    public static function cleanInputs($data)
    {
        $clean_input = [];
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $clean_input[$k] = self::cleanInputs($v);
            }
        } else {
            $clean_input = trim(strip_tags($data));
        }

        return $clean_input;
    }
}
