<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifyTranslationAndRoutingOrigination
 *
 * Verification Translation and Routing origination
 *         value.
 */
class VerifyTranslationAndRoutingOrigination
{

    /**
     * @ElementName linePort
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName phone
     * @var string|null
     */
    private $phone = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName url
     * @var string|null
     */
    private $url = null;

    /**
     * Getter for linePort
     *
     * @ElementName linePort
     * @return string|null
     */
    public function getLinePort()
    {
        return $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @ElementName linePort
     * @param string|null $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * Getter for phone
     *
     * @ElementName phone
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Setter for phone
     *
     * @ElementName phone
     * @param string|null $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for url
     *
     * @ElementName url
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Setter for url
     *
     * @ElementName url
     * @param string|null $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

