<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemApplicationControllerAddRequest
 *
 * Add an application controller, which is a server where remote
 *       application resides and controls the Route Point.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2360","type":"sequence"}]
 */
class SystemApplicationControllerAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2360
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName subscriberId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2360
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $subscriberId = null;

    /**
     * @ElementName channelSetId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2360
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $channelSetId = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for subscriberId
     *
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->subscriberId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberId;
    }

    /**
     * Setter for subscriberId
     *
     * @param string $subscriberId
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberId()
    {
        $this->subscriberId = null;
        return $this;
    }

    /**
     * Getter for channelSetId
     *
     * @return string
     */
    public function getChannelSetId()
    {
        return $this->channelSetId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->channelSetId;
    }

    /**
     * Setter for channelSetId
     *
     * @param string $channelSetId
     * @return $this
     */
    public function setChannelSetId($channelSetId)
    {
        $this->channelSetId = $channelSetId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChannelSetId()
    {
        $this->channelSetId = null;
        return $this;
    }
}

