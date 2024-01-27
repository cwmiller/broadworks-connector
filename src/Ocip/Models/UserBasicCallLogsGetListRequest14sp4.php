<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBasicCallLogsGetListRequest14sp4
 *
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserBasicCallLogsGetListResponse14sp4 or an ErrorResponse.
 *
 * @see UserBasicCallLogsGetListResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"cc2c4e50d2e0f1ccbe7f5a9642204822:41","type":"sequence"}]
 */
class UserBasicCallLogsGetListRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group cc2c4e50d2e0f1ccbe7f5a9642204822:41
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName callLogType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallLogsType
     * @Optional
     * @Group cc2c4e50d2e0f1ccbe7f5a9642204822:41
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallLogsType|null
     */
    protected $callLogType = null;

    /**
     * @ElementName formatNameAndNumber
     * @Type bool
     * @Optional
     * @Group cc2c4e50d2e0f1ccbe7f5a9642204822:41
     * @var bool|null
     */
    protected $formatNameAndNumber = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for callLogType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallLogsType
     */
    public function getCallLogType()
    {
        return $this->callLogType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallLogsType $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\CallLogsType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLogType()
    {
        $this->callLogType = null;
        return $this;
    }

    /**
     * Getter for formatNameAndNumber
     *
     * @return bool
     */
    public function getFormatNameAndNumber()
    {
        return $this->formatNameAndNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->formatNameAndNumber;
    }

    /**
     * Setter for formatNameAndNumber
     *
     * @param bool $formatNameAndNumber
     * @return $this
     */
    public function setFormatNameAndNumber($formatNameAndNumber)
    {
        $this->formatNameAndNumber = $formatNameAndNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFormatNameAndNumber()
    {
        $this->formatNameAndNumber = null;
        return $this;
    }
}

