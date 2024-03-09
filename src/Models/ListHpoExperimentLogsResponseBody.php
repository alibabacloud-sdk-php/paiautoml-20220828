<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class ListHpoExperimentLogsResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @example Missing \"user_id\" in request.
     *
     * @var string
     */
    public $message;

    /**
     * @example 071A904D-5A49-597F-9F69-81C7701D04AC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 467
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'       => 'Code',
        'detail'     => 'Detail',
        'logs'       => 'Logs',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHpoExperimentLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
