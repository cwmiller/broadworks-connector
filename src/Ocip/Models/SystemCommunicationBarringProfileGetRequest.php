<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetRequest
 *
 * Get an existing Communication Barring Profile.
 *         The response is either a SystemCommunicationBarringProfileGetResponse
 *         or an ErrorResponse.
 *         Replaced by: SystemCommunicationBarringProfileGetRequest16
 *
 * @see SystemCommunicationBarringProfileGetResponse
 * @see ErrorResponse
 * @see SystemCommunicationBarringProfileGetRequest16
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21002","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:21002
     * @var string|null
     */
    private $name = null;

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


}

