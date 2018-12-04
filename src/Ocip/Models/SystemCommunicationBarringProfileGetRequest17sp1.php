<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetRequest17sp1
 *
 * Get an existing Communication Barring Profile.
 *          The response is either a SystemCommunicationBarringProfileGetResponse17sp1
 *          or an ErrorResponse.
 *
 * @see SystemCommunicationBarringProfileGetResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21036","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:21036
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

