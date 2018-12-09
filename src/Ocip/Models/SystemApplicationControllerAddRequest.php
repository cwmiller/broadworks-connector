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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1860","type":"sequence"}]
 */
class SystemApplicationControllerAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1860
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName subscriberId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1860
     * @var string|null
     */
    private $subscriberId = null;

    /**
     * @ElementName channelSetId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1860
     * @var string|null
     */
    private $channelSetId = null;

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

