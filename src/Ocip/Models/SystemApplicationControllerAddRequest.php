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
 */
class SystemApplicationControllerAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName subscriberId
     * @var string|null
     */
    private $subscriberId = null;

    /**
     * @ElementName channelSetId
     * @var string|null
     */
    private $channelSetId = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for subscriberId
     *
     * @ElementName subscriberId
     * @return string|null
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * Setter for subscriberId
     *
     * @ElementName subscriberId
     * @param string|null $subscriberId
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * Getter for channelSetId
     *
     * @ElementName channelSetId
     * @return string|null
     */
    public function getChannelSetId()
    {
        return $this->channelSetId;
    }

    /**
     * Setter for channelSetId
     *
     * @ElementName channelSetId
     * @param string|null $channelSetId
     * @return $this
     */
    public function setChannelSetId($channelSetId)
    {
        $this->channelSetId = $channelSetId;
        return $this;
    }


}

