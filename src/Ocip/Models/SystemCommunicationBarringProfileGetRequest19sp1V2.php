<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetRequest19sp1V2
 *
 * Get an existing Communication Barring Profile.
 *         The response is either a
 * SystemCommunicationBarringProfileGetResponse19sp1V2
 *         or an ErrorResponse.
 */
class SystemCommunicationBarringProfileGetRequest19sp1V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

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


}

