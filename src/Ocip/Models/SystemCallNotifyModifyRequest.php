<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallNotifyModifyRequest
 *
 * Modify the system level data associated with Call Notify.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCallNotifyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFromAddress
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName useShortSubjectLine
     * @var bool|null
     */
    private $useShortSubjectLine = null;

    /**
     * @ElementName useDnInMailBody
     * @var bool|null
     */
    private $useDnInMailBody = null;

    /**
     * Getter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @return string|null
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @ElementName defaultFromAddress
     * @param string|null $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * Getter for useShortSubjectLine
     *
     * @ElementName useShortSubjectLine
     * @return bool|null
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine;
    }

    /**
     * Setter for useShortSubjectLine
     *
     * @ElementName useShortSubjectLine
     * @param bool|null $useShortSubjectLine
     * @return $this
     */
    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $this->useShortSubjectLine = $useShortSubjectLine;
        return $this;
    }

    /**
     * Getter for useDnInMailBody
     *
     * @ElementName useDnInMailBody
     * @return bool|null
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody;
    }

    /**
     * Setter for useDnInMailBody
     *
     * @ElementName useDnInMailBody
     * @param bool|null $useDnInMailBody
     * @return $this
     */
    public function setUseDnInMailBody($useDnInMailBody)
    {
        $this->useDnInMailBody = $useDnInMailBody;
        return $this;
    }


}

