<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetRequest17sp3
 *
 * Get an existing Communication Barring Profile.
 *         The response is either a SystemCommunicationBarringProfileGetResponse17sp3
 *         or an ErrorResponse.
 *         
 *         Replaced by: SystemCommunicationBarringProfileGetRequest19sp1 in AS data mode
 *
 * @see SystemCommunicationBarringProfileGetResponse17sp3
 * @see ErrorResponse
 * @see SystemCommunicationBarringProfileGetRequest19sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1419","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:1419
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

