<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifyTranslationAndRoutingOrigination
 *
 * Verification Translation and Routing origination
 *         value.
 *         
 *          The following element is only used in AS mode:
 *           userId
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5753","type":"choice"}]
 */
class VerifyTranslationAndRoutingOrigination
{
    /**
     * @ElementName linePort
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5753
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName phone
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5753
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $phone = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5753
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName url
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5753
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $url = null;

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phone;
    }

    /**
     * Setter for phone
     *
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhone()
    {
        $this->phone = null;
        return $this;
    }

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
     * Getter for url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->url;
    }

    /**
     * Setter for url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUrl()
    {
        $this->url = null;
        return $this;
    }
}

