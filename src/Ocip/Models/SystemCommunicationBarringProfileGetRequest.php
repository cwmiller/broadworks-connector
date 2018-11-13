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
 */
class SystemCommunicationBarringProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
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

