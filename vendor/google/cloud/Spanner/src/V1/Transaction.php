<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/transaction.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transaction.
 *
 * Generated from protobuf message <code>google.spanner.v1.Transaction</code>
 */
class Transaction extends \Google\Protobuf\Internal\Message
{
    /**
     * `id` may be used to identify the transaction in subsequent
     * [Read][google.spanner.v1.Spanner.Read],
     * [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql],
     * [Commit][google.spanner.v1.Spanner.Commit], or
     * [Rollback][google.spanner.v1.Spanner.Rollback] calls.
     * Single-use read-only transactions do not have IDs, because
     * single-use transactions do not support multiple requests.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     */
    private $id = '';
    /**
     * For snapshot read-only transactions, the read timestamp chosen
     * for the transaction. Not returned by default: see
     * [TransactionOptions.ReadOnly.return_read_timestamp][google.spanner.v1.TransactionOptions.ReadOnly.return_read_timestamp].
     * A timestamp in RFC3339 UTC \"Zulu\" format, accurate to nanoseconds.
     * Example: `"2014-10-02T15:01:23.045123456Z"`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_timestamp = 2;</code>
     */
    private $read_timestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           `id` may be used to identify the transaction in subsequent
     *           [Read][google.spanner.v1.Spanner.Read],
     *           [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql],
     *           [Commit][google.spanner.v1.Spanner.Commit], or
     *           [Rollback][google.spanner.v1.Spanner.Rollback] calls.
     *           Single-use read-only transactions do not have IDs, because
     *           single-use transactions do not support multiple requests.
     *     @type \Google\Protobuf\Timestamp $read_timestamp
     *           For snapshot read-only transactions, the read timestamp chosen
     *           for the transaction. Not returned by default: see
     *           [TransactionOptions.ReadOnly.return_read_timestamp][google.spanner.v1.TransactionOptions.ReadOnly.return_read_timestamp].
     *           A timestamp in RFC3339 UTC \"Zulu\" format, accurate to nanoseconds.
     *           Example: `"2014-10-02T15:01:23.045123456Z"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * `id` may be used to identify the transaction in subsequent
     * [Read][google.spanner.v1.Spanner.Read],
     * [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql],
     * [Commit][google.spanner.v1.Spanner.Commit], or
     * [Rollback][google.spanner.v1.Spanner.Rollback] calls.
     * Single-use read-only transactions do not have IDs, because
     * single-use transactions do not support multiple requests.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * `id` may be used to identify the transaction in subsequent
     * [Read][google.spanner.v1.Spanner.Read],
     * [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql],
     * [Commit][google.spanner.v1.Spanner.Commit], or
     * [Rollback][google.spanner.v1.Spanner.Rollback] calls.
     * Single-use read-only transactions do not have IDs, because
     * single-use transactions do not support multiple requests.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * For snapshot read-only transactions, the read timestamp chosen
     * for the transaction. Not returned by default: see
     * [TransactionOptions.ReadOnly.return_read_timestamp][google.spanner.v1.TransactionOptions.ReadOnly.return_read_timestamp].
     * A timestamp in RFC3339 UTC \"Zulu\" format, accurate to nanoseconds.
     * Example: `"2014-10-02T15:01:23.045123456Z"`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_timestamp = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTimestamp()
    {
        return $this->read_timestamp;
    }

    /**
     * For snapshot read-only transactions, the read timestamp chosen
     * for the transaction. Not returned by default: see
     * [TransactionOptions.ReadOnly.return_read_timestamp][google.spanner.v1.TransactionOptions.ReadOnly.return_read_timestamp].
     * A timestamp in RFC3339 UTC \"Zulu\" format, accurate to nanoseconds.
     * Example: `"2014-10-02T15:01:23.045123456Z"`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_timestamp = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_timestamp = $var;

        return $this;
    }

}

