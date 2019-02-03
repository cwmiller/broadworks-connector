<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifyTranslationAndRoutingOrigination
 *
 * Verification Translation and Routing origination
 *         value.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:4576","type":"choice"}]
 */
class VerifyTranslationAndRoutingOrigination
{

    /**
     * @ElementName linePort
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4576
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName phone
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4576
     * @var string|null
     */
    private $phone = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4576
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName url
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:4576
     * @var string|null
     */
    private $url = null;

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

