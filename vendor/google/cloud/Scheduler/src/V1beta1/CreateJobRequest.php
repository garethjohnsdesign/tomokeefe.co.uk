<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1beta1/cloudscheduler.proto

namespace Google\Cloud\Scheduler\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CreateJob][google.cloud.scheduler.v1beta1.CloudScheduler.CreateJob].
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1beta1.CreateJobRequest</code>
 */
class CreateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The location name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required.
     * The job to add. The user can optionally specify a name for the
     * job in [name][google.cloud.scheduler.v1beta1.Job.name]. [name][google.cloud.scheduler.v1beta1.Job.name] cannot be the same as an
     * existing job. If a name is not specified then the system will
     * generate a random unique name that will be returned
     * ([name][google.cloud.scheduler.v1beta1.Job.name]) in the response.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1beta1.Job job = 2;</code>
     */
    private $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required.
     *           The location name. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID`.
     *     @type \Google\Cloud\Scheduler\V1beta1\Job $job
     *           Required.
     *           The job to add. The user can optionally specify a name for the
     *           job in [name][google.cloud.scheduler.v1beta1.Job.name]. [name][google.cloud.scheduler.v1beta1.Job.name] cannot be the same as an
     *           existing job. If a name is not specified then the system will
     *           generate a random unique name that will be returned
     *           ([name][google.cloud.scheduler.v1beta1.Job.name]) in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1Beta1\Cloudscheduler::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * The location name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required.
     * The location name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required.
     * The job to add. The user can optionally specify a name for the
     * job in [name][google.cloud.scheduler.v1beta1.Job.name]. [name][google.cloud.scheduler.v1beta1.Job.name] cannot be the same as an
     * existing job. If a name is not specified then the system will
     * generate a random unique name that will be returned
     * ([name][google.cloud.scheduler.v1beta1.Job.name]) in the response.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1beta1.Job job = 2;</code>
     * @return \Google\Cloud\Scheduler\V1beta1\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Required.
     * The job to add. The user can optionally specify a name for the
     * job in [name][google.cloud.scheduler.v1beta1.Job.name]. [name][google.cloud.scheduler.v1beta1.Job.name] cannot be the same as an
     * existing job. If a name is not specified then the system will
     * generate a random unique name that will be returned
     * ([name][google.cloud.scheduler.v1beta1.Job.name]) in the response.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1beta1.Job job = 2;</code>
     * @param \Google\Cloud\Scheduler\V1beta1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Scheduler\V1beta1\Job::class);
        $this->job = $var;

        return $this;
    }

}

