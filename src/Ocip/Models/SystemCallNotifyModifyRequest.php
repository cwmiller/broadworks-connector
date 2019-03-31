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
 * @Groups [{"id":"26f62134ab1693f4bdddc7c70b20d2eb:130","type":"sequence"}]
 */
class SystemCallNotifyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:130
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName useShortSubjectLine
     * @Type bool
     * @Optional
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:130
     * @var bool|null
     */
    private $useShortSubjectLine = null;

    /**
     * @ElementName useDnInMailBody
     * @Type bool
     * @Optional
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:130
     * @var bool|null
     */
    private $useDnInMailBody = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }

    /**
     * Getter for useShortSubjectLine
     *
     * @return bool
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useShortSubjectLine;
    }

    /**
     * Setter for useShortSubjectLine
     *
     * @param bool $useShortSubjectLine
     * @return $this
     */
    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $this->useShortSubjectLine = $useShortSubjectLine;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseShortSubjectLine()
    {
        $this->useShortSubjectLine = null;
        return $this;
    }

    /**
     * Getter for useDnInMailBody
     *
     * @return bool
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDnInMailBody;
    }

    /**
     * Setter for useDnInMailBody
     *
     * @param bool $useDnInMailBody
     * @return $this
     */
    public function setUseDnInMailBody($useDnInMailBody)
    {
        $this->useDnInMailBody = $useDnInMailBody;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDnInMailBody()
    {
        $this->useDnInMailBody = null;
        return $this;
    }


}

