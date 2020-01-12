<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Application Date Range Filter.
 * The API matches profiles with
 * [Application.application_date][google.cloud.talent.v4beta1.Application.application_date]
 * between start date and end date (both boundaries are inclusive). The filter
 * is ignored if both
 * [start_date][google.cloud.talent.v4beta1.ApplicationDateFilter.start_date]
 * and [end_date][google.cloud.talent.v4beta1.ApplicationDateFilter.end_date]
 * are missing.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ApplicationDateFilter</code>
 */
class ApplicationDateFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Start date. If it's missing, The API matches profiles with application date
     * not after the end date.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     */
    private $start_date = null;
    /**
     * End date. If it's missing, The API matches profiles with application date
     * not before the start date.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     */
    private $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Date $start_date
     *           Start date. If it's missing, The API matches profiles with application date
     *           not after the end date.
     *     @type \Google\Type\Date $end_date
     *           End date. If it's missing, The API matches profiles with application date
     *           not before the start date.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Start date. If it's missing, The API matches profiles with application date
     * not after the end date.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @return \Google\Type\Date
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Start date. If it's missing, The API matches profiles with application date
     * not after the end date.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * End date. If it's missing, The API matches profiles with application date
     * not before the start date.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @return \Google\Type\Date
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * End date. If it's missing, The API matches profiles with application date
     * not before the start date.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->end_date = $var;

        return $this;
    }

}

