<?php

use Illuminate\Support\Facades\DB;


if (!function_exists('checkIsNullOrEmpty')) {
    /**
     * @param $array
     * @return boolean
     */
    function checkIsNullOrEmpty($array)
    {
        if (is_null($array) || empty($array)) {
            return true;
        }
        return false;
    }
}

if (!function_exists('checkIsNullOrEmptyCollection')) {

    /**
     * @param $collection
     * @return boolean
     */
    function checkIsNullOrEmptyCollection($collection)
    {
        if (is_null($collection) || $collection->isEmpty()) {
            return true;
        }
        return false;
    }
}

if (!function_exists('checkNotNullAndEmpty')) {
    /**
     * @param $array
     * @return boolean
     */
    function checkNotNullAndEmpty($array)
    {
        if (!is_null($array) && !empty($array)) {
            return true;
        }
        return false;
    }

}

if (!function_exists('checkIsNullOrEmptyStr')) {
    /**
     * @param $string
     * @return boolean
     */
    function checkIsNullOrEmptyStr($string)
    {
        if (is_null($string) || empty(trim($string))) {
            return true;
        }
        return false;
    }
}

if (!function_exists('validateStringIsNullOrEmpty')) {
    /**
     * this function return true when string is null or ''
     * else return false
     * @param $string
     * @return boolean
     */
    function validateStringIsNullOrEmpty($string)
    {
        if (is_null($string) || $string = "") {
            return true;
        }
        return false;
    }
}

if (!function_exists('getCurrentDate')) {
    /**
     * @param string $format
     * @return false|string
     */
    function getCurrentDate($format = 'Y/m/d H:i')
    {
        return date($format);
    }
}

if (!function_exists('formatDataBaseOnTable')) {
    /**
     * @param $tableName
     * @param $data
     * @return array
     */
    function formatDataBaseOnTable($tableName, $data)
    {
        $saveData = [];
        $columnName = DB::getSchemaBuilder()->getColumnListing($tableName);

        foreach ($columnName as $value) {
            if (array_key_exists($value, $data)) {
                $saveData[$value] = (isset($data[$value])) ? ($data[$value]) : null;
            }
        }

        if (isset($saveData['id'])) {
            unset($saveData['id']);
        }

        return $saveData;
    }
}

if (!function_exists('dateFormat')) {
    /**
     * @param $date
     * @param string $format
     * @return false|string
     */
    function dateFormat($date, $format = 'Y/m/d')
    {
        return date($format, strtotime($date));
    }
}

if (!function_exists('getFullQuery')) {
    /**
     * @param $builder
     * @return null|string|string[]
     */
    function getFullQuery($builder)
    {
        $sql = $builder->toSql();
        foreach ($builder->getBindings() as $binding) {
            $value = is_numeric($binding) ? $binding : "'" . $binding . "'";
            $sql = preg_replace('/\?/', $value, $sql, 1);
        }
        return $sql;
    }
}